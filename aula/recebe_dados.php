<?php
$_nome = $_POST["nome"];
$_sobrenome = ($_POST["sobrenome"]);
$_login = $_POST["login"];
$_senha = ($_POST["senha"]);

echo ("Login:".$_login."<br>");
echo ("Senha:".$_senha."<br>");
echo ("Boa noite:".$_nome." ".$_sobrenome);
?>