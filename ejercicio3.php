<?php
include ("estructuradepagina/cabecera.php");
?>
<?php
if ($_POST) {
    $numero =$_POST ['num'];
    if (($numero < 9)) {
        $imp="Este numero tiene un digito";
    }
    if (($numero >=10) and ($numero <99)) {
        $imp="Este numero tiene dos digitos";
    }
    if (($numero >=100) and ($numero <999)){
        $imp="Este numero tiene tres digitos";
    };
    if (($numero >=1000) and ($numero <9999)){
        $imp="Este numero tiene cuatro digitos";
    };
    if (($numero >10000)){
        $imp="Demasiado digitos";
    };
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
                   <h1>Consulta los digitos de tu numero</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="email">Solicita un numero:</label>
                    <input type="text" class="form-control" id="email" placeholder="Digite su numero" name="num">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-dark" name="accion" value="suma">Consultar digitos</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                    <h3>Numero de digitos</h3>
                  <input type="text" name="" id="" value="<?php if ($_POST) echo$imp; ?>">
                  
                </div>
            </div>    

            </div>
            
        </div>
    </div>

<?php
include ("estructuradepagina/body.php");
?>