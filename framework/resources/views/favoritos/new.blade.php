<form action="/usuarios/{{$usuario->codigousuario}}/favoritos" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="codigousuariofavorito" class="col-sm-3 control-label">Usuario Favorito</label>
        <div class="col-sm-6">
            <input type="hidden" name="codigousuario" value="{{$usuario->codigousuario}}">
            <select name="codigousuariofavorito" id="codigousuariofavorito" class="form-control">
                @foreach ($usuarios as $usuariosel)
                <option value="{{$usuariosel->codigousuario}}">{{$usuariosel->usuario}}</option>
                @endforeach                
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Agregar Favorito
            </button>
        </div>
    </div>
</form>