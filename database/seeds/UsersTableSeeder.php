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
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin'),
                'is_admin' => 1,
                'phone' => 'admin',
            ],
            [
                'name' => 'user',
                'email' => 'user@mail.com',
                'password' => bcrypt('user'),
                'is_admin' => 0,
                'phone' => 'user',
            ],
        ]);
    }
}
