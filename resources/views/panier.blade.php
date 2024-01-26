@extends('layouts.app')

@section('content')

<section class="text-center p-4">
    <h2 class="text-black">Récapitulatif commande</h2>

    <h3 class="text-black">Liste des produits</h3>
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
            <tbody style="border:1px solid black">
              
                @foreach($commande as $com)   
                <tr>
                    <td style="border:1px solid black; padding-right:10px; padding-left:10px">{{ $com->nom }}</td>
                    <td style="border:1px solid black; padding-right:10px; padding-left:10px; text-align:center">{{ $com->prix}}</td>
                @endforeach
                @foreach($totalprice as $tp)
                    <td style="border:1px solid black; padding-right:10px; padding-left:10px">{{$tp->prix}}</td>
                @endforeach
                </tr>
            </tbody>
        </table>
        <br/>
        <br/>

        <form action="/generate-pdf" method="get">
            @csrf
            <button class="rounded-full bg-black text-white px-4 py-2" type="submit">Export de la facture en PDF</button>
        </form>
    </center>
@endsection