@extends('layouts.app')
@section('content')

    <div class="bg-gray-800 rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold md-6">{{ $service['title'] }}</h2>
        <img src="{{ asset($service['image']) }} alt="{{ $service['title'] }}" class="w-full rounded-md mb-6">
        <p class="text-gray-300 leading-relaxed"> {{ $service['description'] }}</p>
        <a href="{{ route('services') }}" class="inline-block mt-6 text-indigo-500 hever:text-indigo-400">Volver al Servicos</a>
    </div>
@endsection