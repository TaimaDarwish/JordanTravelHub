@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        @auth
            <a href="{{ route('posts.create') }}">Create Post</a>
        @endauth

        @guest
            <p>Please <a href="{{ route('login') }}">log in</a> to create a post.</p>
        @endguest


        @foreach ($posts as $post)
            <div>
                <p>{{ $post->body }}</p>
                <p>Posted by: {{ $post->user->name }}</p>
                <p>Likes: {{ $post->likes_count }}</p> 
                @can('delete', $post)
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endcan
            </div>
        @endforeach


        <!-- @auth
                <form action="{{ route('posts.store') }}" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-yellow-700 hover:bg-yellow-800 text-white px-4 py-2 rounded font-medium">Post</button>
                    </div>
                </form>
            @endauth

            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach

                {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif -->
    </div>
</div>
@endsection