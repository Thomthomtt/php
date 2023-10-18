<?php
include("conexao.php");

$_nome = $_POST["nome"];
$_sobrenome = $_POST["sobrenome"];
$_estcivil = $_POST["estcivil"];
$_sexo = $_POST["sexo"];
$_login = $_POST["login"];
$_senha = $_POST["senha"];
$query = "insert into tb_login 
(id, nome, sobrenome, sexo, estcivil login, senha, status)
values 
('', '$_nome', '$_sobrenome','$_estcivil','$_sexo', '$_login', '$_senha', 'DATE()', default);";
mysqli_query($conexao, $query);

?>