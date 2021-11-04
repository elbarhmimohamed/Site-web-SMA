<?php
    session_start();

    session_destroy();
    header('Location: Acceil.php');
    exit ;



?>
