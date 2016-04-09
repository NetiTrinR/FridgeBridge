<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('items')->truncate();
        DB::table('items')->insert([
        	['name'=>'Cheddar Cheese', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=1/*Dairy*/],
        	['name'=>'Pepper Jack Cheese', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=1],
        	['name'=>'American Cheese', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=1],
        	['name'=>'Provolone Cheese', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=1],
        	['name'=>'Skim Milk', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=1],
        	['name'=>'2% Milk', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=1],
        	['name'=>'Whole Milk', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=1],
        	['name'=>'Yogurt', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=1],
        	['name'=>'Romaine Lettuce', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=2/*Produce*/],
        	['name'=>'Cabage', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=2],
        	['name'=>'Cucumbers', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=2],
        	['name'=>'Carrots', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=2],
        	['name'=>'Tomatoes', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=2],
        	['name'=>'Strawberries', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=2],
        	['name'=>'Grapes', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=2],
        	['name'=>'Luncheon Meat', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=3/*Meat*/],
        	['name'=>'Beef', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=3],
        	['name'=>'Chicken', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=3],
        	['name'=>'Bacon', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=3],
        	['name'=>'Trout', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=3],
        	['name'=>'Ice Cream', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=4/*Frozen*/],
        	['name'=>'Frozen Pizza', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=4],
        	['name'=>'Waffles', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=4],
        	['name'=>'Peas', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=4],
        	['name'=>'Coke', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=5/*Beverages*/],
        	['name'=>'Pepsi', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=5],
        	['name'=>'Lemonade', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=5],
        	['name'=>'Budweiser', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=5],
        	['name'=>'Alaskan Amber', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=5],
        	['name'=>'Ketchup', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=6/*Other*/],
        	['name'=>'Mustard', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=6],
        	['name'=>'Mayonaise', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=6],
        	['name'=>'Jelly', 'expire'=>Carbon::now()->subWeek(2), 'category_id'=6],
        	]);

    }
}
