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
    }
}
