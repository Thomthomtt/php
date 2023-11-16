<?php include ("conexao.php");
$_id = $_GET["id"];
echo ("minhaid".$_id);

$query = "SELECT * FROM tb_login WHERE id =".$_id;
$result = mysqli_query ($conexao, $query) or die ("erro no select");
   
while ($linha = mysqli_fetch_array($result)) {
        echo ("<form action= 'atualizar.php' method='POST'>");
        echo ("id: <input type='text' name='id' value=".$linha['id']." readonly></br>");
        echo ("nome: <input type='text' name='nome' value=".$linha['nome']."></br>");
        echo ("Sobrenome: <input type='text' name='sobrenome' value=".$linha['sobrenome']."></br>");
        echo ("estcivil: <input type='text' name='estcivil' value=".$linha['estcivil']."></br>");
        echo ("sexo: <input type='text' name='sexo' value=".$linha['sexo']."></br>");
        echo ("login: <input type='text' name='login' value=".$linha['login']."></br>");
        echo ("senha: <input type='text' name='senha' value=".$linha['senha']."></br>");
        echo ("<input type='submit' value='Alterar'>");
        echo ("</form>");

    }

?>
