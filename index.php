<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Streaming - Estácio</title>
    <link rel="icon" type="image/png" href="img/icon-estacio.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <section class="container-banner">
        <div class="banner">
            <img src="img/banner-assinatura.png" alt="Banner">
        </div>
    </section>

    <section class="container-assinatura">
        <h1>Assinaturas</h1>
        <div class="container-assinatura-itens">
            <div class="container-assinatura-item">
                <h2>Assinatura Básica</h2>
                <p>Assista a todos os filmes e séries disponíveis no catálogo da Estácio Streaming.</p>
                <p class="preco">R$ 19,90</p>
                <a href="assinatura.php" class="botao-assinar">Assinar</a>
            </div>
            <div class="container-assinatura-item">
                <h2>Assinatura Premium</h2>
                <p>Assista a todos os filmes e séries disponíveis no catálogo da Estácio Streaming em qualidade 4K.</p>
                <p class="preco">R$ 29,90</p>
                <a href="assinatura.php" class="botao-assinar">Assinar</a>
            </div>
            <div class="container-assinatura-item">
                <h2>Assinatura Família</h2>
                <p>Assista a todos os filmes e séries disponíveis no catálogo da Estácio Streaming em até 4 dispositivos simultaneamente.</p>
                <p class="preco">R$ 39,90</p>
                <a href="assinatura.php" class="botao-assinar">Assinar</a>
            </div>
        </div>
    </section>

    <section class="container-novidades">
        <h1>Novidades</h1>
        <div class="novidades-itens">
            <div class="novidade-item">
                <img src="img/cards-banner.png" alt="Novidade 1">
                <p>Em breve você poderá assistir nossos filmes e séries de seu dispositivo móvel.</p>
            </div>
            <div class="novidade-item">
                <img src="img/cards-banner2.png" alt="Novidade 2">
                <p>Estamos disponibilizando nosso Streaming para seu desktop. Que maravilha, não? Baixe já.</p>
            </div>
        </div>
    </section>

    <section class="container-email">
        <h1>Receba novidades por e-mail</h1>
        <p>Assine nossa newsletter e receba as novidades da Estácio Streaming em primeira mão.</p>
        <div class="search-bar">
            <input type="email" placeholder="Seu e-mail aqui">
            <button type="submit">Enviar</button>
        </div>
    </section>
</main>

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
