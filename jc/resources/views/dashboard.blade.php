<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12 dashboard-background">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <button class="add-button">
                            <a href="/cadastrar">Adicionar</a>
                        </button>
                        <table>
                            <thead>
                                <tr>
                                    <th>Autor</th>
                                    <th>Titulo</th>
                                    <th>Subtitulo</th>
                                    <th>Edição</th>
                                    <th>Editora</th>
                                    <th>Ano de Publicação</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($livros->all() as $livro)
                                    <tr>
                                        <td>{{ $livro->autor }}</td>
                                        <td>{{ $livro->titulo }}</td>
                                        <td>{{ $livro->subtitulo }}</td>
                                        <td>{{ $livro->edicao }}</td>
                                        <td>{{ $livro->editora }}</td>
                                        <td>{{ $livro->ano_de_publicacao }}</td>
                                        <td>
                                            <button class="edit-button">
                                                <a href="/editar/{{ $livro->id }}">Editar</a>
                                            </button>
                                            <button class="delete-button">
                                                <a href="/deletar/{{ $livro->id }}">Apagar</a>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $livros->links() }}
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>



