<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $primaryKey = 'codigopago';
    protected $fillable = ['importe', 'fecha'];

    public function usuariospago()
    {
        return $this->hasOne('App\Usuariospago','codigousuariopago','codigousuariopago');
    }
}
