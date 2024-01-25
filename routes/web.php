<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeeCategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanierController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/homepage', function () {
    return view('homepage');
});

// Route::get('/categories', function () {
//     return view('categories');
// })->name('categories');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/panier', function () {
    return view('panier');
})->name('panier');

Route::get('/essai', [UserController::class, 'index']);

Route::get('/categorie', [SeeCategorieController::class, 'voir']);

Route::get('/categories', [SeeCategorieController::class, 'choixCategorie'])->name('categories');

Route::get('/categories/articles', [SeeCategorieController::class, 'visuCategorie'])->name('articles');

Route::post('/ajouter-donnees', [PanierController::class, 'addToCart']);

Route::get('/test', function() {
    return view('SeeCategorie');
});


