<?php
    require('dbConnector.php');
    session_start();

    $SESSION_ID = $_SESSION['email'];

    if ( session_status() !== PHP_SESSION_ACTIVE )
    {
        echo "Sessao inexistente";
    }else{
        
        session_destroy();
        header('Location: ../main/index.php');
    }

?>