<?php
    include('cria_sessao.php');
    
    // Limpa as variáveis da sessão
    session_unset();
    // Destrói a sessão
    session_destroy();
    // Redireciona para a página inicial(index.php)
    header('Location: index.php');
?>