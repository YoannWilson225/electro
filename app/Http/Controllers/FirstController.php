<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Category;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
        //SELECT + FROM produits ;
        //appelle du model article et exécution de all
        $articles = Article::all();
        //dd($articles);
        $categories = Category::where('is_online',1)->get();
        return view('shops.index', compact('articles', 'categories'));

    }


    public function article(Request $request){
        //SELECT
        //dd($request->id);
       // $categories = Category::where('is_online',1)->get();
        $article = Article::find($request->id);
        return view('shop.article', compact('article'));
    }


    public function Category(Request $request){
        //recuperer toutes les categories 'is_online'
        //$categories = Category::where('is_online',1)->get();
        //dd($category);

      //select produits where

      //$articles = Article::where('category_id',$request->id)->get();
      $category = Category::find($request->id);
      $articles = $category->articles();


        return view('shop.category',compact('articles', 'category'));
    }
}
