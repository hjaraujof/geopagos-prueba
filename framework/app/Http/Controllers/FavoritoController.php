<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Favorito;

class FavoritoController extends Controller
{
    public function indexUsuario(Request $request, Usuario $usuario)
    {
        $favoritos = Favorito::where('codigousuario', $usuario)->get();    
        return view('favoritos.index', [ 'favoritos' => $favoritos, ]);
    }

    public function store(Request $request, Usuario $usuario){
        
        $request->favorito()->create([
            'codigousuario' => $usuario,
            'codigousuariofavorito' => $request->codigousuario,
        ]);
    
        return redirect('favoritos', ['usuario' => $usuario->codigousuario]);
    }

    public function destroy(Request $request, Usuario $usuario, Favorito $favorito)
    {
        $favorito->delete();        
        return redirect('favoritos', ['usuario' => $usuario->codigousuario]);
    }
}
