@extends('layout.plantilla')
@section('contenido')
<div class="h-full  py-20 overflow-y-auto" style="background-color: #142d4d">
    <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-2xl border border-gray-200 mb-10">
        <h3 class="text-3xl font-extrabold mb-6 text-center text-blue-600">Crear Post</h3>
        <form action="{{route('posts.store',auth()->user()->id)}}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="foto" class="block text-gray-700 text-sm font-semibold">Foto:</label>
                <input type="file" name="foto" id="foto" class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
            </div>
            <div>
                <label for="descripcion" class="block text-gray-700 text-sm font-semibold">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="w-full bg-violet-600 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300 ease-in-out shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    ➕Subir post
                </button>
            </div>
        </form>
    </div>
@endsection