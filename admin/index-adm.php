<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrativo Tabernaculo da Fé - Santo Amaro</title>
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body>
    <main>
        <div class="container">
            <img src="./img/banner-login.png" alt="Banner Login" class="banner-login">
            <form class="login" id="loginUser" method="POST">
                <h2>Login</h2>
                <div>
                    <input id="login" name="login"  type="text" placeholder="Digite seu Login">
                </div>
                <div>
                    <input id="senha" name="senha" type="password" placeholder="Digite sua Senha">
                </div>
                <button type="button" href="" class="button" onclick="loginUser()">Entrar</button>

            </form>
        </div>
    </main>




      <!-- Importação do JQuery -->
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    
</body>
</html>