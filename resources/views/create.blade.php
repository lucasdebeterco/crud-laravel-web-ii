@extends('templates/template')

@section('content')
    <h1 class="text-center">Cadastrar</h1>
    <hr>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" action="{{ url('/') }}" method="POST">
            @csrf
            <input type="text" class="form-control mb-4" name="title" id="title" placeholder="Título">
            <select class="form-control mb-4" name="user" id="user">
                <option value="">Autor</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>

            <input type="text" class="form-control mb-4" name="pages" id="pages" placeholder="Páginas">
            <input type="text" class="form-control mb-4" name="preco" id="preco" placeholder="Preço">
            <input type="submit" class="btn btn-primary" value="cadastrar">
        </form>
    </div>
@endsection
