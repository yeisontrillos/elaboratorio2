<?php
include ("estructuradepagina/cabecera.php");
?>

<?php
if ($_POST) {
    $dia =$_POST['var1'];
    $mes =$_POST ['var2'];
    $año = $_POST ['var3'];

    if ($mes==1) {
        $escribir="$dia/enero/$año";
    }
    if ($mes==2) {
        $escribir="$dia/febrero/$año";
    }
    if ($mes==3) {
        $escribir="$dia/marzo/$año";
    }
    if ($mes==4) {
        $escribir="$dia/abril/$año";
    }
    if ($mes==5) {
        $escribir="$dia/mayo/$año";
    }
    if ($mes==6) {
        $escribir="$dia/junio/$año";
    }
    if ($mes==7) {
        $escribir="$dia/julio/$año";
    }
    if ($mes==8) {
        $escribir="$dia/agosto/$año";
    }
    if ($mes==9) {
        $escribir="$dia/septiembre/$año";
    }
    if ($mes==10) {
        $escribir="$dia/octubre/$año";
    }
    if ($mes==11) {
        $escribir="$dia/noviembre/$año";
    }
    if ($mes==12) {
        $escribir="$dia/diciembre/$año";
    }
    elseif (($mes <1) or ($mes>12)) {
        $escribir ="Error";
    }
    if (($dia <1) or ($dia >31)) {
        $escribir ="Error";
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
<div class="container" id="tabla">
    <br>
        <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                   <h1>Denotacion de fecha</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="email">Dia:</label>
                    <input type="text" class="form-control" id="email" placeholder="Digite dia" name="var1">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Mes:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Digite mes" name="var2">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Año:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Digite año" name="var3">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-warning" name="accion" value="">consultar</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                    <h3>Tu fecha es </h3>
                  <input type="text" name="" id="" value="<?php if ($_POST) echo$escribir; ?>">
                  
                </div>
            </div>    

            </div>
            
        </div>
    </div>
<?php
include ("estructuradepagina/body.php");
?>