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
    <form action="recebe_dados.php" method="post">
        <h1 id="titulo">Formulário de Cadastro</h1>
        </div>
        <fieldset class="campo">
         <div class="caixa">  
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="Nome">
         </div>
         <div class="caixa">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" value="Sobrenome">
        </div>    
             <div class="caixa2">  
            <label for="login" class="caixa_texto">Login:</label>
            <input type="text" name="login" id="login" value="Login">
         </div>
         <div class="caixa2">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" value="Senha">  
            </div>
        </fieldset>
      <button type="submit" id="botao">Enviar</button>
    </form> 
</body>
</html>