<?php
    session_start();

    //Se o botão de sair for pressionado destroi as sessão e manda para index
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: ../html/index.php");
?>