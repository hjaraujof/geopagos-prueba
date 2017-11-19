<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest as StoreUsuarioRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = Usuario::all();
    
        return view('usuarios.index', [ 'usuarios' => $usuarios, ]);
    }

    public function detail(Request $request, Usuario $usuario)
    {
        return view('usuarios.detail', [ 'usuario' => $usuario,
                                         'pagos' => $usuario->pagos()->get(), 
                                         'favoritos' => $usuario->favoritos()->get(),
                                         'usuarios' => Usuario::where('codigousuario', '!=', $usuario->codigousuario)
                                                              ->whereNotIn('codigousuario', $usuario->favoritos()
                                                                                                    ->pluck('codigousuariofavorito')
                                                                                                    ->all())
                                                              ->get(),]);
    }

    public function store(StoreUsuarioRequest $request){
        
        Usuario::create([
            'usuario' => $request->usuario,
            'clave' => $request->clave,
            'edad' => $request->edad
        ]);
    
        return redirect('usuarios');
    }

    public function destroy(Request $request, Usuario $usuario)
    {
        $usuario->delete();        
        return redirect('usuarios');
    }
}
