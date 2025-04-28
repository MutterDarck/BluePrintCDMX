@extends('layouts.app')
@section('content')

    <h2 class="text-2xl font-bold md-6">Nuestro Servicios</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($service as $service )
                <div class="bg-gray-800 rounded-lg shadow-md p-6">
                    <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" class="w-full rounded-md mb-4">
                    <h3 class="text-xl font-semibold md-2"> {{ $service['title'] }}</h3>
                    <p class="text-gray-300 md-4">{{ Str::limit($service['description'], 100) }}</p>
                    <a href="{{ route('service.show', $service['slug']) }}" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-4 rounded-full">Ver más</a>
                </div>
            @endforeach
        </div>
@endsection