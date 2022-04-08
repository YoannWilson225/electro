<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $article= new Article();
        $article-> nom = " Goonies";
        $article-> prix_ht = 25;
        $article-> description = "l petit garçon";
        $article-> photo_produit = "slide 1.jpg";
        $article-> category_id=1;
        $article-> save();

        $article= new Article();
        $article-> nom = "Rouge";
        $article-> prix_ht = 35;
        $article-> description = "Polo Vvip";
        $article-> photo_produit = "polo 2.jpg";
        $article-> category_id=1;
        $article-> save();

        $article= new Article();
        $article-> nom = "blanc";
        $article-> prix_ht = 45;
        $article-> description = "comme ça";
        $article-> photo_produit = "polo 3.jpg";
        $article-> category_id=8;
        $article-> save();

        $article= new Article();
        $article-> nom = "ciel";
        $article-> prix_ht = 55;
        $article-> description = "Polo des nuages";
        $article-> photo_produit = "polo 4.jpg";
        $article-> category_id=2;
        $article-> save();

        $article= new Article();
        $article-> nom = "polo 4";
        $article-> prix_ht = 65;
        $article-> description = "comme si";
        $article-> photo_produit = "polo 5.jpg";
        $article-> category_id=2;
        $article-> save();

        $article= new Article();
        $article-> nom = "polo 5";
        $article-> prix_ht = 75;
        $article-> description = "patati";
        $article-> photo_produit = "polo 6.jpg";
        $article-> category_id=2;
        $article-> save();

        $article= new Article();
        $article-> nom = "polo 6";
        $article-> prix_ht = 85;
        $article-> description = "Patata";
        $article-> photo_produit = "polo 7.jpg";
        $article-> category_id=3;
        $article-> save();

        $article= new Article();
        $article-> nom = "plol 7";
        $article-> prix_ht = 95;
        $article-> description = "patato";
        $article-> photo_produit = "polo 8.jpg";
        $article-> category_id=3;
        $article-> save();

        $article= new Article();
        $article-> nom = "polo patate";
        $article-> prix_ht = 105;
        $article-> description = "patate";
        $article-> photo_produit = "polo 9.jpg";
        $article-> category_id=3;
        $article-> save();


    }
}
