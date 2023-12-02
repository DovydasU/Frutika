<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => "Green Apple",
            'description' => "The Granny Smith, also known as a green apple or sour apple, is an apple cultivar that originated in Australia in 1868. It is named after Maria Ann Smith, who propagated the cultivar from a chance seedling.",
            'image' => "product-img-5.jpg",
            'price' => 19.99,
            'left' => 100,
            'active' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Strawberry",
            'description' => "The garden strawberry is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries, which are cultivated worldwide for their fruit. The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.",
            'image' => "product-img-1.jpg",
            'price' => 35.50,
            'left' => 268,
            'active' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Berry",
            'description' => "A berry is a small, pulpy, and often edible fruit. Typically, berries are juicy, rounded, brightly colored, sweet, sour or tart, and do not have a stone or pit, although many pips or seeds may be present.",
            'image' => "product-img-2.jpg",
            'price' => 14.99,
            'left' => 502,
            'active' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Lemon",
            'description' => "The lemon is a species of small evergreen tree in the flowering plant family Rutaceae, native to Asia, primarily Northeast India, Northern Myanmar, or China.",
            'image' => "product-img-3.jpg",
            'price' => 13.25,
            'left' => 672,
            'active' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Kiwi",
            'description' => "Kiwifruit or Chinese gooseberry is the edible berry of several species of woody vines in the genus Actinidia. The most common cultivar group of kiwifruit.",
            'image' => "product-img-4.jpg",
            'price' => 32.50,
            'left' => 66,
            'active' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Raspberry",
            'description' => "The raspberry is the edible fruit of a multitude of plant species in the genus Rubus of the rose family, most of which are in the subgenus Idaeobatus. The name also applies to these plants themselves. Raspberries are perennial with woody stems.",
            'image' => "product-img-6.jpg",
            'price' => 9.99,
            'left' => 420,
            'active' => 1,
        ]);
    }
}
