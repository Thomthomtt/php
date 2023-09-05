<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Calculadora</title>
</head>
<body>
<?php 
  include_once('index.php')
  ?>
    <form action="calcular.php" method="post">
        <h1 id="titulo">Calculadora</h1>
        <fieldset class="campo">
         <div class="caixa">  
            <label for="num1">Número 1:</label>
            <input type="text" name="num1" id="num1">
         </div>
         <div class="caixa">
            <label for="num2">Número 2:</label>
            <input type="text" name="num2" id="num2">    
            </div>
            <br>
             <button type="submit" id="botao">Calcular</button>      
        </fieldset> 
            <!--Falta alterar a altura do botao-->

        </form>
        </body>
        </html>

