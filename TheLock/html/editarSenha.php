<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icon.png">
    <link rel="stylesheet" href="../css/editarSenha.css">
    <title>Editar Senha</title>
</head>
<body>

    <a href="main.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="white" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
    </a>

    <section class="container">

        <div id="formulario">
            <h1>Cadastrar Senha</h1>
            <form action="../php/salvarEditar.php" method="POST" >
                <div class="input-container">
                    <input type="text" id="nomeplataforma" name="nomeplataforma" class="text-input" value=<?php include('../php/editarSenha.php'); echo $nomeplataforma;?> placeholder="Nome da Plataforma" autocomplete="off" required/>
                    <label for="nomeplataforma" class="label">Nome da Plataforma</label>
                </div>

                <br>

                <div class="input-container">
                    <input type="text" id="email" name="email" class="text-input" value=<?php include('../php/editarSenha.php'); echo $email;?> placeholder="Login" autocomplete="off" required/>
                    <label for="email" class="label">Login</label>
                </div>
                
                <br>

                <div class="input-container">
                    <input type="password" id="inputsenha" name="senha" class="text-input" value=<?php include('../php/editarSenha.php'); echo $senha;?> placeholder="Senha" autocomplete="off" required/>
                    <label for=senha class="label">Senha</label>
                    <div id="iconsenha" onclick="showHide()"></div>
                </div>

                <br><br>
                
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input class="btEditar" type="submit" name="update" value="Editar">

                <br>
            </form>
        </div>

    </section>

    <script src = "../js/VerSenha.js"></script>

</body>
</html>