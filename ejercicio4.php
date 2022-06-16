<?php
include ("estructuradepagina/cabecera.php");
?>
<?php
if ($_POST){
    $cantidad=$_POST['nzapatos'];
    $preciounitario=$_POST['valoru'];
    $valort = $cantidad*$preciounitario;
    $descuento = 0.20;
    $descuento2 = 0.10;
    $descuento3 =0.40;


    if ($cantidad >10) {
        $valord1 = $valort * $descuento2;
        $valortd =$valort -$valord1;
    }
    if (($cantidad >20) and ($cantidad <30)){
        $valord2 = $valort* $descuento;
        $valortd = $valort-$valord2;
    }
    if ($cantidad >30) {
        $valord3 = $valort * $descuento3;
        $valortd =$valort -$valord3;
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
                    <label for="email">N° De zapatos:</label>
                    <input type="text" class="form-control" id="email" placeholder="Digite numero de zapatos" name="nzapatos">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Precio unitario de los zapatos:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Digite precio unitario de los zapatos" name="valoru">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-warning" name="accion" value="">consultar</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                    <h3>valor de tu compra con su descuento.!</h3>
                  <input type="text" name="" id="" value="<?php if ($_POST)echo$valortd; ?>">
                  
                </div>
            </div>    

            </div>
            
        </div>
    </div>

<?php
include ("estructuradepagina/body.php");
?>