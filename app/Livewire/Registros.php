<?php

namespace App\Livewire;

use App\Models\Registro;
use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class Registros extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $queryString =[
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ]; 

    public function render()
    {
        $registros = Registro::where('sensor_id', 'like', "{$this->search}%")
        ->orWhere('unidade', 'like', "%($this->search)%")
        ->orderByDesc('id', 'sensor_id', 'unidade', 'valor', 'data_hora')
        ->paginate($this->perPage);
        return view('livewire.registros', compact('registros'));
    }

    public function delete($id){
        $registro = Registro::findOrFail($id);
        Registro::findOrFail($registro->$id)->delete();
        session()->flash('message', 'Registro deletado com sucesso');
    }
}
