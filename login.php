<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Imperium Vastare - Entre em uma conta</title>
</head>
<body>
    <div class="container">

        <div class="forms-container">
            <div class="signin-signup">
                <form action="index.php" class="sign-in-form" method="POST">
                    <h2 class="title">Entrar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="user" placeholder="Usuário" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha" placeholder="Senha" required />
                        <script>

                        </script>
                    </div>

                    <div class="">
                        <a href="recuperaSenha.php"><span>Esqueceu a Senha?</span></a>
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                </form>


                <form action="config/criarUser.php" class="sign-up-form" method="POST">
                    <h2 class="title">Crie Sua Nova Conta</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuário" name="user" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome" name="nome" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha" required />
                    </div>


                    <input type="submit" class="btn" value="Criar Nova Conta" required />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo usuário?</h3>
                    <p>
                        Venha e faça parte do nosso time.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Crie uma Conta
                    </button>
                </div>
                <img src="img/invest.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Já faz parte do nosso time?</h3>
                    <p>
                        Efetue o log-in para desfrutar melhor do seu dinheiro.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Entrar
                    </button>
                </div>
                <img src="img/cofre.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script>
    document.querySelector('.sign-up-form').addEventListener('submit', function(event) {
    window.alert("Sua conta foi criada com sucesso!");
    event.preventDefault();
    
    // Recarrega a página para voltar ao início do login
    window.location.reload();
});

/*document.querySelector('.sign-in-form').addEventListener('submit', function(event) {
    var loginSucesso = false;

    if (!loginSucesso) {
        event.preventDefault(); // Impede o envio do formulário.

        // Exibe um alerta do navegador para o usuário.
        window.alert("Não foi possível entrar na conta. Verifique seu usuário e senha.");
    }
});*/
    </script>

    <script>
    document.querySelector('.sign-in-form').addEventListener('submit', function(event) {
    var username = document.querySelector('.sign-in-form .username').value;
    var password = document.querySelector('.sign-in-form .password').value;

    var loginSucesso = verificausername(username, senha); // Substitua esta função

    if (!loginSucesso) {
        event.preventDefault(); // Impede o envio do formulário.

        // Exibe um alerta do navegador para o usuário.
        window.alert("Não foi possível entrar na conta. Verifique seu usuário e senha.");
    }
});

function verificausername(username, password) {
    // Substitua esta função pela sua própria lógica de verificação no lado do servidor.
    // Esta função deve retornar 'true' se o usuário e a password estiverem corretos e 'false' caso contrário.
}
    </script>
    <script src="js/app.js"></script>
</body>

</html>