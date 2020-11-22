<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Prductseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "name"=>"konka",
            "category"=>"tv",
            "price"=>"22000",
            "description"=>"Contains 4gb ram and 64gb internal storage",
            "gallery"=>"https://cnet3.cbsistatic.com/img/tbESLNqkSxSFafCe6Ro-CuZoDc0=/1200x675/2020/01/03/09738362-0e00-4923-b42d-7b85dbb6d4ad/konka-q7-series-qled-smart-tv-55-inch.jpg",

            
        ]);
        }

}
