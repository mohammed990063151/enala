<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        // 🔹 جميع الصلاحيات الخاصة بموقع مضياف
        $permissions = [
            // الصفحة الرئيسية
            'read_home', 'update_home',

            // لماذا نحن
            'read_whyus', 'create_whyus', 'update_whyus', 'delete_whyus',

            // الخدمات
            'read_services', 'create_services', 'update_services', 'delete_services',

            // المشاريع
            'read_projects', 'create_projects', 'update_projects', 'delete_projects',

            // التواصل
            'read_contacts', 'update_contacts',

            // الإعدادات العامة
            'read_settings', 'update_settings',

            // المستخدمين
            'read_users', 'create_users', 'update_users', 'delete_users',

            // الأدوار والصلاحيات
            'read_roles', 'create_roles', 'update_roles', 'delete_roles',

            // البانرات
            'read_banners', 'create_banners', 'update_banners', 'delete_banners',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // 🔸 إنشاء أدوار
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $editorRole = Role::firstOrCreate(['name' => 'editor']);
        $viewerRole = Role::firstOrCreate(['name' => 'viewer']);

        // 🔸 ربط الصلاحيات بالأدوار
        $adminRole->syncPermissions($permissions);

        $editorRole->syncPermissions([
            'read_home', 'update_home',
            'read_services', 'update_services',
            'read_projects', 'update_projects',
            'read_banners', 'update_banners',
            'read_whyus', 'update_whyus',
            'read_contacts', 'update_contacts',
        ]);

        $viewerRole->syncPermissions([
            'read_home', 'read_services', 'read_projects', 'read_whyus', 'read_contacts',
        ]);
    }
}
