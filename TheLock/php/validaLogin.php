<?php
    session_start();
    
    //tem que ter clicado no botão submit a variavel precisa existir e email e senha tem que esta diferente de vazio
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('conexao.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //as aspas simples são obrigatórias
        $query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' ";
        $result = $conn->query($query);

        if(mysqli_num_rows($result)<1){
            //grava mensagem de falha na sessão;
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            
            //destroi a sessão para que não possa logar de novo
            unset($_SESSION['email']);
            unset($_SESSION['senha']);

            //manda pra index
            header('Location: ../html/index.php');
        } else{
            //grava sessao
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../html/main.php');
        }
    }else{ 
        //se não preencheu nada não tem acesso e manda de volta para index
        header('Location: ../html/index.php');
    }

?>