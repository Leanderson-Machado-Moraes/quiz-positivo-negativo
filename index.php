<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Prova</title>
</head>
<body>
<form  method="POST">
    <div class="container">
<div class="titulo"><h1>Insira um valor abaixo</h1></div>
<input type="number" name="n" id="n">
<button name="acao" class="btn">Mostrar</button>

<?php
if(isset($_POST['n'])){
   $n = $_POST['n'];
   if($n < 0){
   $res = "Número negativo";
   }else if($n > 0){
   $res = "Número positivo";
   }else{
$res = "Igual a zero";
   }
   
   echo "<p>$res</p>";

    }

?>
</div>
</form>
</body>
</html>