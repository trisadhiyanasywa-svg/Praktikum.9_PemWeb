<?php

return [

    'resources' => [
        'PermissionResource' => \Althinect\FilamentSpatieRolesPermissions\Resources\PermissionResource::class,
        'RoleResource' => \Althinect\FilamentSpatieRolesPermissions\Resources\RoleResource::class,
    ],

    'preload_roles' => true,
    'preload_permissions' => true,

    // PERBAIKAN: Mengatur group navigasi menjadi 'User Management'
    'navigation_section_group' => 'User Management',

    'team_model' => null, // Ubah ke null jika tidak menggunakan sistem multi-tenancy/team

    'scope_to_tenant' => false,
    'scope_roles_to_tenant' => false,
    'scope_premissions_to_tenant' => false,

    'super_admin_role_name' => 'Super Admin',

    'should_register_on_navigation' => [
        'permissions' => true,
        'roles' => true,
    ],

    // ... (biarkan bagian should_show_permissions_for_roles sampai should_redirect_to_index seperti semula)

    'generator' => [
        // ... (biarkan bagian guard_names sampai permission_name seperti semula)

        'discover_models_through_filament_resources' => true, 

        'model_directories' => [
            app_path('Models'),
        ],

        'custom_models' => [],
        'excluded_models' => [],

        'excluded_policy_models' => [
            \App\Models\User::class,
        ],

        'custom_permissions' => [],
        'user_model' => \App\Models\User::class,
        'user_model_class' => 'User',
        'policies_namespace' => 'App\Policies',
    ],

    'layout' => [
        'resources' => [
            'default_section_column_span' => null
        ]
    ]
];