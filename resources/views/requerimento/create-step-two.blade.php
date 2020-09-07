@extends('template.default') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('requerimento.create.step.two.post') }}" method="POST">
            {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 2: Endereço</div>
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
                                <label for="title">Endereço:</label>
                                <input type="text" value="{{ $requerimento->endereco ?? '' }}" class="form-control" id="taskTitle"  name="endereco">
                            </div>
                            <div class="form-group">
                                <label for="title">Bairro:</label>
                                <input type="text"  value="{{{ $requerimento->bairro ?? '' }}}" class="form-control" id="productAmount" name="bairro"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Municipio:</label>
                                <input type="text"  value="{{{ $requerimento->municipio ?? '' }}}" class="form-control" id="productAmount" name="municipio"/>
                            </div>
                            <div class="form-group">
                                <label for="title">UF:</label>
                                <input type="text"  value="{{{ $requerimento->uf ?? '' }}}" class="form-control" id="productAmount" name="uf"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Número:</label>
                                <input type="number"  value="{{{ $requerimento->end_numero ?? '' }}}" class="form-control" id="productAmount" name="end_numero"/>
                            </div>
                            <div class="form-group">
                                <label for="title">CEP:</label>
                                <input type="number"  value="{{{ $requerimento->cep ?? '' }}}" class="form-control" id="productAmount" name="cep"/>
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('requerimento.create.step.one') }}" class="btn btn-danger pull-left">Voltar</a>
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