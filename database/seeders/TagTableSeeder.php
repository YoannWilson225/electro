<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->nom = "#Vip";
        $tag->save();

        $tag2 = new Tag();
        $tag2->nom = "#Vvip";
        $tag2->save();

        $tag3 = new Tag();
        $tag3->nom = "#Roi";
        $tag3->save();

    }
}
