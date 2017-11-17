@if (count($pagos) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Favoritos
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Favorito</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($favoritos as $favorito)
                        <tr>
                            <td class="table-text">
                                <div>{{ $favorito->codigousuariofavorito }}</div>
                            </td>
                            <td>
                                <form action="/usuario/{{ $usuario->codigousuario }}/favoritos/{{ $favorito->codigofavorito }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}                        
                                    <button>Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif