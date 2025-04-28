@extends('layouts.app')

@section('content')
    <section class="py-16 text-center">
        <h2 class="text-3xl font-bpñd md-6">Bienvenidos a Blueprent CDMX</h2>
        <p class="text-lg">Tu aliado en artes Gráficas de la más alta calidad en la ciudad de México</p>
        <p class="mt-4">Descubre nuestos servicios y déjanos plasmar tus ideas con elegancia y profecionalismo</p>
        <a href="{{ route('services') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-full mt-8">Ver nuestos servicios</a>
    </section>
@endsection