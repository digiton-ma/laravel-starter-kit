<code-snippet name="Testing Guidelines for Laravel Applications"></code-snippet>

## Core Testing Principles

### Database Isolation
- **ALWAYS** add `use RefreshDatabase;` trait to the base `TestCase` class (not individual tests)
- This ensures ALL tests automatically reset the database, prevent data persistence, and reset auto-increments
- RefreshDatabase wraps each test in a database transaction that rolls back after completion
- Tests can run in any order without conflicts or leftover data

<code-snippet name="Base TestCase with RefreshDatabase" lang="php">
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;
}
</code-snippet>


## TiptapEditor Integration

### Critical Pattern
- TiptapEditor fields require specific JSON structure - **NEVER** use plain text or `json_encode([])`
- The string `'[]'` from `json_encode([])` is NOT valid TiptapEditor content
- Always use proper document structure with type and content nodes

<code-snippet name="Valid TiptapEditor JSON Structure" lang="php">
'content' => json_encode([
    'type' => 'doc',
    'content' => [
        [
            'type' => 'paragraph',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Your content here'
                ]
            ]
        ]
    ]
])
</code-snippet>

### Factory Implementation
- When creating factories for models with TiptapEditor fields, use the correct structure:

<code-snippet name="Factory with TiptapEditor Field" lang="php">
public function definition(): array
{
    return [
        'name' => fake()->sentence(),
        'description' => json_encode([
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => fake()->paragraph()
                        ]
                    ]
                ]
            ]
        ]),
    ];
}
</code-snippet>

### Testing TiptapEditor Content
- **DO NOT** assert for raw JSON content in views - TiptapEditor converts JSON to HTML
- Views will display rendered HTML, not the original JSON structure
- Remove assertions like `$response->assertSee($model->content)` for TiptapEditor fields


## Spatie Media Library

### Pattern Recognition
- If a model has media attachments, it uses Spatie Media Library, NOT database file columns
- Media files are stored in collections (e.g., 'slide-image', 'catalogue-file', 'technical-file')
- Check model relationships for `media()` or methods like `getFirstMediaUrl()`

### Testing File Downloads
- Use the proper Media Library pattern for creating test files:

<code-snippet name="Media Library Test Pattern" lang="php">
$catalogue = Catalogue::factory()->create();

// Create a temporary file
$tempFile = tmpfile();
$tempPath = stream_get_meta_data($tempFile)['uri'];

// Write valid file content (e.g., minimal PDF)
fwrite($tempFile, "%PDF-1.4\n%\n1 0 obj\n<<\n/Type /Catalog\n>>\nendobj\n");

// Attach to model using Media Library
$catalogue->addMedia($tempPath)
    ->usingFileName('test-catalogue.pdf')
    ->toMediaCollection('catalogue-file');

// Cleanup
fclose($tempFile);
</code-snippet>

### Valid File Formats
- When creating test images, use **valid binary data**, not plain text
- Invalid: `'fake image content'` or `'test image data'`
- Valid: Base64-decoded JPEG binary data

<code-snippet name="Creating Valid Test Images" lang="php">
$slide = Slide::factory()->create();

// Minimal valid JPEG (1x1 red pixel)
$validJpeg = base64_decode('/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAABAAEDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAv/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAX/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCwAA8A/9k=');

$tempFile = tmpfile();
$tempPath = stream_get_meta_data($tempFile)['uri'];
fwrite($tempFile, $validJpeg);

$slide->addMedia($tempPath)
    ->usingFileName('test-slide.jpg')
    ->toMediaCollection('slide-image');

fclose($tempFile);
</code-snippet>

### Media Collection Names
- Verify the exact collection name used in the model before writing tests
- Common mistake: using 'slides' when the actual collection is 'slide-image'
- Check the model's `registerMediaCollections()` method or search for `toMediaCollection()` calls


## Laravel Blade & Views

### Common Syntax Issues
- **Double curly braces are invalid** - Blade uses `{{ }}` for escaping, not `{{ {{ }} }}`
- Invalid: `<div>{{ {{ $variable }} }}</div>`
- Valid: `<div>{{ $variable }}</div>`

### View Cache
- If tests fail with old view content after fixes, clear the view cache:
  ```bash
  php artisan view:clear
  ```


## Relationship Testing

### Suggested/Related Items Pattern
- When testing "suggested products" or "related items", ensure they match required criteria
- Create test data with matching attributes (type, category, etc.)

