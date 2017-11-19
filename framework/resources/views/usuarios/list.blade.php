@if (count($usuarios) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Usuarios
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td class="table-text">
                                <div>{{ $usuario->usuario }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $usuario->edad }}</div>
                            </td>
                            <td>
                                <form action="/usuarios/{{ $usuario->codigousuario }}" method="GET">
                                    <button>Administrar Pagos y Favoritos</button>
                                </form>
                            </td>
                            <td>
                                <form action="/usuarios/{{ $usuario->codigousuario }}" method="POST">
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