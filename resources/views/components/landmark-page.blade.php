<div class="container mx-auto px-4 py-8 bg-yellow-100 mt-4 rounded-lg shadow-lg">
    <h1 class="text-4xl text-center text-yellow-700 font-bold mb-6">{{ $landmarkName }}</h1>

    <div class="flex justify-center mb-6">
        <img src="{{ asset($image) }}" alt="{{ $landmarkName }}"
            class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2 h-auto object-cover rounded-lg shadow-md">
    </div>

    <p class="text-lg mb-6 text-yellow-800">
        {{ $description }}
    </p>

    <p class="text-lg mb-4 font-semibold text-yellow-800">Activities you can enjoy include:</p>
    <ul class="list-disc list-inside text-lg text-yellow-800">
        @foreach ($activities as $activity)
            <li>{{ $activity }}</li>
        @endforeach
    </ul>

    <button id="trip-details-button"
        class="bg-yellow-600 text-white py-2 px-4 rounded-lg mt-5 mb-4 hover:bg-yellow-700 transition-colors shadow-md">
        Click here for trips details
    </button>

    <div id="trip-details" class="hidden mb-6 p-4 bg-white rounded-lg shadow-lg">
        <p class="text-lg mb-4 text-yellow-800">
            Choose from our trip packages:
        </p>
        @foreach ($tripOptions as $option)
            <div class="mb-6">
                <h2 class="text-xl font-bold text-yellow-700 mb-2">{{ $option['title'] }}</h2>
                <p class="text-lg mb-4 text-yellow-800">
                    This package includes:
                </p>
                <ul class="list-disc list-inside text-lg mb-6 text-yellow-700">
                    @foreach ($option['details'] as $detail)
                        <li>{{ $detail }}</li>
                    @endforeach
                </ul>
                <p class="text-lg mb-4 text-yellow-800">
                    {{ $option['description'] }}
                </p>
            </div>
        @endforeach
    </div>
</div>

<script>
    document.getElementById('trip-details-button').addEventListener('click', function () {
        var details = document.getElementById('trip-details');
        details.classList.toggle('hidden');
    });
</script>
