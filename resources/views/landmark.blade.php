@extends('layouts.app')

@section('content')
    @include('components.landmark-page', [
        'landmarkName' => $landmarkName,
        'image' => $image,
        'description' => $description,
        'activities' => $activities,
        'tripOptions' => $tripOptions
    ])
@endsection
