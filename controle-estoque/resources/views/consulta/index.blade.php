@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Consulta de Componentes</h2>

    <form method="GET" action="{{ route('consulta.index') }}" class="mb-4">
        <input type="text" name="busca" value="{{ request('busca') }}" placeholder="Buscar por código ou nome"
               class="w-full p-2 border rounded shadow-sm focus:outline-none focus:ring focus:border-blue-300">
    </form>

    @if($componentes->isEmpty())
        <p class="text-gray-500">Nenhum componente encontrado.</p>
    @else
        <table class="w-full bg-white border rounded shadow-sm">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="p-2 border-b">Código Interno</th>
                    <th class="p-2 border-b">Nome</th>
                    <th class="p-2 border-b">Quantidade</th>
                    <th class="p-2 border-b">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($componentes as $comp)
                    <tr class="hover:bg-gray-50">
                        <td class="p-2 border-b">{{ $comp->codigo_interno }}</td>
                        <td class="p-2 border-b">{{ $comp->nome }}</td>
                        <td class="p-2 border-b">{{ $comp->quantidade_disponivel }}</td>
                        <td class="p-2 border-b capitalize">{{ $comp->tipo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
