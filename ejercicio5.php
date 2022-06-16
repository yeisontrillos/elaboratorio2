<?php
include ("estructuradepagina/cabecera.php");
?>
<?php
if ($_POST){
$nota1=$_POST ['nota1'];
$nota2=$_POST ['nota2'];
$nota3=$_POST ['nota3'];
$notas=$nota1+$nota2+$nota3;
$notafinal= $notas/3;

if ($notafinal >= 70) {
    $imp="Aprobado";
}
else ($imp="Reproado");
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
                   <h1>Consulta aqui tu nota final</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="email">Nota 1</label>
                    <input type="text" class="form-control" id="email" placeholder="Digite la primera nota" name="nota1">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Nota 2:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Digite segunda nota" name="nota2">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Nota 3:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Digite tercera nota" name="nota3">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-danger" name="accion" value="suma/division">consultar nota</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                    <h3>Nota final</h3>
                  <input type="text" name="" id="" value="<?php if ($_POST) echo$imp; ?>">
                  
                </div>
            </div>    

            </div>
            
        </div>
    </div>

<?php
include ("estructuradepagina/body.php");
?>