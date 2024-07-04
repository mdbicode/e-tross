<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Tenun Merah',
            'price'=>'250.000',
            'description'=>'Tenun Ikat Berwarna Merah',
            'category'=>'Kain',
            'gallery'=>'img/tenun_merah.jpeg',
            'stock' => 25
            ],
            [
            'name'=>'Tenun Biru',
            'price'=>'250.000',
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'Kain',
            'gallery'=>'img/tenun_biru.jpeg',
            'stock' => 20
            ],
        ]);
    }
}
