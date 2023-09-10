<?php
include_once ('load.php')
?>
<?php
$_login = "Admin";
$_senha = "Root123";
$_login_form = $_POST["login"];
$_senha_form = $_POST["senha"];
if(($_login == $_login_form) and ($_senha == $_senha_form)){ 
    header ("refresh: 5;url=acesso_permitido.php");
} else {
    header ("refresh: 5;url=acesso_negado.php");
}
?>
</h1>
