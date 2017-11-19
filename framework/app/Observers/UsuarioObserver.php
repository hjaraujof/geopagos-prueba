<?php

namespace App\Observers;

use App\Usuario;
use App\Favorito;
use App\Usuariospago;

class UsuarioObserver
{
    /**
     * Listen to the Usuario deleting event.
     *
     * @param  \App\Usuario  $usuario
     * @return void
     */
    public function deleting(Usuario $usuario)
    {
        Favorito::where('codigousuario', $usuario->codigousuario)->delete();
        Favorito::where('codigousuariofavorito', $usuario->codigousuario)->delete();
        Usuariospago::where('codigousuario',$usuario->codigousuario)->delete();
        $usuario->pagos()->delete();
    }
}