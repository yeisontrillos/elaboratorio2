<?php
include ("estructuradepagina/cabecera.php");
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
                   <h1>Consulta la multiplicacion que desees</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="email">solicita la tabla que desees aqui.!!:</label>
                    <input type="text" class="form-control" id="email" placeholder="tabla N°?" name="numero">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-danger" name="accion" value="multiplicacion">consultar</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                <center>   
                <h3>Tabla</h3>
                </center>
                    <?php

                if ($_POST) {

                $numero = $_POST['numero'];
                $i = 1;

                while ($i <= 10) {
                echo "$numero x $i = ". $numero * $i++ ."<br>";
                }

}
?>
                  
                </div>
            </div>    

            </div>
            
        </div>
    </div>

<?php
include ("estructuradepagina/body.php");
?>