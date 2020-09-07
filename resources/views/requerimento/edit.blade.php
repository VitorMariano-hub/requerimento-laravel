@extends('template.default')
@section('content')
<form method="post" action="{{route ('requerimento.update', $requerimentos->id)}}">
<input type="hidden" name="_method" value="PUT">
        <!-- Exibindo erros caso exista -->
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
    {{csrf_field()}}
    <div class="form-group">
        <label for="inputNome">Nome</label>
        <input type="text" class="form-control" name="nome" id="inputNome" value="{{$requerimentos->nome}}">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" name="email" id="inputEmail"  value="{{$requerimentos->email}}">
        <label for="inputCpf">CPF</label>
        <input type="number" class="form-control" name="email" id="inputCpf"  value="{{$requerimentos->cpf}}">
        <label for="inputModelo">Modelo</label>
        <input type="text" class="form-control" name="modelo" id="inputModelo"  value="{{$requerimentos->modelo}}">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{url()->previous()}}" class="btn btn-default">Cancelar</a>
</form>
@endsection