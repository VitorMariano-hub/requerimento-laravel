@extends('template.default')
@section('content')
<form method="post" action="{{route ('requerimento.destroy', $requerimentos->id) }}">
<input type="hidden" name="_method" value="DELETE">
@if(Session::has('mensagem'))
<div class="row">
   <div class="col-md-12">
      <div class="alert alert-warning">
           <div align="center">
                           {{ Session::get('mensagem')['msg'] }}
           </div>
      </div>
   </div>
</div>
@endif
{{csrf_field()}}    
<div class="col-md-12">
    <h4>Tem certeza que deseja remover?</h4>
    <p>Nome: {{$requerimentos->nome}}</p>
    <p>Email: {{$requerimentos->email}}</p>
    <p>Modelo: {{$requerimentos->modelo}}</p>
    <button type="submit" class="btn btn-danger">Remover</button>
    <a href="{{route('requerimento')}}" class="btn btn-default">Cancelar</a>
</div>
</form>
@endsection