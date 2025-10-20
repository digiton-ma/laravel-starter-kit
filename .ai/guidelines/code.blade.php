## Guideline Management

- **NEVER edit your markdown instructions files directly**.
- **ALWAYS manage guidelines through .ai/guidelines/*.blade.php files**.
- For general-purpose instructions, edit or create files in .ai/guidelines/ directory.
- Use core.blade.php for application-wide guidelines.
- Create specific files (e.g., enums.blade.php, testing.blade.php) for topic-specific guidelines.
- After modifying any guideline file, run php artisan boost:update to propagate changes to markdown instructions files.

## Enums

- *NEVER use database ENUM columns*. They are limiting and difficult to change.
- *ALWAYS use backed enums* with integer values stored in unsignedTinyInteger columns.
- Create PHP backed enums in the app/Enums directory.
- Always cast enum columns in models using the enum class in the casts() method.
- Backed enums must use integer values (e.g., enum Status: int { case Pending = 1; }).
- Include a label() method on each enum for human-readable labels.

### Example

<code-snippet name="Enum: app/Enums/Status.php" lang="php">
    enum Status: int
    {
        case Pending = 1;
        case Approved = 2;
        case Rejected = 3;

        public function label(): string
        {
            return match($this) {
            self::Pending => 'Pending',
            self::Approved => 'Approved',
            self::Rejected => 'Rejected',
        };
        }
    }
</code-snippet>

<code-snippet name="Migration" lang="php">
    $table->unsignedTinyInteger('status')->default(1);
</code-snippet>

<code-snippet name="Model, Factory, and Usage" lang="php">
    protected function casts(): array
    {
        return [
        'status' => \App\Enums\Status::class,
        ];
    }
</code-snippet>

<code-snippet name="Factory" lang="php">
    'status' => \App\Enums\Status::Pending->value,
</code-snippet>

<code-snippet name="Usage" lang="php">
    if ($model->status === \App\Enums\Status::Approved) {
        // Do something
    }
</code-snippet>
