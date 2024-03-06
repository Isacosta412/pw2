@extends("base")
@section("conteudo")

<form action="{{route('aluno.search')}}" method="post">

    @csrf

    <label for="">Nome</label><br>
    <input type="text" name="nome"><br>

    <button type="submit">Find it girl</button>
    <button type="submit"><a href="{{ url ('aluno/create')}}">Sickening</a></button>
</form>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item) <!--laço de repetição-->
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nome}}</td>
                <td>{{$item->telefone}}</td>
                <td>{{$item->cpf}}</td>
                <td>Work room</td>
                <td><a href="{{ route('aluno/edit/' , $item->id)}}"> Editar </a></td>

                <td><form action="{{ route('aluno.destroy', $item)}}" method="post">
                    @method("DELETE")
                    @csrf
                    <input type="submit" value="You're not that kind of girl">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
