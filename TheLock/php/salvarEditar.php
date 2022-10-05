<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');

    //Pega todas as informações de um id, edita e Salva essas informações no banco e manda para main
    if(isset($_POST['update']))
    {
        //pega as informações
        $id = $_POST['id'];
        $nomeplataforma = $_POST['nomeplataforma'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        //edita as informações no banco
        $sqlInsert = "UPDATE senha SET id='$id', nomeplataforma='$nomeplataforma', email='$email', senha='$senha' WHERE id=$id";
        $result = $conn->query($sqlInsert);
    }
    //manda para main
    header('Location: ../html/main.php');

?>