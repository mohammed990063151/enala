<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laratrust\Models\Role;
use Laratrust\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('permission_role')->truncate();
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // ✅ قراءة القيم من laratrust_seeder.php بدلاً من roles.php
        $roles = config('laratrust_seeder.role_structure');
        $maps  = config('laratrust_seeder.permissions_map');

        foreach ($roles as $roleName => $modules) {

            $role = Role::firstOrCreate([
                'name' => $roleName,
                'display_name' => ucfirst(str_replace('_', ' ', $roleName)),
                'description' => 'Role for ' . $roleName,
            ]);

            foreach ($modules as $module => $permissions) {
                $perms = explode(',', $permissions);

                foreach ($perms as $perm) {
                    $permName = $maps[$perm] . '_' . $module;

                    $permission = Permission::firstOrCreate([
                        'name' => $permName,
                        'display_name' => ucfirst($permName),
                        'description' => 'Permission to ' . $permName,
                    ]);

                    // ✅ Laratrust الحديث
                    if (!$role->permissions()->where('permission_id', $permission->id)->exists()) {
                        $role->permissions()->attach($permission->id);
                    }
                }
            }

            $this->command->info("✅ تم إنشاء الدور: {$roleName}");
        }

        $this->command->info('🎯 تم إنشاء جميع الأدوار والصلاحيات الخاصة بموقع مضياف بنجاح!');
    }
}
