<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <title>Cadastro</title>
</head>
<body>

    @if ($errors)
        @foreach ($errors->all() as $erros)
            <p>{{ $erros }}</p>
        @endforeach
    @endif

    <form action="/cadastrar" method="post">
        @csrf

        <div>
            <p>Autor</p>
            <input type="text" name="autor">
        </div>

        <div>
            <p>Titulo</p>
            <input type="text" name="titulo">
        </div>

        <div>
            <p>Subtitulo</p>
            <input type="text" name="subtitulo">
        </div>

        <div>
            <p>Edição</p>
            <input type="text" name="edicao">
        </div>

        <div>
            <p>Editora</p>
            <input type="text" name="editora">
        </div>

        <div>
            <p>Ano de Publicação</p>
            <input type="number" name="ano_de_publicacao">
        </div>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>

