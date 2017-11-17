<form action="/pagos" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="pago-importe" class="col-sm-3 control-label">Importe</label>
        <div class="col-sm-6">
            <input type="text" name="importe" id="pago-importe" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label for="pago-fecha" class="col-sm-3 control-label">Fecha</label>
        <div class="col-sm-6">
            <input type="number" name="fecha" id="pago-fecha" class="form-control">
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
<script>
  $( function() {
    $( "#pago-fecha" ).datepicker({ minDate: 0 });
  } );
</script>