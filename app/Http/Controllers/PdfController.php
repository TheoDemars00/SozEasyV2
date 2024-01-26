<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCPDF;


class PdfController extends Controller
{
    public function generatePdf()
    {

        $maxid = DB::select('SELECT max(id_commande) id_commande FROM sozeasy.commande');

        $commande = DB::select('SELECT prd.nom, prd.prix FROM sozeasy.commande com LEFT JOIN sozeasy.produit prd ON prd.id_produit = com.id_produit
                                WHERE com.id_commande = '.(int)$maxid.';');

        $totalprice = DB::select('SELECT SUM(prd.prix) prix FROM sozeasy.commande com LEFT JOIN sozeasy.produit prd ON com.id_produit = prd.id_produit
                                WHERE id_commande = '.(int)$maxid.'; ');

        $pdf = new TCPDF();

        $pdf->AddPage();

        $html = '<h3 class="text-black">Facture</h3>
        <br/>
        <br/>
        <center>
            <table border="1" style="border: 2px solid black; justify-content:center;">
                <thead style="border:1px solid black">
                    <tr>
                        <th style="border:1px solid black; padding-right:10px; padding-left:10px">Article</th>
                        <th style="border:1px solid black; padding-right:10px; padding-left:10px">Prix (€)</th>
                        <th style="border:1px solid black; padding-right:10px; padding-left:10px">Total (€)</th>
                    </tr>
                </thead>
                <tbody style="border:1px solid black">';
                  
        foreach($commande as $com)  
        { 
            $html.= '<tr>
                        <td style="border:1px solid black; padding-right:10px; padding-left:10px">'.$com->nom.'</td>
                        <td style="border:1px solid black; padding-right:10px; padding-left:10px; text-align:center">'.$com->prix.'</td>';
        }
        foreach($totalprice as $tp)
        {
            $html.='<td style="border:1px solid black; padding-right:10px; padding-left:10px">'.$tp->prix.'</td>';
        }
        $html.=' </tr>
                </tbody>
            </table>';
        $pdf->writeHTML($html, true, false, true, false, '');

        $pdf->Output('facture.pdf', 'D');
    }
}
