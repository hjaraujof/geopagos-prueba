<?php if(isset($_POST['tipo_figura'])){
    $altura = '<div class="form-group">
                    <label for="altura" class="col-sm-3 control-label">Altura</label>
                    <div class="col-sm-6">
                        <input type="number" name="altura" id="altura" class="form-control">
                    </div>
                </div>';
    $base = '<div class="form-group">
                    <label for="base" class="col-sm-3 control-label">Base</label>
                    <div class="col-sm-6">
                        <input type="number" name="base" id="base" class="form-control">
                    </div>
                </div>';
    $lado = '<div class="form-group">
                <label for="lado" class="col-sm-3 control-label">Lado</label>
                <div class="col-sm-6">
                    <input type="number" name="lado" id="lado" class="form-control">
                </div>
        </div>';
    $diametro = '<div class="form-group">
                    <label for="diametro" class="col-sm-3 control-label">Diámetro</label>
                    <div class="col-sm-6">
                        <input type="number" name="diametro" id="diametro" class="form-control">
                    </div>
                </div>';
    $campos = '';
    switch( $_POST['tipo_figura']){
        case 'cuadrado':
            $campos = $lado;
        break;
        case 'triangulo':
            $campos = "{$base}{$altura}";
        break;
        case 'circulo':
            $campo = $diametro;
        break;
    }?>
<div class="row">
    <div class="panel">
        <?php ?>
    </div>        
</div>
<div class="row">
    <div class="panel-body">
        <form action="index.php" method="POST" class="form-horizontal">
            <input type="hidden" name="figua_def" value="1" >                
            <?php echo $campos; ?>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default"><i class="fa fa-plus"></i> Agregar Figura</button>
                </div>
            </div>
        </form>
    </div>    
</div>
<?php } ?>
