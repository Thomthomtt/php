<?php include ("conexao.php");

$_id = $_GET["id"];

$_query = "UPDATE tb_login SET status = CASE 
WHEN status = 'Ativo' then 'Inativo' 
else 'Ativo' 
END
WHERE id = $_id;";
mysqli_query($conexao, $_query);
header ("refresh: 1;url=load.php");

?>