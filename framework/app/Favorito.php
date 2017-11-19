<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $primaryKey = 'codigofavorito';
    protected $fillable = ['codigousuario', 'codigousuariofavorito'];
}
