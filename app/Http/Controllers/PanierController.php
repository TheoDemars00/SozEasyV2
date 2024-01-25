<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Test Push

class PanierController extends Controller
{
    public function addToCart() : View
    {
        $maxid = 0;
        //$maxid = DB::select('SELECT max(id_commande) id_commande FROM sozeasy.commande')
        DB::table('commande')->insert(
            array(
                   'id_commande'     =>   1, 
                   'id_client'   =>   1,
                   'id_produit'   =>   45,
                   'date_passage_commande'   =>  '25/01/2024',
            )
        );

        return redirect('/categories/articles')->with('success', 'Données ajoutées avec succès.');
    }
}
