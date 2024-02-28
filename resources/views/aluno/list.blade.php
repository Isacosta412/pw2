@extends('base')
@section('conteudo')

    <form action="{{route('aluno.search')}}" method="post">

        @csrf

        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>

        <button type="submit">Buscar</button>
        <button><a href="{{ url('aluno/create') }}">new</a></button>
    </form>
    <hr>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th colspan="2">Ações</th>
                <!--colspan delimita espaçamento nas colunas-->
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
                <tr>
                    <td> {{$item->id}}</td>
                    <td> {{$item->nome}}</td>
                    <td> {{$item->telefone}}</td>
                    <td> {{$item->cpf}}</td>
                    <td>Editar</td>
                    <td><a href="{{route('aluno.destroy', $item->id)}}">exclói</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
