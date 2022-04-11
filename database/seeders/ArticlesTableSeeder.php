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
        $article-> nom = " Casque VR pro";
        $article-> prix_ht = 300000;
        $article-> description = "Permet une plus grande immersion dans le jeu";
        $article-> photo_produit = "09.jpg";
        $article-> category_id=1;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR simple";
        $article-> prix_ht = 280000;
        $article-> description = "Un premier casque idéal pour commencer";
        $article-> photo_produit = "26.jpg";
        $article-> category_id=2;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR simple";
        $article-> prix_ht = 500000;
        $article-> description = "Un premier casque idéal pour commencer";
        $article-> photo_produit = "04.jpg";
        $article-> category_id=3;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR simple";
        $article-> prix_ht = 700000;
        $article-> description = "Un premier casque idéal pour commencer";
        $article-> photo_produit = "05.jpg";
        $article-> category_id=4;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR simple";
        $article-> prix_ht = 450000;
        $article-> description = "Un premier casque idéal pour commencer";
        $article-> photo_produit = "06.jpg";
        $article-> category_id=5;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR simple";
        $article-> prix_ht = 250000;
        $article-> description = "Un premier casque idéal pour commencer";
        $article-> photo_produit = "07.jpg";
        $article-> category_id=6;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR simple";
        $article-> prix_ht = 300000;
        $article-> description = "Un premier casque idéal pour commencer";
        $article-> photo_produit = "08.jpg";
        $article-> category_id=7;
        $article-> save();

        $article= new Article();
        $article-> nom = "PS4";
        $article-> prix_ht = 200000;
        $article-> description = "Playstation4 Pro";
        $article-> photo_produit = "32.jpg";
        $article-> category_id=8;
        $article-> save();
    }
}
