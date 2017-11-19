@if (count($favoritos) > 0)
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
                                <div>{{ $favorito->usuario }}</div>
                            </td>
                            <td>
                                <form action="{{ action('FavoritoController@destroy', ['usuario' => $usuario->codigousuario,
                                                                                       'usuariofavorito' => $favorito->codigousuario ]) }}" 
                                                                                       method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button>Borrar Favorito</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
{{print_r($favoritos)}}