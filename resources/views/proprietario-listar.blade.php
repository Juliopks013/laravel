<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Proprietários</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (opcional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Lista de Proprietários</h2>

        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($proprietarios as $proprietario)
                    <tr>
                        <td>{{ $proprietario->id }}</td>
                        <td>{{ $proprietario->nome }}</td>
                        <td>{{ $proprietario->cpf }}</td>
                        <td>{{ $proprietario->telefone }}</td>
                        <td>{{ $proprietario->email }}</td>
                        <td>
                            <a href="{{ route('proprietario-editar', $proprietario->id) }}" class="btn btn-sm btn-warning me-1">
                                <i class="bi bi-pencil-fill"></i> Editar
                            </a>
                            <a href="/proprietario/remove/{{ $proprietario->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este proprietário?')">
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
