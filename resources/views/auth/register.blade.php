@extends('layouts.app')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/registrar.jpg')}}" alt="img-registro">
    </div>
    <div class="md:w-4/12 bg-white p-6 shadow-xl rounded-lg">
        <form action="{{ route('register')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input 
                type="text"
                id="name"
                name="name"
                placeholder="Tu nombre"
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                value="{{old('name')}}"/>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre de usuario
                </label>
                <input 
                type="text"
                id="username"
                name="username"
                placeholder="Tu nombre de usuario"
                class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                value="{{old('username')}}"/>
                @error('username')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Correo
                </label>
                <input 
                type="text"
                id="email"
                name="email"
                placeholder="Tu email de registro"
                class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                value="{{old('email')}}"/>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Contraseña
                </label>
                <input 
                type="password"
                id="password"
                name="password"
                placeholder="Tu contraseña"
                class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"/>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Repetir Contraseña
                </label>
                <input 
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="Repite tu contraseña"
                class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"/>
                @error('pasword-confirmation')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" value="Crear cuenta" class="bg-sky-500 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>

</div>
    
@endsection