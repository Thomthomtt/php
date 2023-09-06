<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Formulario</title>
</head>
<body>
  <?php 
  include_once('index.php')
  ?>
    <form action="verifica_login.php" method="post">
        <h1 id="titulo">Login</h1>
        </div>
        <fieldset class="campo">
        </div>    
             <div class="caixa">  
            <label for="login" class="caixa_texto">Login:</label>
            <input type="text" name="login" id="login" value="Admin">
         </div>
         <div class="caixa">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" value="Root123">  
            </div> <br>   
              <button type="submit" id="botao">Enviar</button>
        </fieldset>
    </form> 
</body>
</html>