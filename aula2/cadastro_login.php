<?php
include("conexao.php");
?>
<?php


$_nome = $_POST["nome"];
$_sobrenome = $_POST["sobrenome"];
$_estcivil = $_POST["estcivil"];
$_sexo = $_POST["sexo"];
$_login = $_POST["login"];
$_senha = MD5($_POST["senha"]);
$query = "INSERT INTO tb_login (id, nome, sobrenome, estcivil, sexo, login, senha, data, status)
VALUES 
('', '$_nome', '$_sobrenome','$_estcivil','$_sexo', '$_login', '$_senha', now(), default);";

$_query = "SELECT login, senha FROM tb_login;";
$_resultado = mysqli_query($conexao, $_query);
$_dados = $_resultado->fetch_array();
if ($_dados == null){
    mysqli_query($conexao, $query);
    header ("refresh: 2;url=load.php");
} elseif (($_login == $_dados['login'])  and  ($_senha == $_dados['senha'])){
        header ("refresh: 2;url=acesso_negado.php");
} else{
    mysqli_query($conexao, $query);
    header ("refresh: 2;url=load.php");
}

  

?>