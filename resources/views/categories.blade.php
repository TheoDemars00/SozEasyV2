@extends('layouts.app')

@section("content")

    <section class="text-center p-4">
        <h2 class="text-white">Choississez votre catégorie</h2>
        <div>
            
            @foreach ($categorie as $cat)
                @if ($cat->nom == 'homme politique')
                <div style="width:30%; display:flex;">
                    <img style="width:300px;length:300px;display:flex;" id="political" src="https://provox-jeunesse.fr/sites/default/files/styles/w720/public/actualites/etre-jeune-en-politique-est-ce-vraiment-possible.png?itok=GIivpdhw" alt="{{ $cat->nom }}">
                    <br/>
                    <a style="width:300px;" href="{{ route('articles') }}">Homme Politique</a>
                </div>
                @endif
                @if ($cat->nom == "sportif")
                <div style="width:30%; display:flex;">
                    <img style="width:300px;length:300px; display:flex;" id="sports" src = "https://png.pngtree.com/element_our/20190603/ourlarge/pngtree-running-sport-cartoon-illustration-image_1427880.jpg" alt="{{$cat->nom}}">
                    <br/>
                    <a href="{{route('articles')}}">Sportif</a>
                </div>
                @endif
                @if ($cat->nom == "acteur")
                    <img style="width:300px;length:300px" id="actor" src="https://p6.storage.canalblog.com/63/30/1373715/120699263_o.jpg" alt="{{$cat->nom}}">
                    <br/>
                    <a href="{{route('articles')}}">Acteur</a>
                @endif
            @endforeach
            {{-- <img src="image1.jpg" alt="Image 1" class="max-w-full h-auto rounded-lg shadow-md">
            <img src="image2.jpg" alt="Image 2" class="max-w-full h-auto rounded-lg shadow-md">
            <img src="image3.jpg" alt="Image 3" class="max-w-full h-auto rounded-lg shadow-md"> --}}
            <!-- Add more images as needed -->
        </div>
    </section>
@endsection