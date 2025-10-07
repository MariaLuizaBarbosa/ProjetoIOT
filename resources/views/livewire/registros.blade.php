<div>
    <div class="container mt-5">
        {{-- ---------------------------------------------------------------------------------- --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismisss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismisss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="shadow rounded-4">
                <div class="card-header d-flex justify-content-between alingn-items-center text-white"
                    style="background-color: blueviolet">
                    <h5 class="mb-0">REGISTROS</h5>
                </div>
        {{-- -------------------------------------------------------------------------------------- --}}
                <div class="card-body p-0">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>VALOR</th>
                                <th>UNIDADE</th>
                                <th>DATA/HORA</th>
                            </tr>
                        </thead>
                    </table>
                </div>

            </div>
            
        </div>
    </div>
</div>

