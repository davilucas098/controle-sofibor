<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Componente;

class ComponenteSeeder extends Seeder
{

public function run()
{
    Componente::create([
        'codigo_interno' => '21051',
        'nome' => 'TB. REFORÇO',
        'quantidade_disponivel' => 1000,
        'tipo' => 'normal',
    ]);

    Componente::create([
        'codigo_interno' => '20470',
        'nome' => 'TUBO EXT',
        'quantidade_disponivel' => 800,
        'tipo' => 'normal',
    ]);

    Componente::create([
        'codigo_interno' => '21018',
        'nome' => 'TUBO INT',
        'quantidade_disponivel' => 700,
        'tipo' => 'normal',
    ]);
}

}
