@extends('template.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('requerimento.create.step.one.post') }}" method="POST">
            {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 1: Identificação do Requerente</div>
                    <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="title">Nome:</label>
                                <input type="text" value="{{ $requerimento->nome ?? '' }}" class="form-control" id="taskTitle"  name="nome">
                            </div>
                            <div class="form-group">
                                <label for="title">Email:</label>
                                <input type="text"  value="{{{ $requerimento->email ?? '' }}}" class="form-control" id="productAmount" name="email"/>
                            </div>
                            <div class="form-group">
                                <label for="title">CPF:</label>
                                <input type="number"  value="{{{ $requerimento->cpf ?? '' }}}" class="form-control" id="productAmount" name="cpf"/>
                            </div>                             
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('home') }}" class="btn btn-danger pull-left">Voltar</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Avançar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection