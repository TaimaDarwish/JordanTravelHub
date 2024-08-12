@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @auth
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

                    <!-- <div class="mb-4">
                        <label for="landmark" class="sr-only">Landmark</label>
                        <select name="landmark" id="landmark" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('landmark') border-red-500 @enderror">
                            <option value="">Select Landmark</option>
                            <option value="petra">Petra</option>
                            <option value="wadi_rum">Wadi Rum</option>
                            <option value="roman_theater">Roman Theater</option>
                            <option value="dead_sea">Dead Sea</option>
                            <option value="aqaba">Aqaba</option>

                        </select>

                        @error('landmark')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> -->

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
            @endif
        </div>
    </div>
@endsection
