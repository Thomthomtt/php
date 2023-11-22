        <?php include ('index.php')?>
        <table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Estado Cívil</th>
        <th>Sexo</th>
        <th>Login</th>
        <th>Senha</th>
        <th>Data</th>
        <th>Status</th>
        <th>Editar Usuario</th>
        <th>Editar Status</th>
    </tr>
  
    <?php
     include ('conexao.php');
        $_query = "SELECT id, nome, sobrenome, estcivil, sexo, login, senha, DATE_FORMAT(data, '%d/%m/%Y'), status FROM tb_login;";
        $_resultado = mysqli_query($conexao, $_query) or die ("erro no select");
            while ($_rows = mysqli_fetch_array($_resultado)){ ?>
            <tr>
                <td><?php echo $_rows['id']; ?></td>
                <td><?php echo $_rows['nome']; ?></td>
                <td><?php echo $_rows['sobrenome']; ?></td>
                <td><?php echo $_rows['estcivil'];?></td>
                <td><?php echo $_rows["sexo"];?></td>
                <td><?php echo $_rows["login"];?></td>
                <td><?php echo $_rows["senha"];?></td>
                <td><?php echo $_rows["DATE_FORMAT(data, '%d/%m/%Y')"];?></td>
                <td><?php echo $_rows["status"];?></td>
                <td><a href=editar_usuario.php?id=<?php echo $_rows["id"]; ?> >Editar Usuario </a></td>
                <td><a href=alterar_status.php?id=<?php echo $_rows["id"]; ?> >Alterar Status </a></td>
            </tr>
            <?php } ?>

            </table>