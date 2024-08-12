@extends('layouts.app')

@section('title', $landmark['landmarkName'])

@section('content')
    <div class="container mx-auto px-4 py-8 bg-yellow-100 mt-4 rounded-lg shadow-lg">
        <h1 class="text-4xl text-center text-yellow-700 font-bold mb-6">{{ $landmark['landmarkName'] }}</h1>
        
        <div class="flex justify-center mb-6">
            <img src="{{ asset($landmark['image']) }}" alt="{{ $landmark['landmarkName'] }}"
                class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2 h-auto object-cover rounded-lg shadow-md">
        </div>

        <p class="text-lg mb-6 text-yellow-800">
            {{ $landmark['description'] }}
        </p>

        <!-- Activities Section -->
        <h2 class="text-2xl font-semibold text-yellow-800 mb-4">Activities</h2>
        <ul class="list-disc list-inside mb-6">
            @foreach($landmark['activities'] as $activity)
                <li class="text-lg text-yellow-800">{{ $activity }}</li>
            @endforeach
        </ul>

        <!-- Trip Details Section -->
        <button id="trip-details-button"
            class="bg-yellow-600 text-white py-2 px-4 rounded-lg mb-4 hover:bg-yellow-700 transition-colors">
            Click here for trip details
        </button>
        
        <div id="trip-details" class="hidden mb-6 p-4 bg-white rounded-lg shadow-lg">
            <p class="text-lg text-yellow-800">
                Choose from our trip packages:
            </p>
            @foreach ($landmark['tripOptions'] as $option)
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-yellow-700">{{ $option['title'] }}</h3>
                    <p class="text-lg mb-4 text-yellow-800">{{ $option['description'] }}</p>
                    <ul class="list-disc list-inside text-lg mb-6 text-yellow-700">
                        @foreach ($option['details'] as $detail)
                            <li>{{ $detail }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <!-- Form to create a post -->
        <h2 class="text-2xl font-semibold text-yellow-800 mb-4">Create a Post</h2>
        <form action="{{ route('posts.store') }}" method="POST" class="mb-6">
            @csrf
            <input type="hidden" name="landmark_id" value="{{ $landmark['id'] }}">
            <textarea name="body" placeholder="Write your post here..." required
                class="w-full p-2 border border-yellow-300 rounded-lg mb-4"></textarea>
            <button type="submit" class="bg-yellow-600 text-white py-2 px-4 rounded-lg hover:bg-yellow-700 transition-colors">
                Submit
            </button>
        </form>

        <!-- existing posts -->
        <h2 class="text-2xl font-semibold text-yellow-800 mb-4">Posts</h2>
        @if($posts->isEmpty())
            <p class="text-lg text-yellow-700">No posts available for this landmark</p>
        @else
            <ul class="space-y-4">
                @foreach($posts as $post)
                    <li class="bg-white p-4 rounded-lg shadow-md">
                        <p class="text-lg text-yellow-800">{{ $post->body }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <script>
        document.getElementById('trip-details-button').addEventListener('click', function () {
            var details = document.getElementById('trip-details');
            details.classList.toggle('hidden');
        });
    </script>
@endsection
