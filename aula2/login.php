<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
</head>
<body>
  <?php 
  include_once('index.php')
  ?>
    <form action="verifica_login.php" method="post">
        <h1 id="titulo">Login</h1>
        <fieldset class="campo">
          <div class="caixa">  
            <label for="login" class="caixa_texto">Login:</label>
            <input type="text" name="login" id="login" value="Admin">
         </div>
         <div class="caixa">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" value="Root123">  
          </div> <br>   

          <div class="caixa">
            <label for="estcivil">Qual seu estado civil?</label>
              <select name="estcivil" id="estcivil">
              <option value="">Solteiro</option>
              <option value="">Casado</option>
              <option value="">Separado</option>
              <option value="">Divorciado</option>
              <option value="">Viúvo</option>
            </select>
            <div class="caixa">
              <label for="sexo">Qual o seu sexo?</label>
              <input type="radio" id="sexom" name="sexo" value="masculino">
              <label for="sexom">Masculino</label>
              <input type="radio" id="sexof" name="sexo" value="feminino">
              <label for="sexof">Feminino</label>
              <input type="radio" id="sexou" name="sexo" value="prefer">
              <label for="sexou">Prefiro não dizer</label>

            </div>
              
          </div>
              <button type="submit" id="botao">Enviar</button>
        </fieldset>
    </form> 
</body>
</html>