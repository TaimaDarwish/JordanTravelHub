@extends('layouts.app')

@section('content')

<section class="relative">
    <div class="relative w-full h-screen bg-center bg-cover"
        style="background-image: url('{{ asset('images/home.png') }}');">
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30">
            <h1 class="text-yellow-200 text-3xl md:text-4xl font-bold text-center px-4 md:px-8">
                Welcome to <br>JORDAN TRAVEL HUB
            </h1>
        </div>
    </div>
</section>

<section class="py-8 shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:scale-105">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($places as $place)
                <div class="bg-yellow-200 shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <a href="{{ route('landmark.show', ['id' => $place->id]) }}">
                <img src="{{ asset($place->image) }}" alt="{{ $place->landmarkName }}"
                            class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h2 class="text-base text-yellow-800 font-bold">{{ $place->landmarkName }}</h2>
                            <p class="text-yellow-700">{{ $place->description }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
