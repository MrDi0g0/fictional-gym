<?php
include 'config.php';
include 'auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (register($nome, $email, $password)) {
        echo "<script>alert('Conta Criada com sucesso'); window.location.href = 'Login.html';</script>";
        exit;
    } else {
        $error = "Error creating account";
    }
}
?>