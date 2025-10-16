<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Glide Parameters
    |--------------------------------------------------------------------------
    |
    | These parameters will be merged into every Glide call unless overridden.
    |
    */

    'defaults' => [
        'fm' => 'webp',
        'fit' => 'max',
    ],

    /*
    |--------------------------------------------------------------------------
    | Output Path
    |--------------------------------------------------------------------------
    |
    | Where manipulated images are stored (relative to storage/app/public).
    |
    */

    'output_dir' => 'manipulated',

];
