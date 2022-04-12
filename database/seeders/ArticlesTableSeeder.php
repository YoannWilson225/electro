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
        $article-> nom = "Casque VR futuriste";
        $article-> prix_ht = 500000;
        $article-> description = "Pour les sensations fortes";
        $article-> photo_produit = "04.jpg";
        $article-> category_id=3;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR prenium";
        $article-> prix_ht = 700000;
        $article-> description = "la 3d la réalité";
        $article-> photo_produit = "05.jpg";
        $article-> category_id=4;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR immersif";
        $article-> prix_ht = 450000;
        $article-> description = "Se fondre dans le decord";
        $article-> photo_produit = "06.jpg";
        $article-> category_id=5;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR transcendant";
        $article-> prix_ht = 250000;
        $article-> description = "Transcender l'ame";
        $article-> photo_produit = "07.jpg";
        $article-> category_id=6;
        $article-> save();

        $article= new Article();
        $article-> nom = "Casque VR branché";
        $article-> prix_ht = 300000;
        $article-> description = "Pour le fun";
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

        // $article= new Article();
        // $article-> nom = "Xbox 360";
        // $article-> prix_ht = 100000;
        // $article-> description = "Une console pour débuter";
        // $article-> photo_produit = "play1.jpg";
        // $article-> category_id=9;
        // $article-> save();

        // $article= new Article();
        // $article-> nom = "Xbox one";
        // $article-> prix_ht = 200000;
        // $article-> description = "la console des pros";
        // $article-> photo_produit = "play2.jpg";
        // $article-> category_id=10;
        // $article-> save();

        // $article= new Article();
        // $article-> nom = "Nintendo swich";
        // $article-> prix_ht = 200000;
        // $article-> description = "Pour les enfants et la famille";
        // $article-> photo_produit = "play3.jpg";
        // $article-> category_id=11;
        // $article-> save();

        // $article= new Article();
        // $article-> nom = "Manette Pc";
        // $article-> prix_ht = 30000;
        // $article-> description = "Une manette pour gamer sur pc";
        // $article-> photo_produit = "manet.jpg";
        // $article-> category_id=12;
        // $article-> save();

        // $article= new Article();
        // $article-> nom = "Manette PS4";
        // $article-> prix_ht = 25000;
        // $article-> description = "Manette adaptée aux PS4";
        // $article-> photo_produit = "lg03.jpg";
        // $article-> category_id=13;
        // $article-> save();
    }
}
