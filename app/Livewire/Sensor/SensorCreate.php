<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $sensor;

    public function store()
    {
        $sensor = Sensor::all();
        $ambiente = Ambiente::all();

        Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'codigo'=> $this->codigo,
            'tipo'=> $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);
        session()->flash('success', 'Cadastro Realizado', compact('sensor'));
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-create', compact('ambientes'));
    }
}
