<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use App\Models\Ambiente;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $sensorId;
    public $status;

    public function mount($id)

    {
        $sensor = Sensor::find($id);
        
        $this->ambiente_id = $sensor->ambiente_id;
        $this->sensorId = $sensor->id;
        $this->codigo = $sensor->codigo;
        $this->tipo = $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;
    }

    public function salvar()
    {
        $sensor = Sensor::find($this->sensorId);

        if($sensor == null){
            return redirect()->route('sensor.list');
        }

        $sensor->update([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);
        
        $sensor->save();
        session()->flash('success', 'Sensor Atualizado');
        return redirect()->route('sensor.list');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-edit', compact('ambientes'));
    }
}
