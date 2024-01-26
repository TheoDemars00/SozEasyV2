<aside class="bg-purple-900 text-white p-0 w-0 flex flex-col absolute top-5 transition-all overflow-hidden h-screen">
    <nav class="mt-8">
        <a href="{{ route('categories') }}" class="text-white hover:bg-gray-700 py-4 px-4 block">Categories</a>
        <a href="{{ route('profile') }}" class="text-white hover:bg-gray-700 py-4 px-4 block">Profile</a>
        <form class="nav-items py-4 px-4 block text-white hover:bg-gray-700" p action="{{route('auth.logout')}}" method ="post">
            @method("delete")
            @csrf
            <button class="nav-link">Se deconnecter</button>
        </form>
    </nav>
</aside>
