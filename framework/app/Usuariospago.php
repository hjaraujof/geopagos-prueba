<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuariospago extends Model
{
    protected $primaryKey = 'codigousuariopago';
    protected $fillable = ['codigousuario', 'codigopago'];

    public function pago(){
        return $this->belongsTo('App\Pago','codigousuariospago');
    }
}
