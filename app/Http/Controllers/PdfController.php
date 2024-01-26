<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCPDF;


class PdfController extends Controller
{
    public function generatePdf()
    {
        // Créer une instance de TCPDF
        $pdf = new TCPDF();

        // Ajouter le contenu au PDF (par exemple, un simple texte)
        $pdf->SetFontSize(14);
        $pdf->Cell(0, 10, 'Hello, this is your PDF!', 0, 1, 'C');

        // Sortie du PDF au navigateur
        $pdf->Output('example.pdf', 'D');
    }
}
