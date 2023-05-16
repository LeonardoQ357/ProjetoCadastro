<?php
    include("conexao.php");

    $id = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    $sql = "UPDATE usuario SET 
    nome_usuario= '$nome', 
    email_usuario='$email', 
    fone_usuario='$fone', 
    senha='$senha' 
    WHERE id_usuario = '$id'";
    $result = mysqli_query($con, $sql);
    
    if($result){
        echo "<br><h2>Dados alterados com sucesso!!</h2>";
    }else{
        echo "<br>Erro ao tentar alterar dados: $mysqli_error($con)";
    }
    

    echo
    "<div>
    <a href='listar_usuarios.php'>Voltar</a>
    </div>"; 

?>