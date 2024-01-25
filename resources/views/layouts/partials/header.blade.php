
<header class="bg-white text-purple-600 p-4 text-left z-10 flex justify-between items-center">
    <div class="flex items-center">
        <h1 class="text-xl font-bold">Soz'Easy</h1>
    </div>
    <div class="flex items-center space-x-4">
        <div class="panier-btn">
            <button class="focus:outline-none text-2xl" id="openPanierBtn">&#128722;</button>
        </div>
        <div class ="userAuth">
            @auth
                {{ \Illuminate\Support\Facades\Auth::user()->nom }}
                <form class="nav-items" action="{{route('auth.logout')}}" method ="post">
                    @method("delete")
                    @csrf
                    <button class="nav-link">Se deconnecter</button>
                </form>
            @endauth
               
            
            @guest
                <a href ="{{route('auth.login')}}">Se connecter</a>
            @endguest

        </div>
        <div class="sidebar-btn text-2xl">&#9776;</div>
        
    </div>
</header>
