<?php

use Classes\Square as Square;
use Classes\Triangle as Triangle;
use Classes\Circle as Circle;

?>
<html lang="en">
    <head>
        <title>Prueba Clases GeoPagos</title>
        <!-- CSS And JavaScript -->
        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="/usuarios/">Prueba Geopagos - Clases</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse"></div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->            
            </nav>
        </div>

        <div class="container">
            <div class="row">
                <?php include "tipos.php"; ?>
            </div>

            <div class="row">
                <?php include "forms.php"; ?>
            </div>

            <div class="row">
                <?php include "figura.php"; ?>
            </div>
        </div>
        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                
</body></html>
