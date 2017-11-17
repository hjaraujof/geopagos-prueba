<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public function pagos()
    {
        return $this->hasToMany('App\Pago')->using('App\UsuarioPago');
    }
}
