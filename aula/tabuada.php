<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
<?php 
  include_once('index.php')
  ?>
<form action="tabuada_result.php" method="post">
    <div class="caixa"> 
    <label for="numero"> </label>
    <input type="text" name="numero" id="numero">
    <button type="submit" id="botao">Tabuada</button>
    </div>
</form>

    
</body>
</html>