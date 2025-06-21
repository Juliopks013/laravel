<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastrar Veículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Cadastro de Veículo</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('veiculo-store') }}" method="POST" novalidate>
                    @csrf
                    <input type="hidden" name="id" value="{{ $veiculo->id ?? old('id') }}">

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control" placeholder="Ex: Honda" value="{{ $veiculo->marca ?? old('marca') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Ex: Civic Type-R" value="{{ $veiculo->modelo ?? old('modelo') }}" required>
                        </div>

                        <div class="col-md-4">
                            <label for="ano" class="form-label">Ano</label>
                            <input type="number" name="ano" id="ano" class="form-control" placeholder="Ex: 2020" value="{{ $veiculo->ano ?? old('ano') }}" required min="1900" max="2099">
                        </div>

                        <div class="col-md-4">
                            <label for="placa" class="form-label">Placa</label>
                            <input type="text" name="placa" id="placa" class="form-control" placeholder="Ex: ABC-1234" value="{{ $veiculo->placa ?? old('placa') }}" required maxlength="7">
                        </div>

                        <div class="col-md-4">
                            <label for="cor" class="form-label">Cor</label>
                            <input type="text" name="cor" id="cor" class="form-control" placeholder="Ex: Preto" value="{{ $veiculo->cor ?? old('cor') }}" required>
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle-fill"></i> Cadastrar Veículo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
