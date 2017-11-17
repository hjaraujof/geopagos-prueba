<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    public function usuario()
    {
        return $this->belongsTo('App\Usuario')->using('App\UsuarioPago');
    }
}
