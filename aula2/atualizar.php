<?php include ("conexao.php");
$_id = $_POST["id"];
$_nome = $_POST["nome"];
$_sobrenome = $_POST["sobrenome"];
$_estcivil = $_POST["estcivil"];
$_sexo = $_POST["sexo"];
$_login = $_POST["login"];
$_password_novo = $_POST["senha"];
$_senha = MD5($_password_novo);
$_query =  "UPDATE tb_login SET nome = '$_nome', sobrenome = '$_sobrenome', estcivil = '$_estcivil', sexo = '$_sexo',
 login = '$_login'
 WHERE id = $_id;";

$_query_senha = "UPDATE tb_login SET senha = '$_senha'
WHERE id = $_id;";
$_query_password = "SELECT senha FROM tb_login;";
$_resultado = mysqli_query($conexao, $_query_password);
$_pass_bd = $_resultado->fetch_array();
if($_password_novo != $_pass_bd['senha']){
     mysqli_query($conexao, $_query_senha);
} 
mysqli_query($conexao, $_query);

header ("refresh: 1;url=load.php");

?>