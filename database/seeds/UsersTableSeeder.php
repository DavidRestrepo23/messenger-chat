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
            'name' => 'David Restrepo',
            'email' => 'drv404@hotmail.com',
            'password' => bcrypt('admin')
        ]);

        App\User::create([
            'name' => 'Yuri Mejía',
            'email' => 'yuri@mail.com',
            'password' => bcrypt('admin')
        ]);

        App\User::create([
            'name' => 'Julian Restrepo',
            'email' => 'juli@mail.com',
            'password' => bcrypt('admin')
        ]);
    }
}
