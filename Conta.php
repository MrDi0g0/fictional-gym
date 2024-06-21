<?php
    //---------------- INFORMAÇÕES CONTA ----------------//
    include 'auth.php';

    // Obtém o email do usuário logado
    $email = $_SESSION['email'];

    // Prepara e executa a consulta SQL
    $sql = $conn->prepare("SELECT users.nome, users.email, users.pass, users.datanasc, users.nif, users.telemovel, users.morada, users.cpostal, users.localidade, pacotes.nomeP, pacotes.descricao, pacotes.preco FROM users, pacotes WHERE users.id_pacotes = pacotes.id_pacotes AND users.email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();

    // Busca os dados do usuário
    $user = $result->fetch_assoc();

    // Função para verificar se o campo está vazio e retornar uma mensagem padrão
    function display_info($info, $type = 'text') {
        if ($type == 'date' && ($info == '0000-00-00' || empty($info))) 
        {
            return 'Sem Infomação';
        }
        return empty($info) ? 'Sem Infomação' : htmlspecialchars($info);
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMG/LOGO_img.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/Conta.css">
    <title>Conta - Evolution Fitness</title>
</head>
<body>

    <div class="text-conta">
        <h3>Informações Pessoais</h3>
    </div>
        <div class="account-info">
            <div class="info-row">
                <div class="info-label">Nome:</div>
                <div class="info-value"><?php echo display_info($user['nome']); ?></div>
            </div>
            <div class="info-row">
                <div class="info-label">Email:</div>
                <div class="info-value"><?php echo display_info($user['email']); ?></div>
            </div>
            <div class="info-row">
                <div class="info-label">Password:</div>
                <div class="info-value">
                    <span id="pass-field">********</span>
                    <span class="pass-toggle-icon" onclick="togglePassword()"><i class="far fa-eye-slash"></i></span>
                </div>
            </div>
            <div class="info-row">
                <div class="info-label">Telemóvel:</div>
                <div class="info-value"><?php echo display_info($user['telemovel']); ?></div>
            </div>
            <div class="info-row">
                <div class="info-label">Data de Nascimento:</div>
                <div class="info-value"><?php echo display_info($user['datanasc'], 'date'); ?></div>
            </div>
            <div class="info-row">
                <div class="info-label">NIF:</div>
                <div class="info-value"><?php echo display_info($user['nif']); ?></div>
            </div>
            <div class="info-row">
                <div class="info-label">Morada:</div>
                <div class="info-value"><?php echo display_info($user['morada']); ?></div>
            </div>
            <div class="info-row">
                <div class="info-label">Código Postal:</div>
                <div class="info-value"><?php echo display_info($user['cpostal']); ?></div>
            </div>
            <div class="info-row">
                <div class="info-label">Localidade:</div>
                <div class="info-value"><?php echo display_info($user['localidade']); ?></div>
            </div>
            <div class="info-row">
                <div class="info-label">Pacote:</div>
                <div class="info-value">
                    <?php 
                        if (!empty($user['nomeP'])) {
                            echo display_info($user['nomeP']);
                        } else {
                            echo "Adquira um pacote";
                        }
                    ?>
                </div>
            </div>
            <div class="info-row">
                <div class="info-label">Descrição do Pacote:</div>
                <div class="info-value">
                    <?php 
                        if (!empty($user['descricao'])) {
                            echo display_info($user['descricao']);
                        } else {
                            echo "Adquira um pacote";
                        }
                    ?>
                </div>
            </div>
            <div class="info-row">
                <div class="info-label">Preço do Pacote:</div>
                <div class="info-value">
                    <?php 
                        if (!empty($user['preco'])) {
                            echo display_info($user['preco']);
                        } else {
                            echo "Adquira um pacote";
                        }
                    ?>
                </div>
            </div>
        </div>
    <div class="button-container">
        <a href="Index.php" class="back-button">Voltar ao Início</a>
    </div>

    <script src="https://kit.fontawesome.com/c97cbab7f2.js" crossorigin="anonymous"></script>

    <script>
        function togglePassword() {
            var passField = document.getElementById("pass-field");
            var passToggleIcon = document.querySelector(".pass-toggle-icon i");

            if (passField.classList.contains("show")) {
                passField.textContent = passField.getAttribute("data-password");
                passField.classList.remove("show");
                passToggleIcon.classList.remove("fa-eye");
                passToggleIcon.classList.add("fa-eye-slash");
            } else {
                passField.setAttribute("data-password", passField.textContent);
                passField.textContent = "<?php echo display_info($user['pass']); ?>";
                passField.classList.add("show");
                passToggleIcon.classList.remove("fa-eye-slash");
                passToggleIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
