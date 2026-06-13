<?php

use Firefly\FilamentBlog\Models\User;

return [
    'tables' => [
        'prefix' => 'fblog_',
    ],
    'route' => [
        'prefix' => 'blogs',
        'middleware' => ['web'],
        'home' => [
            'name' => 'filamentblog.home',
            'url' => env('APP_URL', 'http://localhost'),
        ],
        'login' => [
            'name' => 'filamentblog.post.login',
        ],
    ],
    'user' => [
        'model' => User::class,
        'foreign_key' => 'user_id',
        'columns' => [
            'name' => 'name',
            'avatar' => 'profile_photo_path',
            'designation' => 'designation',
            'bio' => 'bio',
        ],
    ],
    'blog_image' => [
        'directory' => 'blog-feature-images',
        'cover_aspect_ratio' => env('FILAMENT_BLOG_COVER_ASPECT_RATIO', '1.91:1'),
        'auto_open_editor' => env('FILAMENT_BLOG_AUTO_OPEN_EDITOR', true),
        'max_size' => 5120,
    ],
    'seo' => [
        'meta' => [
            'title' => 'Filament Blog',
            'description' => 'This is filament blog seo meta description',
            'keywords' => [],
        ],
    ],
    'post_rendering' => [
        'table_of_content' => [
            'enabled' => false,
            'title' => false,
        ],
        'show_author' => env('FILAMENT_BLOG_SHOW_AUTHOR', true),
    ],
    'recaptcha' => [
        'enabled' => false,
        'site_key' => env('RECAPTCHA_SITE_KEY'),
        'secret_key' => env('RECAPTCHA_SECRET_KEY'),
    ],
    'filesystem' => [
        'visibility' => 'public',
        'disk' => 'public',
    ],
];