<code-snippet name="Creating Suggested Products" lang="php">
$product = Product::factory()->create([
    'type' => 'premium',
]);

// Create suggested products with matching type and valid content
Product::factory()->count(3)->create([
    'type' => 'premium',
    'attributes' => json_encode([
        'type' => 'doc',
        'content' => [
            [
                'type' => 'paragraph',
                'content' => [
                    [
                        'type' => 'text',
                        'text' => fake()->sentence()
                    ]
                ]
            ]
        ]
    ]),
]);
</code-snippet>


## Factory Best Practices

### Enum Fields
- Always use valid enum values in factories
- Use `fake()->randomElement()` with actual enum cases

<code-snippet name="Factory with Enum Field" lang="php">
public function definition(): array
{
    return [
        'type' => fake()->randomElement(['standard', 'premium', 'basic']),
        'status' => fake()->randomElement(['active', 'inactive', 'draft']),
    ];
}
</code-snippet>

### Required Fields Checklist
- Ensure all non-nullable database columns have values in factories
- Check for foreign keys and relationship requirements
- Verify enum fields use valid cases
- Confirm JSON fields use proper structure (especially TiptapEditor)


## Running Tests

### Efficient Test Execution
- Run minimal tests when developing: `php artisan test --filter=testName`
- Run specific file: `php artisan test tests/Feature/ExampleTest.php`
- Run all tests before finalizing: `php artisan test`
- Use `vendor/bin/pint --dirty` to format code before final commit

### Test Performance
- RefreshDatabase adds overhead but ensures reliability
- Typical full suite: 30-40 seconds for 100+ tests
- If performance becomes an issue, consider SQLite in-memory database


## Debugging Failed Tests

### Systematic Approach
1. **Read the error message carefully** - look for validation errors, missing fields, type mismatches
2. **Check the factory** - ensure all required fields have valid values
3. **Verify relationships** - confirm related models exist and are properly connected
4. **Inspect JSON fields** - especially TiptapEditor content structure
5. **Check Media Library** - ensure correct collection names and valid file formats
6. **Clear caches** - run `php artisan view:clear` if views seem outdated
7. **Verify database schema** - confirm migrations match factory definitions

### Common Root Causes
- `json_encode([])` creating string `'[]'` instead of valid TiptapEditor JSON
- Plain text in image/PDF file fields instead of valid binary data
- Wrong media collection names (e.g., 'slides' vs 'slide-image')
- Missing enum values or invalid enum cases
- Blade syntax errors (double curly braces)
- View cache containing outdated content
- Missing related models for suggested/related items queries


## Pest Testing Patterns

### Status Code Assertions
- Use specific methods instead of generic `assertStatus()`
- Examples: `assertSuccessful()`, `assertForbidden()`, `assertNotFound()`

<code-snippet name="Pest Response Assertions" lang="php">
it('returns successful response', function () {
    $response = $this->get('/');

    $response->assertSuccessful();  // Use this
    // NOT: $response->assertStatus(200);
});

it('returns not found', function () {
    $response = $this->get('/nonexistent');

    $response->assertNotFound();  // Use this
    // NOT: $response->assertStatus(404);
});
</code-snippet>

### Dataset Usage
- Use datasets to reduce duplication, especially for validation tests

<code-snippet name="Pest Dataset for Validation" lang="php">
it('validates email format', function (string $email) {
    Livewire::test(ContactForm::class)
        ->set('email', $email)
        ->call('submit')
        ->assertHasErrors(['email']);
})->with([
    'invalid plain text' => 'notanemail',
    'missing @ symbol' => 'test.com',
    'missing domain' => 'test@',
    'invalid characters' => 'test @example.com',
]);
</code-snippet>


## Production Considerations

### Database Seeders
- Test factories may use different data than production seeders
- Example: Factories use 'standard'/'premium'/'basic' types, but seeders use 'détergents'/'désinfectants'
- Consider disabling incompatible seeders or aligning enum values

### Code Formatting
- Always run `vendor/bin/pint` before committing test changes
- Ensures consistent code style across the project


## Quick Reference Checklist

Before writing tests, verify:
- ✅ `RefreshDatabase` trait in base `TestCase`
- ✅ TiptapEditor fields use proper JSON structure in factories
- ✅ Media Library collections use correct names
- ✅ Enum fields have valid values
- ✅ File fields contain valid binary data (not plain text)
- ✅ All required database columns have values in factories
- ✅ Related models exist for relationship queries
- ✅ Views are cleared if cache issues suspected

</code-snippet>
