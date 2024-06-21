<?php
    include_once('config.php');
    session_start();

    function isLoggedIn() {
        return isset($_SESSION['email']);
    }

    function login($email, $password) {
        global $conn;
    
        $stmt = $conn->prepare("SELECT email, pass FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($email, $stored_password);
            $stmt->fetch();
            if ($password === $stored_password) {  // Comparação simples de senha
                $_SESSION['email'] = $email;
                echo "<script>alert('Bem-Vindo ao Evolution Fitness.'); window.location.href = 'Index.php';</script>";
                exit;
            } else {
                echo "<script>alert('Dados incorretos.'); window.location.href = 'Login.html';</script>";
                exit;
            }
        } else {
            echo "<script>alert('Dados incorretos.'); window.location.href = 'Login.html';</script>";
            exit;
        }
        return false;
    }
    

    function register($nome, $email, $password) {
        global $conn;
    
        // Verifica se algum dos campos está vazio
        if (empty($nome) || empty($email) || empty($password)) {
            echo "<script>alert('Introduze os dados nos campos respetivos.'); window.location.href = 'CriarConta.html';</script>";
            return false;
        }

        $stmt = $conn->prepare("INSERT INTO users (nome, email, pass, id_pacotes) VALUES (?, ?, ?, 0)");
        $stmt->bind_param("sss", $nome, $email, $password);
        return $stmt->execute();
    }
    
    
    function logout() {
        session_destroy();
    }
?>
