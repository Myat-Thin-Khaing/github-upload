<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Str::random(10)',
            'pdt_price' => 'Int::random(10)',
            'cat_id'=>'Int::random(10)',
            
        ]);
    }
}
