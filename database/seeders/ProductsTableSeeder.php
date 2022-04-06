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
    }
}
