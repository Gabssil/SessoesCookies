<?php
// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtém os dados do formulário
    $email = $_POST['username'];
    $password = $_POST['password'];

    // Armazena os dados na sessão
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $password;

    // Armazena os dados em cookies
    setcookie('user_email', $email, time() + (86400 * 30), "/"); // 86400 = 1 dia
    setcookie('user_senha', $password, time() + (86400 * 30), "/");

    // Redireciona para a página logada após a autenticação
    header("Location: loggedin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login com Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body class="bg-body-tertiary">

    <div class="container text-center bg-body-tertiary">
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <div class="col bg-primary">
                <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Sistema WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="navbar-nav">
                               
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>

            <div class="col bg-white">
                &nbsp;
            </div>

            <div class="col-1">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>

            <div class="col bg-white">
                <div bs-primary>
                    <div class="col bg-white d-flex justify-content-center">
                        <div><br>
                            <h3 class="text-center fs-3">Login</h3>
                            <form method="POST" action="">
                                <div class="mb-5">
                                    <p class="text-start">Email: </p>
                                    <input type="text" class="form-control" name="username" id="username">
                                </div>
                                <div class="mb-5">
                                    <p class="text-start">Senha: </p>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>

                                <button type="submit" class="btn btn-primary">Entrar</button><br>
                                &nbsp;
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div>
</body>

</html>
