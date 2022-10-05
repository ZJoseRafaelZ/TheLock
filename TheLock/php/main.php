<?php
    session_start();
    include_once('conexao.php');

    $user = $_SESSION['email'];

    if( (!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) ){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('location: ../html/index.php');
    }
    
    //Pega a informação que foi colocado no input de pesquisa e 
    //verifica se essa informação corresponde a alguma informação no banco de dados
    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM senha WHERE id LIKE '%$data%' or nomeplataforma LIKE '%$data%' or email LIKE '%$data%' or senha LIKE '%$data%' ORDER BY id DESC";
    }
    else {   
        $sql = "SELECT * FROM senha WHERE user = '$user' ORDER BY id DESC";
    }
    $result = $conn->query($sql);
?>