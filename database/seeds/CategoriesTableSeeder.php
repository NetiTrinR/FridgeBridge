<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            ['name' => 'Dairy'],
            ['name' => 'Produce'],
            ['name' => 'Meat'],
            ['name' => 'Frozen'],
            ['name' => 'Beverages'],
            ['name' => 'Other'],
        ]);
    }
}
