@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="text-2xl font-bold mb-4">{{ $post->body }}</h1>
            <p><strong>Landmark:</strong> {{ ucfirst($post->landmark) }}</p>
            <p><strong>Posted by:</strong> {{ $post->user->name }}</p>
        </div>
    </div>
@endsection
