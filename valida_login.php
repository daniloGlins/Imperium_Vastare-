<?php
session_start();
// Verifica se o formulário foi submetido e se os campos estão preenchidos
if (isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['password'])) {
    include('config/conexao.php');
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Consulta SQL para verificar as credenciais do usuário
    $sql = "SELECT * FROM user WHERE usuario = '$user' and senha = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário autenticado com sucesso
        $_SESSION['user'] = $user;
        header('Location: sua_pagina_de_sucesso.php');
        exit();
    } else {
        
        echo '<script>alert("Usuário ou senha incorretos. Tente novamente.");</script>';
    }
}
?>