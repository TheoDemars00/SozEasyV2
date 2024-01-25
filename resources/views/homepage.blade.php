@extends('layouts.app')

@section('content')

    @csrf
    
    <section class="text-center p-4">
        <img src="your-main-image.jpg" alt="Main Image" class="max-w-full h-auto">
    </section>

    <section class="text-center p-4">
        <h2 class="text-white">Top Ventes</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
            <img src="image1.jpg" alt="Image 1" class="max-w-full h-auto rounded-lg shadow-md">
            <img src="image2.jpg" alt="Image 2" class="max-w-full h-auto rounded-lg shadow-md">
            <img src="image3.jpg" alt="Image 3" class="max-w-full h-auto rounded-lg shadow-md">
            <!-- Add more images as needed -->
        </div>
    </section>
@endsection 
