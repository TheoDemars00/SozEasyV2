<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use App\Models\Categorie;

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
}
