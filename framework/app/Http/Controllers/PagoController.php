<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pago;

class PagoController extends Controller
{
    public function indexUsuario(Request $request, Usuario $usuario)
    {
        $pagos = Usuario::pagos();    
        return view('pagos.index', [ 'pagos' => $pagos, ]);
    }

    public function store(StorePagoRequest $request, Usuario $usuario)
    {
        $pago = $request->pago()->create([
            'importe' => $request->importe,
            'fecha' => $request->fecha,
        ]);

        $request->usuariopago()->create([
            'codigousuario' => $usuario,
            'codigopago' => $pago
        ]);
    
        return redirect('pagos', ['usuario' => $usuario]);
    }

    public function destroy(Request $request, Usuario $usuario, Pago $pago)
    {
        $pago->delete();        
        return redirect('pagos', ['usuario' => $usuario]);
    }
}
