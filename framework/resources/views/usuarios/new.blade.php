<form action="/usuarios" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="usuario-usuario" class="col-sm-3 control-label">Usuario</label>

        <div class="col-sm-6">
            <input type="text" name="usuario" id="usuario-usuario" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label for="usuario-clave" class="col-sm-3 control-label">Clave</label>

        <div class="col-sm-6">
            <input type="text" name="clave" id="usuario-clave" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label for="usuario-edad" class="col-sm-3 control-label">Edad</label>

        <div class="col-sm-6">
            <input type="number" name="edad" id="usuario-edad" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Agregar Usuario
            </button>
        </div>
    </div>
</form>