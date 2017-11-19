<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Favorito;
use App\Usuario;

class FavoritoController extends Controller
{
    public function store(Request $request, Usuario $usuario){
        
        Favorito::create([
            'codigousuario' => $usuario->codigousuario,
            'codigousuariofavorito' => $request->codigousuariofavorito,
        ]);
    
        return redirect()->action(
            'UsuarioController@detail', ['usuario' => $usuario]
        );
    }

    public function destroy(Request $request, Usuario $usuario, Usuario $usuariofavorito)
    {
        $f = Favorito::where('codigousuario',$usuario->codigousuario)->where('codigousuariofavorito',$usuariofavorito->codigousuario);
        $f->delete();
        return redirect()->action(
            'UsuarioController@detail', ['usuario' => $usuario]
        );
    }
}
