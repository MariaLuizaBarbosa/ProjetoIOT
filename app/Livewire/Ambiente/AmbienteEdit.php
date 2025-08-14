<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $ambienteId;
    public $nome;
    public $descricao;
    public $status;

    public function mount($id)
    {
        $ambiente = Ambiente::find($id);

        $this->ambienteId = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->cpf;
        $this->status = $ambiente->cargo;
    }

    public function salvar()
    {
        $ambiente = Ambiente::find($this->ambienteId);
        $ambiente->nome = $this->nome;
        $ambiente->descricao = $this->descricao;
        $ambiente->status = $this->status;
       
        $ambiente->save();
        session()->flash('success', 'Ambiente Atualizada');
        return redirect()->route('ambiente.list');
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
