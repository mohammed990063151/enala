<?php

return [

    'default' => env('FILESYSTEM_DISK', 'local'),

    'disks' => [

        // 🗂️ التخزين المحلي (للاستخدام الافتراضي)
        'local' => [
            'driver' => 'local',
            // 'root' => storage_path('app/private'),
            'root' => base_path('public_html'),
            'serve' => true,
            'throw' => false,
            'report' => false,
        ],

        // 🖼️ التخزين العام داخل public_html (يُستخدم لرفع الصور للموقع)
        'public_uploads' => [
            'driver' => 'local',
            // إذا تعمل على Hostinger أو سيرفر cPanel داخل public_html
            'root' => base_path('public_html'),
            'url' => env('APP_URL'),
            'visibility' => 'public',
            'throw' => false,
            'report' => false,
        ],

        // 📦 تخزين Laravel الافتراضي
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
            'throw' => false,
            'report' => false,
        ],

        // ☁️ تخزين S3 (في حال استخدمته مستقبلاً)
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
            'report' => false,
        ],

    ],

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
