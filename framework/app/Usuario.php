<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'codigousuario';
    protected $fillable = ['usuario', 'clave', 'edad'];

    public function pagos()
    {
        return $this->hasManyThrough('App\Pago','App\Usuariospago','codigousuario','codigopago');
    }
    
    public function favoritos()
    {
        return $this->hasManyThrough('App\Usuario','App\Favorito','codigousuario','codigousuario');
    }
}
