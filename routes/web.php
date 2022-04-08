<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//    return view('Accueil');
// });

Route::get('/', [FirstController::class, 'index']);

Route::get('/article/{id} ', [FirstController::class, 'article'])->name('voir_produit');

Route::get('/category/{id} ', [FirstController::class, 'category'])->name('voir_produits_par_cat');




