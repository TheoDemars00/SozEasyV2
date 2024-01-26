<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeeCategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;


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
    return view('homepage');
});


Route::get('/users', [UserController::class, 'index'])->name('user.index');


Route::get('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest') ;
Route::post('/login', [AuthController::class, 'doLogin']);

Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');

// Route::get('/categories', function () {
//     return view('categories');
// })->name('categories');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

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


