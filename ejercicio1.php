<?php
include ("estructuradepagina/cabecera.php");
?>
<?php
if($_POST){
    $num1=$_POST['var1'];
    $num2=$_POST['var2'];
    $accion=$_POST['accion'];
    
    switch ($accion) {
     case "suma": 
     
     $res=$num1+$num2;
    
     break;
     case "resta":
       
        $res=$num1-$num2;
        
     break;
     case "multi":
        
        $res=$num1*$num2;
      
     break;
     
     default:
     echo "No existe";

     break;
     case "div":

        $res=$num1/$num2;
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
                   <h1>Operaciones matematicas</h1>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="email">Valor N°1:</label>
                    <input type="text" class="form-control" id="email" placeholder="Digite primer numero" name="var1">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Valor N°2:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Digite segundo Valor" name="var2">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-success" name="accion" value="suma">Sumar</button>
                    <button type="submit" class="btn btn-danger" name="accion" value="resta">Restar</button>
                    <button type="submit" class="btn btn-warning" name="accion" value="multi">Multiplicar</button>
                    <button type="submit" class="btn btn-dark" name="accion" value="div">dividir</button>
                    </center>
                </form>
                </div>
                <div class="card-footer text-muted">
                    <h3>Resultado</h3>
                  <input type="text" name="" id="" value="<?php if ($_POST) echo$res ?>">
                </div>
            </div>    

            </div>
            
        </div>
    </div>
<br>
<?php
include ("estructuradepagina/body.php");
?>
