<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambienteId;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function mount($id)
    {
        $sensor = Sensor::find($id);

        $this->codigo = $sensor->codigo;
        $this->tipo = $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;
    }

    public function salvar()
    {
        $sensor = Sensor::find($this->ambienteId);
        $sensor->codigo = $this->codigo;
        $sensor->tipo = $this->tipo;
        $sensor->descricao = $this->descricao;
        $sensor->status = $this->status;
       
        $sensor->save();
        session()->flash('success', 'sensor Atualizada');
        return redirect()->route('sensor.list');
    }

    public function render()
    {
        return view('livewire.sensor.sensor-edit');
    }
}
