@extends('layouts.app')

@section('content')

<section class="text-center p-4">
    <h2 class="text-white">Récapitulatif commande</h2>

    <h3 class="text-white">Liste des produits</h3>
    <br/>
    <br/>
    <center>
        <table border="1" style="border: 2px solid black; justify-content:center;">
            <thead style="border:1px solid black">
                <tr>
                    <th style="border:1px solid black; padding-right:10px; padding-left:10px">Article</th>
                    <th style="border:1px solid black; padding-right:10px; padding-left:10px">Prix</th>
                </tr>
            </thead>
            <tbody style="border:1px solid black">
                @foreach($commande as $com)
                <tr>
                    <td style="border:1px solid black; padding-right:10px; padding-left:10px">{{ $com->nom }}</td>
                    <td style="border:1px solid black; padding-right:10px; padding-left:10px">{{ $com->prix}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br/>
        <br/>

        <form action="/generate-pdf" method="get">
            @csrf
            <button type="submit">Generate PDF</button>
        </form>
    </center>
@endsection