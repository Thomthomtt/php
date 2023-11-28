<?php include ("conexao.php");
$_id = $_POST["id"];
$_nome = $_POST["nome"];
$_sobrenome = $_POST["sobrenome"];
$_estcivil = $_POST["estcivil"];
$_sexo = $_POST["sexo"];
$_login = $_POST["login"];
$_senha = ($_POST["senha"]);

$_query =  "UPDATE tb_login SET nome = '$_nome', sobrenome = '$_sobrenome', estcivil = '$_estcivil', sexo = '$_sexo',
 login = '$_login'
 WHERE id = $_id;";
mysqli_query ($conexao, $_query);

header ("refresh: 1;url=load.php");

?>