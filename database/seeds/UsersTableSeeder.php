<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'      => 'Admin Admin',
            'email'     => 'admin@admin.com',
            'password'     => bcrypt('admin123'),

        ]);

        App\User::create([
            'name'      => 'Invitado Invitado',
            'email'     => 'invitado@invitado.com',
            'password'     => bcrypt('invitado123'),

        ]);

        App\User::create([
            'name'      => 'Angel Lopez',
            'email'     => 'alopez@anglop.com',
            'password'     => bcrypt('anglop123'),

        ]);

        factory(App\User::class, 7)->create();
    }
}
