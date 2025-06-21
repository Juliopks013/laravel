<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Anúncios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Lista de Anúncios</h2>

        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Data de Publicação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($anuncios as $anuncio)
                    <tr>
                        <td>{{ $anuncio->id }}</td>
                        <td>{{ $anuncio->titulo }}</td>
                        <td>{{ $anuncio->descricao }}</td>
                        <td>R$ {{ number_format($anuncio->preco, 2, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($anuncio->data_publicacao)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('anuncio-editar', $anuncio->id) }}" class="btn btn-sm btn-warning me-1">
                                <i class="bi bi-pencil-fill"></i> Editar
                            </a>
                            <a href="/anuncio/remove/{{ $anuncio->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este anúncio?')">
                                <i class="bi bi-trash-fill"></i> Excluir
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
