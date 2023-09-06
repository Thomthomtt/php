
<?php
;
?>
<h1 style="text-align: center;"> 
<?php
$_login = "Admin";
$_senha = "Root123";
$_login_form = $_POST["login"];
$_senha_form = $_POST["senha"];
if(($_login == $_login_form) and ($_senha == $_senha_form)){
    echo ("Bem Vindo"); 
    header ("refresh: 5;url=index.php");
} else {
    echo ("Acesso Negado");
    header ("refresh: 5;url=acesso_negado.php");
}
?>
</h1>
