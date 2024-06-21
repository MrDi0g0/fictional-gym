<?php
    include 'auth.php';

    $email = $_SESSION['email'];

    if(isset($_POST['finalizeButton'])) 
    {
        $datanasc = $_POST['datanasc'];
        $telemovel = $_POST['telemovel'];
        $nif = $_POST['nif'];
        $morada = $_POST['morada'];
        $cpostal = $_POST['cpostal'];
        $localidade = $_POST['localidade'];
        $idPacote = $_POST['idPacote'];
        

        $sql = $conn->prepare("UPDATE `users` SET `datanasc`=?, `nif`=?, `telemovel`=?, `morada`=?, `cpostal`=?, `localidade`=?, `id_pacotes`=? WHERE `email` = ?");
        $sql->bind_param("ssssssss", $datanasc, $nif, $telemovel, $morada, $cpostal, $localidade, $idPacote ,$email);

        if ($sql->execute()) {
            echo "<script>window.location.href = 'Confirm.html';</script>";
            exit();
        } else {
            echo "<script>alert('Ocorreu um erro a guardar as suas informações, tente novamente'); window.location.href = 'Pacotes.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/pacotes.css">
    <link rel="shortcut icon" href="IMG/LOGO_img.png" type="image/x-icon">
    <title>Compra - Evolution Fitness</title>
</head>
<body>

    <div class="container">
        <form action="" method="post" class="registration-form" id="registrationForm">
            <div class="container-input">
                <div class="form-group">
                    <label for="datanasc">DATA DE NASCIMENTO *</label>
                    <input type="text" id="datanasc" name="datanasc" placeholder="AAAA/MM/DD" required>
                </div>

                <div class="form-group">
                    <label for="telemovel">TELEMÓVEL *</label>
                    <input type="tel" id="telemovel" name="telemovel" required>
                </div>

                <div class="form-group">
                    <label for="nif">NIF *</label>
                    <input type="text" id="nif" name="nif" required>
                </div>

                <div class="form-group">
                    <label for="morada">MORADA *</label>
                    <input type="text" id="morada" name="morada" required>
                </div>

                <div class="form-group">
                    <label for="cpostal">CÓDIGO POSTAL *</label>
                    <input type="text" id="cpostal" name="cpostal" required>
                </div>

                <div class="form-group">
                    <label for="localidade">LOCALIDADE *</label>
                    <input type="text" id="localidade" name="localidade" required>
                </div>
                <input type="hidden" id="idPacote" name="idPacote">
                <div class="error-message" id="errorMessage">Por favor, preencha todos os campos obrigatórios corretamente.</div>
            </div>

            <div class="summary">
                <h2>RESUMO</h2>
                <h3>COMPRA ONLINE</h3>
                <div class="summary-item">
                    <span>PLANO</span>
                    <span>PREÇO</span>
                </div>
                <div class="summary-item">
                <span id="pacote-nome"></span>
                <span id="pacote-preco"></span>
                </div>
                <div class="summary-item">
                    <span>IVA</span>
                    <span>23%</span>
                </div>
                <div class="total">
                    <span>TOTAL</span>
                    <span id="total"></span>
                </div>
                <div class="finalize-button-container">
                    <button type="submit" name="finalizeButton" id="finalizeButton" class="finalize-button">Finalizar Compra</button>
                </div>
            </div>
        </form>
    </div>
    <div class="button-container">
        <a href="Index.php" class="back-button">Voltar ao Início</a>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const pacoteNome = localStorage.getItem('pacoteNome');
        const pacotePreco = localStorage.getItem('pacotePreco');
        const pacoteID = localStorage.getItem('pacoteID');

        if (pacoteNome && pacotePreco && pacoteID) {
            document.getElementById('pacote-nome').textContent = pacoteNome;
            document.getElementById('pacote-preco').textContent = parseFloat(pacotePreco).toFixed(2) + '€';
            document.getElementById('idPacote').value = pacoteID;
            // Atualiza o total se necessário
            const totalElement = document.getElementById('total');
            const iva = parseFloat(pacotePreco) * 0.23;
            const total = parseFloat(pacotePreco) + iva;

            totalElement.textContent = total.toFixed(2) + '€';
        }
    });
</script>

<script>
    document.getElementById('finalizeButton').addEventListener('click', function(event) {
        var form = document.getElementById('registrationForm');
        var isValid = form.checkValidity();
        
        if (!isValid) {
            event.preventDefault(); // Evita o envio do formulário
            document.getElementById('errorMessage').style.display = 'block';
        }
    });
</script>

<script>
    document.getElementById('finalizeButton').addEventListener('click', function(event) {
        var form = document.getElementById('registrationForm');
        var isValid = form.checkValidity();
        
        if (isValid) {
            var datanascInput = document.getElementById('datanasc');
            var telemovelInput = document.getElementById('telemovel');
            var nifInput = document.getElementById('nif');
            var cpostalInput = document.getElementById('cpostal');
            
            // Verifica se a data de nascimento está no formato AAAA/MM/DD
            var datanascPattern = /^\d{4}\/\d{2}\/\d{2}$/;
            if (!datanascPattern.test(datanascInput.value)) {
                alert("Por favor, insira a data de nascimento no formato AAAA/MM/DD.");
                event.preventDefault(); // Evita o envio do formulário
                return;
            }
            
            // Verifica se o telemóvel contém apenas números e tem exatamente 9 dígitos
            var telemovelPattern = /^\d{9}$/;
            if (!telemovelPattern.test(telemovelInput.value)) {
                alert("Por favor, insira um número de telemóvel válido (apenas 9 dígitos).");
                event.preventDefault(); // Evita o envio do formulário
                return;
            }
            
            // Verifica se o NIF contém apenas números e tem exatamente 9 dígitos
            var nifPattern = /^\d{9}$/;
            if (!nifPattern.test(nifInput.value)) {
                alert("Por favor, insira um NIF válido (apenas 9 dígitos).");
                event.preventDefault(); // Evita o envio do formulário
                return;
            }
            
            // Verifica se o código postal está no formato XXXX-XXX
            var cpostalPattern = /^\d{4}-\d{3}$/;
            if (!cpostalPattern.test(cpostalInput.value)) {
                alert("Por favor, insira o código postal no formato XXXX-XXX.");
                event.preventDefault(); // Evita o envio do formulário
                return;
            }
        } else {
            event.preventDefault(); // Evita o envio do formulário
            document.getElementById('errorMessage').style.display = 'block';
        }
    });
</script>

    
</body>
</html>
