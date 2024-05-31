<?php

namespace App\Livewire;

use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {
        // consultar DB
        $salarios = Salario::all('nombre', 'id');
        
        return view('livewire.crear-vacante', [
            'salario' => $salarios
        ]);
    }
}