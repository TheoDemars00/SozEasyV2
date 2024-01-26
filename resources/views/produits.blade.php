@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-b from-white to-purple-800 min-h-screen">
@foreach($articles as $art )
    @if ($art->nom == 'SarkSosy')
        <div class="flex flex-col items-center">
            <h3 class="text-center">{{ $art->nom }}</h3>
            <div class="flex">
                <img style="width:300px;height:300px;" class="w-1/2" src="https://images2.acteur-fete.com/F1rfNqXl0jsuBIGxz_mel4QoLkAdBKr4c3DVonbOVEc/rs:fill-down:500:500:1/sh:0.5/aHR0cHM6Ly9zMy5m/ci1wYXIuc2N3LmNs/b3VkL2FmLWltYWdl/cy0xLmFjdGV1ci1m/ZXRlLmNvbS9pbWFn/ZXMvc2Fya29ndXkt/c29zaWUtb2ZmaWNp/ZWwtZGUtbXItbmlj/b2xhcy1zYXJrb3p5/LTIwMTg5MC0yeDN1/bHAuanBn" alt="{{ $art->nom }}">
            </div>
                <p class="text-center text-white">{{ $art->description_produit }}</p>
                <p class="text-center text-white">{{ $art->prix }} €</p>
            <form method="POST" action="{{ url('/ajouter-donnees') }}">
                <!-- Your form fields go here -->
                @csrf
                <input type="hidden" name="valeur" value="{{$art->id_produit}}">
                <button class="rounded-full bg-black text-white px-4 py-2" type="submit">Ajouter au panier</button>
            </form>
        </div>
    @endif
    <br/>
    @if ($art->nom == 'Emmanuel Maron')
        <div class="flex flex-col items-center">
            <h3 class="text-center">{{ $art->nom }}</h3>
            <div class="flex">
                <img style="width:300px;height:300px;" class="w-1/2" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/5d7f83e9-2e75-489a-bdd8-f64194af51f8/dgb22lm-8234b9d3-4686-4756-88a9-92654d5f611f.jpg/v1/fill/w_730,h_1095,q_70,strp/emmanuel_macron_as_a_bodybuilder_by_artfrombabylon_dgb22lm-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTI4MCIsInBhdGgiOiJcL2ZcLzVkN2Y4M2U5LTJlNzUtNDg5YS1iZGQ4LWY2NDE5NGFmNTFmOFwvZGdiMjJsbS04MjM0YjlkMy00Njg2LTQ3NTYtODhhOS05MjY1NGQ1ZjYxMWYuanBnIiwid2lkdGgiOiI8PTg1MyJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.7SYTLvunsGp4gs-R3FWix38lXaXwrbdUanURjcjlsgM" alt="{{ $art->nom }}">
            </div>
                <p class="text-center text-white">{{ $art->description_produit }}</p>
                <p class="text-center text-white">{{ $art->prix }} €</p>
            <form method="POST" action="{{ url('/ajouter-donnees') }}">
                <!-- Your form fields go here -->
                @csrf
                <input type="hidden" name="valeur" value="{{$art->id_produit}}">
                <button class="rounded-full bg-black text-white px-4 py-2" type="submit">Ajouter au panier</button>
            </form>
        </div>
    @endif

@endforeach
    </div>

@endsection