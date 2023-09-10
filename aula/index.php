<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <title>Dashboard</title>

</head>
<body>
<?php 
  include_once('index.php')
  ?>
  <div class="barra">
    <h1 id="intro">Dashboard</h1>
    <div class="menu"> 
        <ul>  
            <li><a href="login.php">Login</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Aula 1</a>   
                    <ul> <li><a href="formulario.php">Formulario</a></li>
                    </ul>
            </li>
            <li><a href="#">Aula 2</a>
                    <ul>    <li><a href="calculadora.php">Calculadora</a></li> 
                            <li><a href="tabuada.php">Tabuada</a></li>
                    </ul>    
            </li>
        <li><a href="#">Aula 3</a></li>
    
    </div>
    </div>
</body>
</html>