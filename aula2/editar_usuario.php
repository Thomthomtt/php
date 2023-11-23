
<?php include ("conexao.php");
include ("index.php");
$_id = $_GET["id"];


$query = "SELECT id, nome, sobrenome, estcivil, sexo, login, senha, data, status FROM tb_login WHERE id =".$_id;
$result = mysqli_query ($conexao, $query) or die ("erro no select");
   
while ($linha = mysqli_fetch_array($result)) {
        echo ("<form action= 'atualizar.php' method='POST'>");
        echo ("id: <input type='text' name='id' value=".$linha['id']." readonly></br>");
        echo ("Nome: <input type='text' name='nome' value=".$linha['nome']."></br>");
        echo ("Sobrenome: <input type='text' name='sobrenome' value=".$linha['sobrenome']."></br>");
       
if($linha['estcivil'] == "Casado"){

$casado= "selected";
$solteiro = "";
$separado = "";
$divorciado = "";
$viuvo = "";
}else if($linha['estcivil'] == "Solteiro"){
    $casado= "";
    $solteiro = "selected";
    $separado = "";
    $divorciado = "";
    $viuvo = "";

    }else if($linha['estcivil'] == "Separado"){
        $casado= "";
        $solteiro = "";
        $separado = "selected";
        $divorciado = "";
        $viuvo = "";

        }else if($linha['estcivil'] == "Divorciado"){
            $casado= "";
            $solteiro = "";
            $separado = "";
            $divorciado = "selected";
            $viuvo = "";
            }else{
                $casado= "";
                $solteiro = "";
                $separado = "";
                $divorciado = "";
                $viuvo = "selected";
            }
        echo ("Estado Civil: <select name='estcivil'> 
        <option value='Solteiro'".$solteiro." >Solteiro</option>
        <option value='Casado'".$casado." >Casado</option>
        <option value='Separado'". $separado." >Separado</option>
        <option value='Divorciado'".  $divorciado." >Divorciado</option>
        <option value='Viuvo' ". $viuvo."  >Viúvo</option></br>
        </select><br>");

        if($linha['sexo']== "Masculino"){
            $_checkedMasc = "checked";
            $_checkedFem = "";
        }else{
            $_checkedFem = "checked";
            $_checkedMasc = "";
        }
        echo ("Sexo:</p>");
        echo ("<input type='radio' name='sexo' value='Masculino'".$_checkedMasc."><label for='sexo'>Masculino</br>");
        echo ("<input type='radio' name='sexo' value='Feminino'".$_checkedFem."><label for='sexo'>Feminino</br>");
        echo ("Login: <input type='text' name='login' value=".$linha['login']."></br>");
        echo ("Senha: <input type='text' name='senha' value=".$linha['senha']."></br>");
        echo ("Data: <input type='date' name='data')' value=".$linha['data']." readonly></br>");
        echo ("<input type='submit' value='Alterar'>");
        echo ("</form>");

    }

?>
