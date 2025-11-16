<?php


return [

    'default' => env('FILESYSTEM_DISK', 'public'),

    'disks' => [

        // التخزين المحلي الافتراضي
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        // التخزين داخل public_html مباشرة
        'public_uploads' => [
    'driver' => 'local',
    'root' => base_path('../public_html'),   // المسار الصحيح لـ public_html
    'url' => env('APP_URL'),
    'visibility' => 'public',
],


        // التخزين الافتراضي للملفات
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],

        // S3 لو احتجته لاحقًا
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],

    ],

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
