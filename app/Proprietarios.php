<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietarios extends Model
{
    protected $fillable = ['nome','cpf','endereco','telefone', 'email', 'sexo'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'Proprietario';
}
