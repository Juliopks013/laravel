<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastrar Anúncio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Cadastro de Anúncio</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('anuncio-store') }}" method="POST" novalidate>
                    @csrf
                    <input type="hidden" name="id" value="{{ $anuncio->id ?? old('id') }}">

                    <div class="mb-3">
                        <label for="id_veiculo" class="form-label">Veículo</label>
                        <select name="id_veiculo" id="id_veiculo" class="form-select" required>
                            <option value="">Selecione o veículo</option>
                            @foreach ($veiculos as $veiculo)
                                <option value="{{ $veiculo->id }}" {{ (isset($anuncio) && $anuncio->id_veiculo == $veiculo->id) ? 'selected' : '' }}>
                                    {{ $veiculo->modelo }} ({{ $veiculo->placa }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_proprietario" class="form-label">Proprietário</label>
                        <select name="id_proprietario" id="id_proprietario" class="form-select" required>
                            <option value="">Selecione o proprietário</option>
                            @foreach ($proprietarios as $proprietario)
                                <option value="{{ $proprietario->id }}" {{ (isset($anuncio) && $anuncio->id_proprietario == $proprietario->id) ? 'selected' : '' }}>
                                    {{ $proprietario->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Ex: Oferta imperdível" value="{{ $anuncio->titulo ?? old('titulo') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Ex: Veículo em ótimo estado" value="{{ $anuncio->descricao ?? old('descricao') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="number" name="preco" id="preco" class="form-control" placeholder="Ex: 35000" value="{{ $anuncio->preco ?? old('preco') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="data_publicacao" class="form-label">Data de Publicação</label>
                        <input type="date" name="data_publicacao" id="data_publicacao" class="form-control" value="{{ $anuncio->data_publicacao ?? old('data_publicacao') }}" required>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle-fill"></i> Cadastrar Anúncio
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
