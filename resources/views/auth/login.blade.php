@extends('layout.plantilla')
@section('contenido')
<div class="h-screen pt-20">
    <div class="max-w-md mx-auto  bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
        <h3 class="text-3xl font-extrabold mb-6 text-center text-blue-600">Iniciar Sesión</h3>
        <form action="/login" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-gray-700 text-sm font-semibold">Correo Electrónico:</label>
                <input type="email" name="email" id="email" class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
            </div>
            <div>
                <label for="password" class="block text-gray-700 text-sm font-semibold">Contraseña:</label>
                <input type="password" name="password" id="password" class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300 ease-in-out shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Iniciar Sesión
                </button>
            </div>
        </form>
        <p class="mt-4 text-sm text-gray-600 text-center">¿No tienes una cuenta? <a href="/register" class="text-blue-500 hover:text-blue-700 font-semibold">Regístrate</a></p>
    </div>
    </div>
@endsection