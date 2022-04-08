<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Récuperer la catégorie parent d'une catégorie
    public function parent(){
      return  $this->belongsTo('App\Models\Category','parent_id');
    }

    public function childrens(){

      return  $this->hasMany('App\Models\Category','parent_id');

    }


    public function articlesParent(){

        return  $this->hasMany('App\Models\Article');

      }


      public function articlesChild(){

        return  $this->hasManyThrough('App\Models\Article','App\Models\Category','parent_id','category_id');

      }



      public function articles(){
          $articles = $this->articlesParent()->get()->merge($this->articlesChild()->get());
        return $articles;
      }
}
