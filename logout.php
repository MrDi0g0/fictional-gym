<?php
    // logout.php
    include 'auth.php';
    
    // Verifica se o usuário está logado
    if(isLoggedIn()) {
        logout();
        echo "<script>alert('Até a próxima'); window.location.href = 'Index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Não existe conta iniciada'); window.location.href = 'Index.php';</script>";
        exit;
    }
?>
