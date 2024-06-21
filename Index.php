<?php
    include 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Index.css">
    <link rel="shortcut icon" href="IMG/LOGO_img.png" type="image/x-icon">
    <title>Home - Evolution Fitness</title>
</head>
<body id="ini">
    
    <div class="nav" id="navbar">
        <div class="logo">
            <a href="#ini"><img src="IMG/LOGO_novo.png"></a>
        </div>
        <div class="menu" id="menubar">
            <a href="#sobre">Sobre Nós</a>
            <a href="#servicos">Serviços</a>
            <a href="#pacotes">Pacotes</a>
            <a href="#contactos">Contactos</a>
        </div>
        <a href="CriarConta.html" class="signup-button" id="inscrever">Inscreve-te Já</a>
        
        <div class="user">
            <img src="IMG/user-white.png" alt="">
            <ul class="menu-conta">
                <li><a href="redirect-conta.php">Conta</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </div> 
    </div>
    <div class="header">
        <div class="content">
            <h2>Força e Foco</h2>
            <h1 id="sobre">O Sonho da Conquista no Evolution Fitness</h1>
        </div>
    </div>

    <main>

        <div class="pos-sobre">
            <div class="container-sobre">
                <div class="content-sobre">
                    <h1>Evolution Fitness</h1>
                    <p>Na Evolution Fitness, estamos comprometidos em fornecer um ambiente acolhedor, motivador e inclusivo para ajudá-lo a atingir o seu melhor. Desde atletas de elite até iniciantes, nossa comunidade diversificada de membros encontra apoio e inspiração em nossa atmosfera energética.</p>
                    <p>Localizado convenientemente no coração de Entroncamento, Santarém, estamos estrategicamente posicionados para atender às necessidades de nossa comunidade local. Com instalações modernas e acessíveis, estamos comprometidos em tornar o fitness acessível a todos.</p>
                    <p>Na Evolution Fitness, nossa missão é capacitar indivíduos a se tornarem a melhor versão de si mesmos, tanto física quanto mentalmente. Acreditamos que o fitness é mais do que apenas exercício; é um estilo de vida que pode transformar vidas. Nossa equipe dedicada está aqui para apoiá-lo em cada passo do caminho, enquanto você embarca em sua jornada de transformação.</p>
                    <p>Junte-se a nós na Evolution Fitness e descubra o que é possível quando você se compromete com o seu próprio crescimento e bem-estar. Estamos ansiosos para recebê-lo em nossa comunidade e ajudá-lo a alcançar suas metas de fitness. Juntos, vamos evoluir para o melhor que podemos ser.</p>
                </div>
                <div class="image-sobre"></div>
            </div>
        </div>


        <div class="servicos">
            <div class="container-servicos">
                <div class="image-section">
                    <img src="IMG/aula_grupo.jpg" alt="Fitness Training">
                </div>
                <div class="text-section">
                    <h1>AULAS DE GRUPO</h1>
                    <p>O EVOLUTION FITNESS são verdadeiros clubes de cidade, preparados para te receber a qualquer hora do dia e da semana com uma enorme diversidade de aulas presenciais e virtuais. São clubes modernos e apetrechados com a mais recente tecnologia para te ajudar a monitorizar o teu treino e a alcançar os teus objetivos.</p>
                </div>
            </div>

            <div class="container-servicos">
                <div class="text-section">
                    <h1>PERSONAL TRAINER</h1>
                    <p>O EVOLUTION FITNESS são verdadeiros clubes de cidade, preparados para te receber a qualquer hora do dia e da semana com uma enorme diversidade de aulas presenciais e virtuais. São clubes modernos e apetrechados com a mais recente tecnologia para te ajudar a monitorizar o teu treino e a alcançar os teus objetivos.</p>
                </div>
                <div class="image-section">
                    <img src="IMG/acompanhamento.jpeg" alt="Fitness Training">
                </div>
            </div>

            <div class="container-servicos">
                <div class="image-section">
                    <img src="IMG/nutricional.jpg" alt="Fitness Training">
                </div>
                <div class="text-section">
                    <h1>ACOMPANHAMENTO NUTRICIONAL</h1>
                    <p>O EVOLUTION FITNESS são verdadeiros clubes de cidade, preparados para te receber a qualquer hora do dia e da semana com uma enorme diversidade de aulas presenciais e virtuais. São clubes modernos e apetrechados com a mais recente tecnologia para te ajudar a monitorizar o teu treino e a alcançar os teus objetivos.</p>
                </div>
            </div>

            <div class="container-servicos">
                <div class="text-section">
                    <h1>AVALIAÇÃO FÍSICA</h1>
                    <p>O EVOLUTION FITNESS são verdadeiros clubes de cidade, preparados para te receber a qualquer hora do dia e da semana com uma enorme diversidade de aulas presenciais e virtuais. São clubes modernos e apetrechados com a mais recente tecnologia para te ajudar a monitorizar o teu treino e a alcançar os teus objetivos.</p>
                </div>
                <div class="image-section">
                    <img src="IMG/avaliacao_fisica.jpg" alt="Fitness Training">
                </div>
            </div>
        </div>
        
        <div class="fundo">
            <div class="container-card">
                <div class="card">
                    <div class="content-card">
                        <img src="IMG/" alt="">
                        <h3>XS</h3>
                        <p>24.99€ MÊS</p>
                        <p>Horário 07H-17H</p>
                        <p>Contrato 12 Meses</p>
                        <div>
                            <button class="pacotes_btn" id="btn-xs" onclick="selecionarPacote('XS', 24.99, '1')">Comprar</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="content-card">
                        <img src="IMG/" alt="">
                        <h3>L</h3>
                        <p>34.99€ MÊS</p>
                        <p>Livre Transito</p>
                        <p>Contrato 12 Meses</p>
                        <div>
                            <button class="pacotes_btn" id="btn-l" onclick="selecionarPacote('L', 34.99, '2')">Comprar</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="content-card">
                        <img src="IMG/" alt="">
                        <h3>S+</h3>
                        <p>49.99€ MÊS</p>
                        <p>Livre Transito - 15 Duches</p>
                        <p>Contrato 12 Meses</p>
                        <div>
                            <button class="pacotes_btn" id="btn-splus" onclick="selecionarPacote('S+', 49.99, '3')">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer id="contactos">
        <div class="main-1">
            <div class="select-1">
                <div class="titulo">
                    <h2>Apoio ao Cliente</h2>
                </div>
                <div class="content-footer">
                    <span>Portugal</span><i class="fa-solid fa-phone"></i> <a href="">960 000 000</a> <a href="">910 000 000</a>
                </div>
            </div>
            <div class="select-2">
                <div class="titulo">
                    <h2>Siga-nos</h2>
                </div>
                <div class="content_2">
                    <a href=""><i style="font-size: 25px;" class="fa-brands fa-facebook"></i></a>
                    <a href=""><i style="font-size: 25px;" class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="select-3">
                <div class="titulo">
                    <h2>Delegações</h2>
                </div>
                <div class="content-footer">
                    <span>Entrocamento</span>
                    <p>Rua Carlos Ayala, R. Dr. Carlos Aya Vieira da Rocha<br>
                    2330-105 Entroncamento</p>
                </div>
            </div>
        </div>
        <div class="main-2">
            <div class="select-4">
                <div class="titulo">
                    <h2>Horário de funcionamento</h2>
                </div>
                <div class="content-footer">
                    <ul>
                        <li>Domingo : 09:00 - 20:00</li>
                        <li>Segunda : 07:00 - 23:00</li>
                        <li>Terça : 07:00 - 23:00</li>
                        <li>Quarta : 07:00 - 23:00</li>
                        <li>Quinta : 07:00 - 23:00</li>
                        <li>Sexta : 07:00 - 23:00</li>
                        <li>Sábado : 09:00 - 20:00</li>
                    </ul>
                </div>
            </div>
            <div class="select-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2679.839024001531!2d-8.47895931649163!3d39.46894420213204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd186286fd83c265%3A0xfb6b433ecb71a203!2sEscola%20Secund%C3%A1ria%20do%20Entroncamento!5e1!3m2!1spt-PT!2spt!4v1717350914175!5m2!1spt-PT!2spt" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="select-6">
                <div class="content-final">
                    <a href="#ini"><img src="IMG/LOGO_novo.png" alt=""></a><span>© 2024 - Todos os direitos reservados.</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="JAVA/Index.js"></script>
    <script src="https://kit.fontawesome.com/c97cbab7f2.js" crossorigin="anonymous"></script>
    <script src="java/vanilla-tilt.js"></script>
    <script>
        	VanillaTilt.init(document.querySelectorAll(".card"),{
                max: 25,
                speed: 400,
            }
            );
    </script>

    <script>
        function selecionarPacote(nome, preco, id) {
            localStorage.setItem('pacoteNome', nome);
            localStorage.setItem('pacotePreco', preco);
            localStorage.setItem('pacoteID', id);
            window.location.href = 'redirect-pacotes.php';
        }
    </script>
</body>
</html>