<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | These are the locations where Laravel will look for Blade templates.
    | You can add additional paths to this array as needed.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compile Path
    |--------------------------------------------------------------------------
    |
    | This is the path where Laravel will compile Blade templates into plain
    | PHP code for better performance. The default location is within the
    | framework storage directory.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];
