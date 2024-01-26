@extends('layouts.app')

@section("content")

    <section class="text-center p-4">
        <h2 class="text-black">Choississez votre catégorie</h2>
        <div>
            
            @foreach ($categorie as $cat)
                @if ($cat->nom == 'homme politique')
                <div class="flex">
                    <img class="w-1/3 mr-10" style="width:300px;height:300px" id="political" src="https://provox-jeunesse.fr/sites/default/files/styles/w720/public/actualites/etre-jeune-en-politique-est-ce-vraiment-possible.png?itok=GIivpdhw" alt="{{ $cat->nom }}">
                @endif
                @if ($cat->nom == "sportif")
                    <img class="w-1/3 mr-10" style="width:300px;height:300px" id="sports" src = "https://png.pngtree.com/element_our/20190603/ourlarge/pngtree-running-sport-cartoon-illustration-image_1427880.jpg" alt="{{$cat->nom}}">
                @endif
                @if ($cat->nom == "acteur")
                    <img class="w-1/3" style="width:300px;height:300px" id="actor" src="https://p6.storage.canalblog.com/63/30/1373715/120699263_o.jpg" alt="{{$cat->nom}}">
                </div>
                @endif
            @endforeach
            <div class="flex">
                <a style="width:20%" class="text-center" href="{{ route('articles') }}">Homme Politique</a>
                <a style="width:25%" class="text-center" href="{{route('articles')}}">Sportif</a>
                <a style="width:18%" class="text-center" href="{{route('articles')}}">Acteur</a>
            </div>
        </div>
    </section>
@endsection