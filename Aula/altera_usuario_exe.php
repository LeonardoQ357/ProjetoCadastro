<?php
    include("conexao.php");

    $id = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    $sql = "UPDATE usuario SET nome_usuario= '$nome', email_usuario='$email', fone_usuaio='$fone', senha='$senha' WHERE id_usuario = '$id'";
?>