<?php

namespace Database\Seeders;


use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new Product();
        $product->nom = "Casque VR";
        $product->prix = 100000;
        $product->description = "Casque VR permettant une immersion 3d réaliste";
        $product->photo_principale = "casque.jpg";
        $product->save();

        $product = new Product();
        $product->nom = "Fauteille gamer";
        $product->prix = 200000;
        $product->description = "Fauteille gamer permettant une meilleure expérience utilisateur";
        $product->photo_principale = "faut.jpg";
        $product->save();

        $product = new Product();
        $product->nom = "PS5";
        $product->prix = 700000;
        $product->description = "PS5 sony, le jeu vidéo sous sa forme la plus réelle";
        $product->photo_principale = "ps5.jpg";
        $product->save();
    }
}
