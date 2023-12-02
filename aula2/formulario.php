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
            <input type="text" name="nome" id="nome" placeholder="Nome" required>
         </div>
         <div class="caixa">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
        </div>    
          <div class="caixa">  
            <label for="login" class="caixa_texto">Login:</label>
            <input type="text" name="login" id="login" placeholder="Login" required>
         </div>
         <div class="caixa">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>  
        </div>
        <div class="caixa">
            <label for="estcivil">Qual seu estado civil?</label>
              <select name="estcivil" id="estcivil">
              <option value="Solteiro">Solteiro</option>
              <option value="Casado">Casado</option>
              <option value="Separado">Separado</option>
              <option value="Divorciado">Divorciado</option>
              <option value="Viuvo">Viúvo</option>
            </select>
        </div>
       
        <div> 
             <label for="sexo" style="margin-right: 9%;" >Qual o seu sexo?</label><br>
              <label for="sexo">Masculino</label><br>
              <input type="radio" class="sexo" id="sexo" name="sexo" value="Masculino" required>
              <label for="sexo">Feminino</label><br>
              <input type="radio" class="sexo" id="sexo" name="sexo" value="Feminino">
              <label for="sexo">Prefiro não dizer</label><br>
              <input type="radio" class="sexo" id="sexo" name="sexo" value="Prefiro_nao_dizer">
</div>
            <button type="submit" id="botao">Enviar</button>
        </fieldset>
    </form> 
</body>
</html>