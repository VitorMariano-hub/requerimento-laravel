<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Detalhes:</div>
                    <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>Nome:</td>
                                    <td><strong>{{$requerimentos->nome}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><strong>{{$requerimentos->email}}</strong></td>
                                </tr>
                                <tr>
                                    <td>CPF:</td>
                                    <td><strong>{{$requerimentos->cpf}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Endereço:</td>
                                    <td><strong>{{$requerimentos->endereco}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Bairro:</td>
                                    <td><strong>{{$requerimentos->bairro}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Municipio:</td>
                                    <td><strong>{{$requerimentos->municipio}}</strong></td>
                                </tr>
                                <tr>
                                    <td>UF:</td>
                                    <td><strong>{{$requerimentos->uf}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Número:</td>
                                    <td><strong>{{$requerimentos->end_numero}}</strong></td>
                                </tr>
                                <tr>
                                    <td>CEP:</td>
                                    <td><strong>{{$requerimentos->cep}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Modelo:</td>
                                    <td><strong>{{$requerimentos->modelo}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Ano:</td>
                                    <td><strong>{{$requerimentos->ano}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Potencia:</td>
                                    <td><strong>{{$requerimentos->potencia}}</strong></td>
                                </tr>
                                <tr>
                                    <td>ICMS:</td>
                                    <td><strong>{{$requerimentos->icms}}</strong></td>
                                </tr>
                            </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
