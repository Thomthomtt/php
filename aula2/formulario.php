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
    <form action="cadastro_login.php" method="post">
        <h1 id="titulo">Formulário de Cadastro</h1>
        <fieldset class="campo">
         <div class="caixa">  
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="Nome">
         </div>
         <div class="caixa">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" value="Sobrenome">
        </div>    
          <div class="caixa">  
            <label for="login" class="caixa_texto">Login:</label>
            <input type="text" name="login" id="login" value="Login">
         </div>
         <div class="caixa">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" value="Senha">  
        </div>
        <div class="caixa">
            <label for="estcivil">Qual seu estado civil?</label>
              <select name="estcivil" id="estcivil">
              <option value="solteiro">Solteiro</option>
              <option value="casado">Casado</option>
              <option value="separado">Separado</option>
              <option value="divorciado">Divorciado</option>
              <option value="viuvo">Viúvo</option>
            </select>
        </div>
        <div>
              <label for="sexo">Qual o seu sexo?</label><br>
              <label for="sexo">Masculino</label><br>
              <input type="radio" class="sexo" id="sexo" name="sexo" value="masculino">
              <label for="sexo">Feminino</label><br>
              <input type="radio" class="sexo" id="sexo" name="sexo" value="feminino">
              <label for="sexo">Prefiro não dizer</label><br>
              <input type="radio" class="sexo" id="sexo" name="sexo" value="prefer">
        </div>
            <a href="selecionar_cadastro.php">Cadastros</a>
            <button type="submit" id="botao">Enviar</button>
        </fieldset>
    </form> 
</body>
</html>