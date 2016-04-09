<?php

use Illuminate\Database\Seeder;
use Fridge\User;

class ItemUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("item_user")->truncate();
        $users = User::all();
        foreach ($users as $key => $user) {
        	DB::table("item_user")->insert([
        		[
        			'item_id' => 1,
        			'user_id' => $key,
        		],
        		[
        			'item_id' => 2,
        			'user_id' => $key,
        		],
        		[
        			'item_id' => 3,
        			'user_id' => $key,
        		],
        		[
        			'item_id' => 4,
        			'user_id' => $key,
        		],
        		[
        			'item_id' => 5,
        			'user_id' => $key,
        		],
        	]);
        }
    }
}
