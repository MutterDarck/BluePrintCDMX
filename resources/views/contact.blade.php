@extends('layouts.app')
@section('content')

    <div class="bg-gray-800 rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-blod md-6">Contáctanos</h2>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-700" required>
                @error('name') <p class="text-red.500 text-xs italic">{{ $message }}</p> @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-700" required>
                @error('email') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror          
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-300 text-sm font-bold mb-2">Mensaje:</label>
                <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-700" required></textarea>
                @error('message') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
            </div>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-full focus:shadow-outline">Enviar Mensaje</button>
        </form>
    </div>

    <div class="mt-8">
        <p class="text-gray-300">O contáctanos directamente por WhatsApp:</p>
        <a href="https://wa.me/TU_NUMERO_DE_WHATSAPP" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-full mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline-block mr-2">
                <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 00-10.857 5.792.75.75 0 00.691.952h.293l.743-.264a.75.75 0 00.109-.054.75.75 0 01.679-.035