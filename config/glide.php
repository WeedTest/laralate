<?php

return [

    /**
     * The driver that will be used to create images. Can be set to gd or imagick.
     */
    'driver' => 'gd',


    'key' => env('GLIDE_KEY'),

    'store' => storage_path('app/public'),
];
