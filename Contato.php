<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming - Contato</title>
    <link rel="icon" type="image/png" href="img/icon-estacio.png">
    <link rel="stylesheet" href="css/styleContato.css">
</head>
<body>
    <header>
        <div class="container-menu">
            <div class="logo">
                <a href="index.php"><img src="img/estacio-logo.png" alt="Estácio Streaming"></a>
            </div>

            <nav class="menu">
                <ul>
                    <li><a href="Login.php">Entrar</a></li>
                    <li><a href="Contato.php">Contato</a></li>
                </ul>
            </nav>

            <div class="btn-linguagem">
                <img src="img/icon-traduzir.png" width="25" alt="Português">
                <div class="dropdown">
                    <button class="dropbtn">
                        <span id="selectedLanguage">Português</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="#" onclick="updateLanguage('Português')">Português</a>
                    <a href="#" onclick="updateLanguage('English')">English</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="container-form">
            <h1>Contato</h1>
            <p>Entre em contato conosco preenchendo o formulário abaixo.</p>
            <form action="enviar_contato.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" rows="5" placeholder="Sua mensagem" required></textarea>
                </div>

                <button class="submit-btn" type="submit">Enviar</button>
            </form>
        </section>
    </main>
<br>
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="Sobre.php">Sobre</a>
                <a href="Privacidade.php">Privacidade</a>
                <a href="Termos.php">Termos de Serviço</a>
            </div>
            <div class="footer-social">
                <a href="https://facebook.com/estacio"><img src="img/facebook.png" alt="Facebook"></a>
                <a href="https://twitter.com/estacio"><img src="img/x-logo.png" alt="Twitter"></a>
                <a href="https://instagram.com/estacio"><img src="img/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
    <script>
    function updateLanguage(language) {
        window.location.href = window.location.pathname + '?lang=' + language;
    }

    // Executar a atualização do idioma ao carregar a página
    document.addEventListener('DOMContentLoaded', function() {
        var selectedLanguage = '<?php echo isset($_GET['lang']) ? $_GET['lang'] : 'Português'; ?>';
        document.getElementById('selectedLanguage').innerText = selectedLanguage;
    });
</script>
</body>
</html>
