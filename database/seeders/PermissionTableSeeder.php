<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //list of all required permissions
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'logging-list',
            'logging-create',
            'logging-edit',
            'logging-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
