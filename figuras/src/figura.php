<?php if(isset($_POST['tipo_figura'])&&isset($_POST['figura_def'])){
    switch( $_POST['tipo_figura']){
        case 'cuadrado':
            $obj = new Square($_POST['lado']);
            $nombre = "Cuadrado";
        break;
        case 'triangulo':
            $obj = new Triangle($_POST['base'],$_POST['altura']);
            $nombre = "Triángulo";
        break;
        case 'circulo':
            $obj = new Circle($_POST['diametro']);
            $nombre = "Círculo";
        break;
    }?>
<div class="row">
    <div class="panel-body">
        Figura: <?php echo $nombre; ?>
        Base: <?php echo $obj->getBase(); ?>
        Altura: <?php echo $obj->getHeigth(); ?>
        Diámetro: <?php echo $obj->getDiameter(); ?>
    </div>
</div>

<?php } ?>