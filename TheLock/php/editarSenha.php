<?php
    include_once('conexao.php');

    //Se o for diferente de vazio pega todas as informações de um id se não manda de volta para main
    if(!empty($_GET['id'])){

        //pega todas as informações de um id
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM senha WHERE id=$id";
        $result = $conn->query($sqlSelect);
        
        if($result->num_rows > 0)
        {
            //Pega as informações do id e coloca dentro dos input`s
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nomeplataforma = $user_data['nomeplataforma'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
            }
        }
        else
        {
            header('Location: ../html/main.php');
        }
    }
    else
    {
        header('Location: ../html/main.php');
    }
?>