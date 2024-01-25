<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

//Test Push

class PanierController extends Controller
{
    public function addToCart() : RedirectResponse
    {
        $maxid = 0;
        $maxid = DB::select('SELECT max(id_commande) id_commande FROM sozeasy.commande');

        $commande = Commande::create([
            'id_commande'=> 1,
            'id_client'=>1,
            'id_produit'=>1,
            'date_passage_commande'=> date('Y-m-d')
        ]);



        return redirect('/categories/articles');
    }
}
