<?php
    session_start();

//Quando o submit for pressionado ele verifica se ja exixte um usuario registrado no sistema se não tiver ele registra
    if(isset($_POST['submit'])){

        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //Verifica se o usuario ja esta registrado no sistema
        $cmd = "SELECT email FROM usuario WHERE email='$email'";
        $result = mysqli_query($conn, $cmd);
        $rows = mysqli_num_rows($result);
    
        //Se ja estiver cadastrado mostra mensagem e manda para cadastro de novo
        if($rows == 1){
            echo "<script> alert ('Usuario Já existe no sistema!') ; window.location.href='../html/cadastrarUsuario.php'; </script>";
        }
            
        //Se não estiver cadastro ele cadastra, mostra mensagem de sucesso e manda para login
        else{
            $cmd = "INSERT INTO usuario(nome, email, senha) VALUES('$nome', '$email', '$senha')";
            $result = mysqli_query($conn, $cmd);
            echo "<script> alert ('Usuario Cadastrado Com Sucesso!') ; window.location.href='../html/index.php'; </script>";
        }
    }

?>