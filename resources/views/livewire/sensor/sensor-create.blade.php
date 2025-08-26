<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-md-6 mx-auto">
        <br>
        <br>
        <div class="card" style="background-color: rgb(177, 142, 210)">
            <h5 class="card-header fw-bold text-center" $font-family="sans-serif">Cadastro de Sensores</h5>
            <div class="card-body">

                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="codigo" class="form-label fw-bold text-center">CÓDIGO</label>
                        <input type="text" class="form-control" id="codigo" name="codigo"
                            wire:model.defer="nome">
                        @error('código')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <label for="ambiente_id" wire:model.defer='ambiente_id' id="ambiente_id">Ambiente</label>
                        <select name="form-select" aria-label="Default select exemple"  wire:model.defer="ambiente_id" id="ambiente_id"></select>
                        @foreach ($ambientes as $a)
                            <option value="{{ $a->id}}">{{$a->nome}}</option>
                        @endforeach
                        
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label fw-bold">TIPO</label>
                        <select class="form-select" aria-label="Default select example" wire:model.defer="tipo">
                            
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
                        <label for="status" class="form-label fw-bold">Status</label>
                        <select class="form-select" aria-label="Default select example" wire:model.defer="status">
                            <option hidden>status</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" style="background-color: rgb(90, 231, 130)">Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
