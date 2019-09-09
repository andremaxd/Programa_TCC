<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    protected $fillabe = ['dormitorios', 'residencial', 'ap', 'id_proprietario'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'Apartamento';

    public function Reserva(){
        return $this->hasMany('App\Reserva', 'residencial', 'id');
    }
}
