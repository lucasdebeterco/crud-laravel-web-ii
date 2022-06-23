@extends('templates/template')

@section('content')
    <h1 class="text-center">Crud</h1>
    <hr>

    <div class="text-center">
        <a href="{{ url('books/create') }}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Preço</th>
                <th scope="col">Autor</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->id_user }}</td>
                    <td>
                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
