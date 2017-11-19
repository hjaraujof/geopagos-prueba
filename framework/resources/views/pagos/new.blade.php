<form action="/usuarios/{{$usuario->codigousuario}}/pagos" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="pago-importe" class="col-sm-3 control-label">Importe</label>
        <div class="col-sm-6">
            <input type="number" name="importe" id="pago-importe" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label for="pago-fecha" class="col-sm-3 control-label">Fecha</label>
        <div class="col-sm-6">
            <div class="input-group date" id="pago-fecha" data-provide="datepicker">
                <input type="text" id="datepicker" class="form-control">
                <input type="hidden" name="fecha" id="fecha">
                <div class="input-group-addon"><span class="glyphicon glyphicon-th"></span></div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Agregar Pago
            </button>
        </div>
    </div>
</form>