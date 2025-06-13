<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Componente;

class ConsultaController extends Controller
{
    public function index(Request $request)
    {
        $busca = $request->input('busca');

        $componentes = Componente::query()
            ->when($busca, function ($query, $busca) {
                return $query->where('codigo_interno', 'like', "%{$busca}%")
                             ->orWhere('nome', 'like', "%{$busca}%");
            })
            ->get();

        return view('consulta.index', compact('componentes', 'busca'));
    }
}
