<?php

namespace App\Http\Controllers\Boutique;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CapitalController extends Controller
{
    public function index() {
        return view(view: 'boutique.index');
    }
}
