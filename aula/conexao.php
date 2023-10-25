<?php
define ("host", "127.0.0.1");
define ("usuario", "root");
define ("senha","");
define ("db", "php_login");

$conexao = mysqli_connect(host, usuario, senha, db) or die (mysqli_erro());
?>