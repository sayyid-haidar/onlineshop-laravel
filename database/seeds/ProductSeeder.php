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
        $faker = Faker::create();
        for($i=0; $i<30 ; $i++)
        {
            Product::create([
                'code' => $faker->postcode,
                'image' => $faker->image,
                'name' => $faker->name,
                'varian' => $faker->name,
                'price' => $faker->randomNumber(3),
                'stock' => $faker->randomNumber(2),
                "categorie_id" => 1,
                "description" => $faker->name
            ]);
        }
    }
}
