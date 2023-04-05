<?php

return [
    /*
    |--------------------------------------------------------------------------
    | DOMPDF Configuration
    |--------------------------------------------------------------------------
    |
    | See https://github.com/barryvdh/laravel-dompdf/wiki/Usage#config-options
    |
    */

    'public_path' => base_path(),
    'font_dir' => base_path('storage/fonts/'),
    'font_cache' => storage_path('app/dompdf/fontcache/'),
    'temp_dir' => storage_path('app/dompdf/temp/'),
];
