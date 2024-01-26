@extends('layouts.app')

@section('content')

    @csrf
    <div class="grid gap-10 mx-auto my-10 max-w-screen-lg">
        <div class="text-center">
            <h1 class="text-4xl font-bold">Meilleures Ventes en ce moment :</h1>
            <img class="h-auto max-w-full rounded-lg mx-auto" src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/33.png" alt="">
        </div>
        
        <div class="text-center">
            <h1 class="text-2xl font-bold">Ils font partie de nos meilleures ventes actuelles :</h1>
            <div class="grid grid-cols-5 gap-4 mx-auto">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/9-750x404.png" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg " src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/12.png" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/19.png" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/8-750x404.png" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/26.png" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="flex items-center justify-center h-screen bg-gradient-to-r from-purple-800 to-purple-500 text-white">
        <img class="max-w-full" src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/33.png" alt="Main Image">
    </section>

    <!-- Top Ventes Section -->
    <section class="text-center p-4">
        <h2 class="text-3xl font-bold text-purple-800 mb-4">Top Ventes</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
            <img src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/9-750x404.png" alt="Image 1" class="w-full h-auto rounded-lg shadow-md">
            <img src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/12.png" alt="Image 2" class="w-full h-auto rounded-lg shadow-md">
            <img src="https://www.bibamagazine.fr/wp-content/uploads/biba/2021/01/19.png" alt="Image 3" class="w-full h-auto rounded-lg shadow-md">
            <!-- Add more images as needed -->
        </div>
    </section> --}}
@endsection 
