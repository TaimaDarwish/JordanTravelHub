@extends('layouts.app')

@section('content')
<div class="relatives h-1/3 overflow-hidden">
    <img src="{{ asset('images/1.png') }}" alt="Tourism Image" class="w-full h-auto">
    <div class="absolute text-justify top-1/3 text-yellow-900 md:p-4 md:uppercase ">
        <h1 class=" text-base text-xl font-bold md:text-left lg:text-4xl sm:text-left md:p-7 sm:p-3">Welcome to
            <br>Jordan Travel Hub</h1>
    </div>
</div>
<section class="py-8 shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:scale-105">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="bg-yellow-200 shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <a href="{{ route('petra') }}">
                    <img src="{{ asset('images/petra2.png') }}" alt="Petra" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h2 class="text-base text-yellow-800 font-bold">Petra - $30</h2>
                        <p class="text-yellow-700">One of the New Seven Wonders of the World</p>
                    </div>
                </a>
            </div>

            <div
                class="bg-yellow-200 shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <a href="{{route('wadirum')}}">
                    <img src="{{ asset('images/WadiRum.png') }}" alt="Wadi Rum" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h2 class="text-base text-yellow-800 font-bold">Wadi Rum - $50</h2>
                        <p class="text-yellow-700">Known as the Valley of the Moon, Wadi Rum is a protected desert
                            wilderness with dramatic sandstone mountains and ancient rock carvings</p>
                    </div>
                </a>
            </div>

            <div class="bg-yellow-200 shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <a href="{{route('romantheater')}}">
                <img src="{{ asset('images/RomanTheater.png') }}" alt="Roman Theater" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-base text-yellow-800 font-bold">Roman Theater- $30</h2>
                    <p class="text-yellow-700">The Roman Theater in Amman is a well-preserved amphitheater from the 2nd
                        century AD, capable of seating 6,000 spectators and showcasing Roman architectural prowess</p>
                </div>
                </a>
            </div>
            <div class="bg-yellow-200 shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <a href="{{route('deadsea')}}">
                <img src="{{ asset('images/DeadSea.png') }}" alt="Dead Sea" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-base text-yellow-800 font-bold">Dead Sea- $40</h2>
                    <p class="text-yellow-700">At the lowest spot on Earth, the Dead Sea is famous for its float-friendly waters and mineral-rich mud, offering a unique and refreshing experience</p>
                </div>
                </a>
            </div>
            <div class="bg-yellow-200 shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <a href="{{route('aqaba')}}">
                <img src="{{ asset('images/Aqaba.png') }}" alt="Aqaba" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-base text-yellow-800 font-bold">Aqaba- $70</h2>
                    <p class="text-yellow-700">Located by the Red Sea, Aqaba offers beautiful beaches and clear waters, making it an ideal spot for swimming and diving. It’s a perfect place to enjoy the sun and coastal charm</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection