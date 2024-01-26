<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeeCategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanierController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;

use App\Http\Controllers\PdfController;



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




Route::get('/users', [UserController::class, 'index'])->name('user.index');


Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'doLogin']);


Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');

// Route::get('/categories', function () {
//     return view('categories');
// })->name('categories');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/panier', [PanierController::class, 'seeCart'])->name('panier');

Route::get('/essai', [UserController::class, 'index']);

Route::get('/categorie', [SeeCategorieController::class, 'voir']);

Route::get('/categories', [SeeCategorieController::class, 'choixCategorie'])->name('categories');

Route::get('/categories/articles', [SeeCategorieController::class, 'visuCategorie'])->name('articles');

Route::post('/ajouter-donnees', [PanierController::class, 'addToCart']);

Route::get('/generate-pdf', [PdfController::class, 'generatePdf']);

Route::get('/test', function() {
    return view('SeeCategorie');
});


