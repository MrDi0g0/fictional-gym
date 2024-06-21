<?php
    // login.php
    include 'config.php';
    include 'auth.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (login($email, $password)) {
            // Redirecionamento ocorre na função login em auth.php
            exit;
        } else {
            $error = "Invalid email or password";
        }
    }
?>