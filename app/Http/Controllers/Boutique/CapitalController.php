<?php

namespace App\Http\Controllers\Boutique;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CapitalController extends Controller
{
    public function index() {
        // SELECT * FROM products;
        $products = Product::all();
        //dd($products);

        return view('boutique.index',compact('products'));
    }
}
