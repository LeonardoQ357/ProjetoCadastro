<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "Nome: $nome<br>Email: $email<br>Telefone: $fone<br>Senha: $senha<br>";

?>