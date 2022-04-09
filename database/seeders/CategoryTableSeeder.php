<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->nom = "Casques VR";
        $category->is_online = 1;
        $category->save();

        $category2 = new Category();
        $category2->nom = "Consoles";
        $category2->is_online = 1;
        $category2->save();

        $category3 = new Category();
        $category3->nom = "Accessoires";
        $category3->is_online = 1;
        $category3->save();

        $category4 = new Category();
        $category4->nom = "Ordinateurs";
        $category4->is_online = 1;
        $category4->save();
    }
}
