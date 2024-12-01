<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('roles.index');
        $roleAdmin->givePermissionTo('roles.create');
        $roleAdmin->givePermissionTo('roles.edit');
        $roleAdmin->givePermissionTo('roles.delete');

        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo('users.index');
        $roleUser->givePermissionTo('users.create');
        $roleUser->givePermissionTo('users.edit');
        $roleUser->givePermissionTo('users.delete');
    }
}
