<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillabe = ['cliente_id', 'dormitorios', 'residencial', 'ap', 'entrada', 'saida', 'diarias', 'valor_diaria', 'valor_limpeza'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'Reserva';

    public function valor_total(){
        return $this->diarias * $this->valor_diaria + $this->valor_limpeza;
    }

    public function Apartamento(){
        return $this->belongsTo('App\Apartamento', 'residencial', 'id');
    }
}

