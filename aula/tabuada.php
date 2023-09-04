<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Tabuada</title>

</head>
<body>
<?php 
  include_once('index.php')
  ?>
<form action="tabuada_result.php" method="post">
    <div class="caixa"> 
    <label for="numero"> </label>
        <!--Falta alterar tamnho do input-->
    <input type="text" name="numero" id="numero">
    </div>
    <!--Falta alterar a altura do botao-->
     <button type="submit" id="botao">Tabuada</button>
</form>

    
</body>
</html>