<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

use Illuminate\View\View;

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

    public function seeCart() : View
    {
        $commande = DB::select('SELECT prd.nom, prd.prix FROM sozeasy.commande com LEFT JOIN sozeasy.produit prd ON com.id_produit = prd.id_produit');
        
        return view('panier', ['commande' => $commande]);
    }


}
