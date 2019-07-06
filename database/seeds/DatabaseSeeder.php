<?php

use Illuminate\Database\Seeder;
use App\Categorie;
use App\Template;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $catagories = ["Coffee & Beverages", "Equipment", "Brewers", "Tools"];

        foreach ($catagories as $ctr) {
            Categorie::create([
                "name" => $ctr,
            ]);
        }

        User::create([
            [
                "name" => "admin",
                "email" => "admin@gmail.com",
                "password" => '$2y$10$XZZB.oe2MOA.8hqvedgfYufKoQJq.tng0GsDTKeHyQU37v4aIDJx.',
                // password = pemimpigila
                "isAdmin" => 1,
            ],
            [
                "name" => "user",
                "email" => "user@gmail.com",
                "password" => '$2y$10$Pzpuk5RelwmblGrl8IGJv.3dqdsprgwEx9YgTYZoNV6ykCQzkbRAu',
                // password = pemimpigila
                "isAdmin" => 0,
            ],
        ]);


        Template::create([
            [
                "name" => "template Sayid",
                "folder" => "template_sayid",
                "selected" => 1,
            ],
            [
                "name" => "template Bachtiar",
                "folder" => "template_bachtiar"
            ],
            [
                "name" => "template Ismail",
                "folder" => "template_ismail"
            ],
        ]);
    }
}
