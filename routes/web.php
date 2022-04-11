<?php



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FirstController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\BoutiqueController;


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
//     return view('welcome');
// });


Route::get('/boutique', [BoutiqueController::class, 'index'])->name('boutique');

Route::get('/', [FirstController::class, 'index'])->name('accueil');
Route::get('/article/{id}', [BoutiqueController::class, 'show'])->name('voir_produit');
Route::get('/category/{id} ', [FirstController::class, 'category'])->name('voir_produits_par_cat');



Auth::routes();

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/private', function(){
        return 'Bonjour Admin';
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route pour mon panier
Route::get('/panier', [CartController::class, 'index'])->name('cart.index');

Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart.store');

Route::get('/videpanier', function(){
    Cart::destroy();
});

