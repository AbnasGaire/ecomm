<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"shyam",
            "email"=>"shyam@gmail.com",
            "password"=>Hash::make("nepal123")
        ]);
    }
}
