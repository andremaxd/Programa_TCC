<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class numero_ap extends Model
{
    protected $fillabe = ['residencial', 'ap', 'id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'Numero_ap';
}
