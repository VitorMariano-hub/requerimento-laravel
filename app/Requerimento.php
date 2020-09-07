<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requerimento extends Model
{
    protected $fillable = [
        "nome",
        "email",
        "cpf",
        "end_numero",
        "endereco",
        "bairro",
        "municipio",
        "uf",
        "cep",
        "modelo",
        "ano",
        "potencia",
        "icms",
       ];
}
