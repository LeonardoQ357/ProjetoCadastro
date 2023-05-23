<?php
        include('conexao.php');
        include('cria_sessao.php');

        $sql = "SELECT * FROM usuario WHERE "
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página Inicial - Projeto Cadastro IFSP</h1>
    <?php
        if(!empty($_SESSION['login'])){
            echo "<h4>Olá " .$_SESSION['login']['nome_usuario']. "</h4>";
            echo "<a href='logout.php'>Sair</a>";
        }else{
            echo "<h4><a href='login.html'>Realizar Login</a></h4>";
        }
    ?>
    <hr>
    <ul>
        <li><a href="cadastro_usuario.html">Cadastrar</a></li>
        <li><a href="listar_usuarios.php">Listar</a></li>
    </ul>
</body>
</html>