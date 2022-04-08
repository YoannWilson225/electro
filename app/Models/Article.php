<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   public function category(){

      return $this->belongsTo("App\Models\Category");

   }


   public function tags(){

    return $this->belongsToMany("App\Models\Tag");

 }


 public function recommandation(){
     return $this->belongsToMany('App\Models\Article');
 }


}
