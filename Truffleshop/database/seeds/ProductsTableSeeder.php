<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $products = \App\Products([
//            'imagePath' => 'asset/img/oil/terroirs-d-antan-winter-black-french-truffle-oil-1S-2951.jpg',
//            'title' => 'Truffle Oil',
//            'description' => 'Best Truffle Oil',
//            'price' => 10
        DB::table('products')->insert([
            'imagePath' => 'asset/img/fresh-truffles/EW20180223_TruffleHunter-6.jpg',
            'title' => 'Truffle Oil',
            'description' => 'Best Truffle Oil',
            'price' => 10

        ]);
//        $products->save();
    }
}
