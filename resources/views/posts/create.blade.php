@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            imagen
        </div>
        <div class="md:w-1/2 p-10 bg-white shadow-xl rounded-lg mt-10 md:mt-0">
            <form action="{{ route('register')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                        Título
                    </label>
                    <input 
                    type="text"
                    id="titulo"
                    name="name"
                    placeholder="Titulo de la publicación"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    value="{{old('titulo')}}"/>
                    @error('titulo')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción
                    </label>

                    <textarea 
                    id="descripcion"
                    name="descripcion"
                    placeholder="Descripción de la publicación"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    > {{old('titulo')}}</textarea>

                    @error('titulo')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Crear publicacion" class="bg-sky-500 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
        
    </div>
@endsection