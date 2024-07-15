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
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Merah',
            'category'=>'kain',
            'gallery'=>'img/tenun1.jpeg',
            'stock' => 25
            ],
            [
            'name'=>'Tenun Biru',
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'kain',
            'gallery'=>'img/tenun2.jpeg',
            'stock' => 20
            ],
            [
            'name'=>'Tenun Orange',
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'kain',
            'gallery'=>'img/tenun3.jpeg',
            'stock' => 20
            ],
            [
            'name'=>'Tenun salur warna',
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'kain',
            'gallery'=>'img/tenun4.jpeg',
            'stock' => 20
            ],
            [
            'name'=>'Tenun Ungu',
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'kain',
            'gallery'=>'img/tenun5.jpeg',
            'stock' => 20
            ],
            [
            'name'=>'Tenun Blanket Putih',
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'kain',
            'gallery'=>'img/tenun6.jpeg',
            'stock' => 20
            ],
            [
            'name'=>'Tenun Blanket Salur',
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'kain',
            'gallery'=>'img/tenun7.jpeg',
            'stock' => 20
            ],
            [
            'name'=>'Tenun Salur',
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'kain',
            'gallery'=>'img/tenun8.jpeg',
            'stock' => 20
            ],
            [
            'name'=>'Tenun Blanket Jawa',
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'kain',
            'gallery'=>'img/tenun9.jpeg',
            'stock' => 20
            ],
            [
            'name'=>'Tenun Batik Salur',
            'price'=>250000,
            'description'=>'Tenun Ikat Berwarna Biru',
            'category'=>'kain',
            'gallery'=>'img/tenun10.jpeg',
            'stock' => 20
            ],
        ]);
    }
}
