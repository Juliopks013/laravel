<form action="{{ route('anuncio-store') }}" method="post">
    @csrf

     <input type="hidden" name="id" value="{{ $anuncio->id ?? old('id') }}"> 

    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="{{ $anuncio-> titulo ?? old('titulo') }}">

    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" id="descricao" value="{{ $anuncio-> descricao ?? old('descricao') }}">

    <label for="preco">Preço</label>
    <input type="number" name="preco" id="preco" value="{{ $anuncio-> preco ?? old('preco') }}">

    <label for="data_publicacao">Data de Publicação</label>
    <input type="date" name="data_publicacao" id="data_publicacao" value="{{ $anuncio-> data_publicacao ?? old('data_publicacao') }}">

    <button type="submit">Cadastrar</button>
</form>