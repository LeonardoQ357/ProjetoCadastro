<?php
    include("conexao.php");

    $id = $_GET['id_usuario'];

    $sql = "DELETE FROM usuario WHERE id_usuario='$id'";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "<br><h2>Dados excluidos com sucesso!!</h2>";
    }else{
        echo "<br><h2>Algo deu errado!!</h2>";
    }

    echo
    "<div>
    <a href='listar_usuarios.php'>Voltar</a>
    </div>"; 
?>