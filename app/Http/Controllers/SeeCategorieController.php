<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use App\Models\Categorie;

use App\Models\Produit;

use Illuminate\Support\Facades\Log;


use Illuminate\Support\Facades\DB;

class SeeCategorieController extends Controller
{
    //

    //dd("test"); 
    public function voir() : View
    {
        $categorie = Categorie::all();

        //$categorie = 'Test'
        //die;
        // Passer les données à la vue
        return view('SeeCategorie', ['categorie' => $categorie]);
    }

    public function choixCategorie() : View
    {
        $categorie = Categorie::all();

        //$categorie = 'Test'
        //die;
        // Passer les données à la vue
        return view('categories', ['categorie' => $categorie]);
    }

    public function visuCategorie() : View
    {
        $articles = DB::select('SELECT * FROM sozeasy.produit WHERE id_categorie = 1');

        Log::info($articles);
        return view('produits', ['articles' => $articles]);
    }
}
