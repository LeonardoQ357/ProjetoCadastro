<?php
    include('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email_usuario='$email' AND senha='$senha'";
    $result = mysqli_query($con, $sql);
    $rowcount = mysqli_num_rows($result); // Quantas linhas o mysql encontrou para o result

    if($rowcount > 0){
        // LOGAR USUÁRIO
        include('cria_sessao.php');
        
        // Retorna um array com os dados do usuário que estão no banco
        $_SESSION['login'] = mysqli_fetch_array($result);

        //Volta para a página inicial
        header('Location: index.php');
    }else{
        echo "<h1>Usuário não encontrado!</h1>";

        echo
        "<div>
        <a href='index.php'>Voltar</a>
        </div>"; 
    }

?>