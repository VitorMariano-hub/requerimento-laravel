@extends('template.default') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('requerimento.create.step.three.post') }}" method="POST">
            {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 3: Informações do Veículo</div>
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
                                <label for="title">Modelo:</label>
                                <input type="text" value="{{ $requerimento->modelo ?? '' }}" class="form-control" id="taskTitle"  name="modelo">
                            </div>
                            <div class="form-group">
                                <label for="title">Ano:</label>
                                <input type="number"  value="{{{ $requerimento->ano ?? '' }}}" class="form-control" id="productAmount" name="ano"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Potência:</label>
                                <input type="number"  value="{{{ $requerimento->potencia ?? '' }}}" class="form-control" id="productAmount" name="potencia"/>
                            </div>
                            <div class="form-group">
                                <label for="title">ICMS:</label>
                                <input type="number"  value="{{{ $requerimento->icms ?? '' }}}" class="form-control" id="productAmount" name="icms"/>
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('requerimento.create.step.two') }}" class="btn btn-danger pull-left">Voltar</a>
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