<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions to usuarios
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // create permissions to roles
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        // create permissions to permisos
        Permission::create(['name' => 'create permisos']);
        Permission::create(['name' => 'read permisos']);
        Permission::create(['name' => 'update permisos']);
        Permission::create(['name' => 'delete permisos']);

        //Permission list files
        Permission::create(['name' => 'uploads files']);
        Permission::create(['name' => 'download files']);
        Permission::create(['name' => 'update files']);
        Permission::create(['name' => 'delete files']);
        Permission::create(['name' => 'read files']);

        //Guest
        $guest = Role::create(['name' => 'Invitado']);
        $guest->givePermissionTo([
            'read files',
            'read users',
            'read roles',
            'read permisos'
        ]);

        //admin_users
        $admin_users = Role::create(['name' => 'admin-users']);
        $admin_users->givePermissionTo([
            'create users',
            'read users',
            'update users',
            'delete users'
        ]);

        //admin_roles
        $admin_roles = Role::create(['name' => 'admin-roles']);
        $admin_roles->givePermissionTo([
            'create roles',
            'read roles',
            'update roles',
            'delete roles'
        ]);

        //admin_permisos
        $admin_permisos = Role::create(['name' => 'admin-permisos']);
        $admin_permisos->givePermissionTo([
            'create permisos',
            'read permisos',
            'update permisos',
            'delete permisos'
        ]);

        //Admin
        $admin = Role::create(['name' => 'super-Admin']);
        $admin->givePermissionTo(Permission::all());

        //User Admin
        $user = User::find(1); //Admin Admin
        $user->assignRole('super-Admin');
    }
}
