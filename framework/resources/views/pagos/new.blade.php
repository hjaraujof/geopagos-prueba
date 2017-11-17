<form action="/pagos" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="pago-importe" class="col-sm-3 control-label">Importe</label>
        <div class="col-sm-6">
            <input type="text" name="importe" id="pago-importe" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label for="datepicker" class="col-sm-3 control-label">Fecha</label>
        <div class="col-sm-6">
            <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                <input name="fecha" class="form-control" type="text" readonly />
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
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
<script>
  $( function() {
    $( "#pago-fecha" ).datepicker({ minDate: 0 }).datepicker('update', new Date());;
  } );
</script>