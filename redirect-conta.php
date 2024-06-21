<?php
// Inclui o arquivo de autenticação
require_once 'auth.php';

// Inicia a sessão (caso ainda não tenha sido iniciada)
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário está logado
if (isLoggedIn()) {
    // Se o usuário estiver autenticado, redireciona para pacotes.html
    header('Location: Conta.php');
    exit();
} else {
    // Se o usuário não estiver autenticado, redireciona para CriarConta.html
    header('Location: Login.html');
    exit();
}
?>
