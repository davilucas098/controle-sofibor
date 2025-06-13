@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl mb-4 font-semibold">Cadastro</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label class="block mb-2">Nome:</label>
            <input type="text" name="name" required class="w-full mb-4 p-2 border rounded">

            <label class="block mb-2">Email:</label>
            <input type="email" name="email" required class="w-full mb-4 p-2 border rounded">

            <label class="block mb-2">Senha:</label>
            <input type="password" name="password" required class="w-full mb-4 p-2 border rounded">

            <label class="block mb-2">Confirmar Senha:</label>
            <input type="password" name="password_confirmation" required class="w-full mb-4 p-2 border rounded">

            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Cadastrar</button>
        </form>
    </div>
@endsection
