<?php

use Illuminate\Database\Seeder;
use Fridge\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory(User::class, 10)->create();
        DB::table('users')->insert([
            [
                'name' => 'Michael Manning',
                'email' => 'admin1@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Sean White',
                'email' => 'admin2@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Elias Athey',
                'email' => 'admin3@example.com',
                'password' => bcrypt('123456'),
            ],
        ]);
    }
}
