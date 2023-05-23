<?php
    include('cria_sessao.php');

    session_destroy();
    header('Location: index.php');
?>