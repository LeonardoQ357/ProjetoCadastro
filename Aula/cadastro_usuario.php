<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    $check = "SELECT * FROM usuario WHERE email_usuario = '$email'";
    $resulta = mysqli_query($con, $check);
    $row = mysqli_fetch_array($resulta);

    if(mysqli_num_rows($resulta)>0){
        echo "<h2>Email já existente, não foi possível cadastrar!!</h2>";
        echo
        "<div>
        <a href='cadastro_usuario.html'>Voltar</a>
        </div>"; 
    }if(mysqli_num_rows($resulta) == 0){
        $sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, senha) VALUES ('".$nome."','".$email."','".$fone."','".$senha."')";

        echo $sql."<br>";

        
        echo "Nome: $nome<br>Email: $email<br>Telefone: $fone<br>Senha: $senha<br>";

        $result = mysqli_query($con, $sql);
        if($result){
            echo "Dados cadastrados com sucesso!";
        }else{
            echo "Erro ao tentar cadastrar!";
        }

        echo
        "<div>
        <a href='index.php'>Voltar</a>
        </div>"; 
    }

?>