<?php if(1){
    switch( $_POST['tipo_figura']){
        case 'cuadrado':
            $obj = new Square($_POST['lado']);
            $nombre = "Cuadrado";
            var_dump($obj);
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
        Figura: <?php echo $nombre; ?> <br>
        Base: <?php echo $obj->getBase(); ?> <br>
        Altura: <?php echo $obj->getHeigth(); ?> <br>
        Diámetro: <?php echo $obj->getDiameter(); ?> <br>
        Área: <?php echo $obj->getArea(); ?> <br>
    </div>
</div>

<?php } ?>