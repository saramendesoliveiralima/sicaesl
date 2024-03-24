<?php
    include ('../configuracao/cabecalho.php');
    include ('verifica.php');
     
    session_start();

    session_destroy();

    header("Location: ../login.php");
    
?>