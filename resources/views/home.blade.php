@extends('template.default')
@section('content')
<div class="container">
        <div class="col-md-12">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Preencha seu requerimento</h5>
                        <p class="card-text">Em poucos passos você pode preencher o seu requerimento, basta informar os dados solicitados</p>
                        <a href="{{ route('requerimento.create.step.one') }}" class="btn btn-primary">Novo requerimento</a>
                    </div>
                </div>
            <div class="col-md-4"></div> 
    </div>
</div>
@endsection