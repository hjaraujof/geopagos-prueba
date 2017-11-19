<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePagoRequest as StorePagoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pago;
use App\Usuariospago;
use App\Usuario;

class PagoController extends Controller
{
    public function store(StorePagoRequest $request, Usuario $usuario)
    {
        $pago = Pago::create([
            'importe' => $request->importe,
            'fecha' => date_format(date_create($request->fecha), 'Y-m-d H:i:s'),
        ]);
        
        $up = Usuariospago::create([
            'codigousuario' => $usuario->codigousuario,
            'codigopago' => $pago->codigopago,
        ]);

        $pago->codigousuariopago = $up->codigousuariopago;        
        $pago->save();

        return redirect()->action(
            'UsuarioController@detail', ['usuario' => $usuario]
        );
    }

    public function destroy(Request $request, Usuario $usuario, Pago $pago)
    {
        $usuariopago = Usuariospago::where('codigopago',$pago->codigopago);
        $usuariopago->delete();
        $pago->delete();        
        return redirect()->action(
            'UsuarioController@detail', ['usuario' => $usuario]
        );
    }
}
