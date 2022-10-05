<?php
    session_start();
    
    //Quando o submit for pressionado ele registra as informações no banco
    if(isset($_POST['submit'])){

        include_once('conexao.php');

        //As informações que vão ser registradas no banco
        $nomeplataforma = $_POST['nomeplataforma'];
        $email          = $_POST['email'];
        $senha          = $_POST['senha'];
        $user           = $_SESSION['email'];

        //Registrando as informações no banco
        $query = "INSERT INTO senha (nomeplataforma,email,senha, user) VALUES ( '$nomeplataforma', '$email', '$senha', '$user' )";

        $result = mysqli_query($conn, $query);
        
        //Manda de volta para main
        header('location: ../html/main.php');
    }
?>