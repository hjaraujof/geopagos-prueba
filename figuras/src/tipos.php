<div class="row">
    <div class="panel-body">
        <form action="index.php" method="POST" class="form-horizontal">
            <div class="form-group">
                <label for="tipo_figura" class="col-sm-3 control-label">Figura</label>
                <div class="col-sm-6">
                    <select name="tipo_figura" id="tipo_figura" class="form-control">
                        <option value="cuadrado">Cuadrado</option>
                        <option value="triangulo">Triángulo</option>
                        <option value="circulo">Círculo</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default"><i class="fa fa-plus"></i> Elegir Figura</button>
                </div>
            </div>
        </form>
    </div>
</div>