<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "code" => mt_rand(1000, 9999),
                "image" => "",
                "name" => "Kopi Toraja",
                "variant" => "Kopi Arabica",
                "price" => 999,
                "stock" => mt_rand(10, 99),
                "categorie_id" => 1,
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, consequuntur."
            ],
            [
                "code" => mt_rand(1000, 9999),
                "image" => "",
                "name" => "Kopi Gayo",
                "variant" => "Kopi Arabica",
                "price" => 999,
                "stock" => mt_rand(10, 99),
                "categorie_id" => 1,
                "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, molestias."
            ],
            [
                "code" => mt_rand(1000, 9999),
                "image" => "",
                "name" => "Kopi Mandailing",
                "variant" => "Kopi Arabica",
                "price" => 999,
                "stock" => mt_rand(10, 99),
                "categorie_id" => 1,
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, obcaecati?"
            ]
        ];
        foreach ($products as $prd) {
            Product::create([
                'code' => $prd->code,
                'image' => $prd->image,
                'name' => $prd->name,
                'varian' => $prd->name,
                'price' => $prd->randomNumber(3),
                'stock' => $prd->randomNumber(2),
                "categorie_id" => $prd->categorie_id,
                "description" => $prd->name
            ]);
        }
    }
}
