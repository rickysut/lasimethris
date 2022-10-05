<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
                'perm_type' => 5,
                'grp_title' => 'User Management',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
                'perm_type' => 1,
                'grp_title' => 'Permissions',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
                'perm_type' => 2,
                'grp_title' => 'Permissions',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
                'perm_type' => 3,
                'grp_title' => 'Permissions',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
                'perm_type' => 4,
                'grp_title' => 'Permissions',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
                'perm_type' => 5,
                'grp_title' => 'Permissions',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
                'perm_type' => 1,
                'grp_title' => 'Roles',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
                'perm_type' => 2,
                'grp_title' => 'Roles',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
                'perm_type' => 3,
                'grp_title' => 'Roles',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
                'perm_type' => 4,
                'grp_title' => 'Roles',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
                'perm_type' => 5,
                'grp_title' => 'Roles',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
                'perm_type' => 1,
                'grp_title' => 'Users',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
                'perm_type' => 2,
                'grp_title' => 'Users',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
                'perm_type' => 3,
                'grp_title' => 'Users',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
                'perm_type' => 4,
                'grp_title' => 'Users',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
                'perm_type' => 5,
                'grp_title' => 'Users',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
                'perm_type' => 3,
                'grp_title' => 'Audit Logs',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
                'perm_type' => 5,
                'grp_title' => 'Audit Logs',
            ],
            [
                'id'    => 19,
                'title' => 'profile_password_edit',
                'perm_type' => 2,
                'grp_title' => 'Profile',
            ],
        ];

        Permission::insert($permissions);
    }
}
