<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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

    public function store(StoreUsuarioRequest $request){
        
        $request->usuario()->create([
            'nombre' => $request->nombre,
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
