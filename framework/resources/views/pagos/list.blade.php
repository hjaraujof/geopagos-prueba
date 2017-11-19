@if (count($pagos) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Pagos
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Importe</th>
                    <th>Fecha</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($pagos as $pago)
                        <tr>
                            <td class="table-text">
                                <div>{{ $pago->importe }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $pago->fecha }}</div>
                            </td>
                            <td>
                                <form action="{{ action('PagoController@destroy', ['usuario' => $usuario->codigousuario,
                                                                                   'pago' => $pago->codigopago ]) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button>Borrar Pago</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif