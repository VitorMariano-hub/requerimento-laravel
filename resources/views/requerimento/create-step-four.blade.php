@extends('template.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('requerimento.create.step.four.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 4: Detalhes</div>
                    <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>Nome:</td>
                                    <td><strong>{{$requerimento->nome}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><strong>{{$requerimento->email}}</strong></td>
                                </tr>
                                <tr>
                                    <td>CPF:</td>
                                    <td><strong>{{$requerimento->cpf}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Endereço:</td>
                                    <td><strong>{{$requerimento->endereco}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Bairro:</td>
                                    <td><strong>{{$requerimento->bairro}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Municipio:</td>
                                    <td><strong>{{$requerimento->municipio}}</strong></td>
                                </tr>
                                <tr>
                                    <td>UF:</td>
                                    <td><strong>{{$requerimento->uf}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Número:</td>
                                    <td><strong>{{$requerimento->end_numero}}</strong></td>
                                </tr>
                                <tr>
                                    <td>CEP:</td>
                                    <td><strong>{{$requerimento->cep}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Modelo:</td>
                                    <td><strong>{{$requerimento->modelo}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Ano:</td>
                                    <td><strong>{{$requerimento->ano}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Potencia:</td>
                                    <td><strong>{{$requerimento->potencia}}</strong></td>
                                </tr>
                                <tr>
                                    <td>ICMS:</td>
                                    <td><strong>{{$requerimento->icms}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('requerimento.create.step.three') }}" class="btn btn-danger pull-left">Voltar</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Finalizar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection