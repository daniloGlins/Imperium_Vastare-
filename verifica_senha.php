<?php
// Conexão com o banco de dados
include 'config/conexao.php';

// Recebe os dados do formulário
$user = $_POST['user'];
$senha = $_POST['senha'];

// Busca o usuário no banco de dados
$query = "SELECT * FROM user WHERE user = '$user'";
$result = mysqli_query($conn, $query);

// Verifica se o usuário existe
if (mysqli_num_rows($result) > 0) {
    // Obtém os dados do usuário
    $row = mysqli_fetch_assoc($result);

    // Verifica a senha
    if ($senha == $row['senha']) {
        // A senha está correta, redireciona para a página inicial
        header('Location: index.php');
    } else {
        // A senha está incorreta, exibe um alerta e redireciona para a página de login
        echo "<script>alert('Senha incorreta!'); window.location = 'login.php';</script>";
    }
} else {
    // O usuário não existe, exibe um alerta e redireciona para a página de login
    echo "<script>alert('Usuário não encontrado!'); window.location = 'login.php';</script>";
}