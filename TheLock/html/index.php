<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icon.png">

</head>
<body>

    <section class="container">

        <div id="formulario">

            <h1>Login</h1>
            <a id="btLogin" href="index.php">Login</a>
            <a id="btCadastro" href="cadastrarUsuario.php">Cadastro</a>
            <hr>
            <br>
            <form action="../php/validaLogin.php" method="POST" >
                <div class="input-container">
                    <input type="email" id="email" name="email" class="text-input" placeholder="Email" autocomplete="off" required/>
                    <label for="email" class="label">Email</label>
                </div>

                <br>

                <div class="input-container">
                    <input type="password" id="inputsenha" name="senha" class="text-input" placeholder="Senha" autocomplete="off" required/>
                    <label for=senha class="label">Senha</label>
                    <div id="iconsenha" onclick="showHide()"></div>
                </div>
                
                <br><br>

                <input class="btEntrar" type="submit" name="submit" value="Entrar" href="">

                <br>
            </form>
        </div>

        <div id="image">
            <img src="../img/logo.png" alt="icone">
        </div>

    </section>

    <script src = "../js/VerSenha.js"></script>

</body>
</html>