<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
            $this->call(CategoryTableSeeder::class); 
            //$this->call(ProductTableSeeder::class);
    }  
}
