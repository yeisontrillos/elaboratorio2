<?php
include ("estructuradepagina/cabecera.php");
?>

<?php

if ($_POST){
    $cantidad=$_POST['ncamisas'];
    $preciounitario=$_POST['valoru'];
    $valort = $cantidad*$preciounitario;
    $descuento = 0.20;
    $descuento2 = 0.10;
    if ($cantidad >=3) {
        $valord1 = $valort * $descuento;
        $valortd =$valort -$valord1;
    }
    if ($cantidad <3) {
        $valord2 = $valort* $descuento2;
        $valortd = $valort-$valord2;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
<div class="container">
    <br>
        <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                   <h1>consulta aqui el valor de tu compra.!</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="email">N° De camisa:</label>
                    <input type="text" class="form-control" id="email" placeholder="numero de camisas" name="ncamisas">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Precio unitario:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="valor unitario de la camisa" name="valoru">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-success" name="accion" value="suma">consultar</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                    <h3>valor de tu compra con su descuento.!</h3>
                  <input type="text" name="" id="" value="<?php if ($_POST) echo$valortd; ?>">
                  
                </div>
            </div>    

            </div>
            
        </div>
    </div>

<?php
include ("estructuradepagina/body.php");
?>