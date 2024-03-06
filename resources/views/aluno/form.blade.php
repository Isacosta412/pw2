@extends("base")
@section("conteudo")
@section('titulo','Formulário de Aluno')
@php
    if(!empty($dado->id)){
        $route = route ('aluno.update',$dado->id)
    }else{
        $route = route('aluno.store')
    }
@endphp

<form action="{{route $route}}" method="post">

    @csrf

    @if(!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id">
    value="@if ((!empty$dado->id)) {{$dado->id}}<br>

    <label for="">Nome</label><br>
    <input type="text" name="nome" class="form-control">
    value="@if ((!empty$dado->nome)) {{$dado->nome}}@elseif (!empty(old('nome'))) {{old('nome')}}@else {{""}} @endif"<br>

    <label for="">Telefone</label><br>
    <input type="text" name="telefone" class="form-control" value="{{$dado->nome)}}"><br>
    value="@if ((!empty$dado->telefone)) {{$dado->telefone}}@elseif (!empty(old('telefone'))) {{old('telefone')}}@else {{""}} @endif"<br>

    <label for="">cpf</label><br>
    <input type="text" name="cpf" class="form-control" value="{{old("cpf")}}"><br>
    value="@if ((!empty$dado->cpf)) {{$dado->cpf}}@elseif (!empty(old('cpf'))) {{old('cpf')}}@else {{""}} @endif"<br>

    <button type="submit">Slay</button>
    <button type="submit"><a href="{{ url ('aluno')}}">Back gurrll</a></button>
</form>

@stop
