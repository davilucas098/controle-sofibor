@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl mb-4 font-semibold">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label class="block mb-2">Email:</label>
            <input type="email" name="email" required class="w-full mb-4 p-2 border rounded">

            <label class="block mb-2">Senha:</label>
            <input type="password" name="password" required class="w-full mb-4 p-2 border rounded">

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Entrar</button>
        </form>

        <p class="text-sm mt-4 text-center">
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Não tem conta? Cadastre-se</a>
        </p>
    </div>
@endsection
