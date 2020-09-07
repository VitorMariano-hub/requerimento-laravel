@extends('template.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Gerenciar requerimentos</div>
                <div class="card-body">    
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($requerimentos as $requerimento)
                            <tr>
                                <th scope="row">{{$requerimento->id}}</th>
                                <td>{{$requerimento->nome}}</td>
                                <td>{{$requerimento->cpf}}</td>
                                <td>{{$requerimento->modelo}}</td>
                                <td>
                                <a href="{{route('requerimento.edit', $requerimento->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="{{route('requerimento.delete', $requerimento->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                <a href="{{route('requerimento.show', $requerimento->id)}}"><i class="glyphicon glyphicon-search"></i></a>
                                <a href="{{ route('pdf', $requerimento->id) }}"><i class="glyphicon glyphicon-print"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('requerimento.create.step.one') }}" class="btn btn-primary">Criar requerimento</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection