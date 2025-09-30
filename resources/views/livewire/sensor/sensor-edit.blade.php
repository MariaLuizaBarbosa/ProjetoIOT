<div class="mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
    @endif

    <div class="card">
        <h5 class="card-header"> Editar Sensor </h5>
            <div class="card-body">
                <form wire:submit.prevent="salvar">

                    <div class="mb-3">
                        <label for="codigo" class="form-label fw-bold text-center">CÓDIGO</label>
                        <input type="text" class="form-control" id="codigo" name="codigo"
                            wire:model.defer="codigo">
                        @error('código')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ambiente_id" class="form-label fw-bold text-center" wire:model.defer='ambiente_id' id="ambiente_id">AMBIENTE</label>
                        <select class="form-select" name="ambiente_id" id="ambiente_id" wire:model.defer='ambiente_id'>
                        @foreach ($ambientes as $a)
                            <option hidden></option>
                            <option value="{{ $a->id }}">{{ $a->nome }}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label fw-bold">TIPO</label>
                        <select class="form-select" aria-label="Default select example" wire:model.defer="tipo">
                              
                            <option hidden></option>
                            <option value="luminosidade">Luminosidade</option>
                            <option value="rfid">RFID</option>
                            <option value="infravermelho">Infravermelho</option>
                            <option value="temperatura">Temperatura</option>
                            <option value="umidade">Umidade</option>
                            
                        </select>
                        @error('tipo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label fw-bold">DESCRIÇÃO</label>
                        <input type="descricao" class="form-control" id="descricao" name="descricao"
                            placeholder="" wire:model.defer="descricao">
                        @error('descricao')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label fw-bold">STATUS</label>
                        <select class="form-select" aria-label="Default select example" wire:model.defer="status">
                            <option hidden>status</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href="{{ route('sensor.list') }}" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
     </div>
</div>
