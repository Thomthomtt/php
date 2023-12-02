
<?php
include('conexao.php');
$_login_form = $_POST["login"];
$_senha_form = MD5($_POST["senha"]);

$_query = "SELECT login, senha FROM tb_login;";
$_resultado = mysqli_query($conexao, $_query);
$_dados_login = $_resultado->fetch_array();

if (($_dados_login == null)){
    header ("refresh: 2;url=nao_existe.php");
}
elseif (($_login_form == $_dados_login["login"]) and ($_senha_form == $_dados_login["senha"])){
    header ("refresh: 2;url=acesso_permitido.php");
} else {
    header ("refresh: 2;url=nao_existe.php");
}
?>

