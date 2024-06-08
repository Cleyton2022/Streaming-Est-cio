<?php
session_start();

$loginError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verifica se o usuário e a senha são válidos no banco de dados
        $query = "SELECT * FROM users WHERE username = ? LIMIT 1";
        $params = array($username);
        $result = $reposit->RunQuery($query, $params);

        if ($result->HasRows()) {
            $user = $result->Fetch();
            if (password_verify($password, $user['password'])) {
                // Login bem-sucedido, redireciona para a página principal
                $_SESSION['username'] = $username;
                header("Location: home.php");
                exit();
            } else {
                // Senha inválida, exibe uma mensagem de erro
                $loginError = "Senha inválida";
            }
        } else {
            // Usuário não encontrado, exibe uma mensagem de erro
            $loginError = "Usuário não encontrado";
        }
    } elseif (isset($_POST['register_submit'])) {
        // Processar o formulário de cadastro e salvar os dados no banco de dados
        $username = $_POST['reg_username'];
        $password = $_POST['reg_password'];

        // Criptografa a senha
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Salvar os dados no banco de dados

        // Exemplo de código para inserção no banco de dados
        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $params = array($username, $hashedPassword);
        $result = $reposit->RunQuery($query, $params);

        if ($result->Success()) {
            // Redirecionar para a página de login após o cadastro bem-sucedido
            $_SESSION['registration_success'] = "Cadastro realizado com sucesso. Faça o login para continuar.";
            header("Location: login.php");
            exit();
        } else {
            die("Erro ao cadastrar usuário");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming - Login</title>
    <link rel="icon" type="image/png" href="img/icon-estacio.png">
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
<header>
    <div class="container-menu">
        <div class="logo">
            <a href="index.php"><img src="img/estacio-logo.png" alt="Estácio Streaming"></a>
        </div>
        <div class="btn-linguagem">
            <img src="img/icon-traduzir.png" width="25" alt="Português">
            <div class="dropdown">
                <button class="dropbtn" aria-haspopup="true" aria-expanded="false">
                    <span id="selectedLanguage"><?php echo isset($_GET['lang']) ? $_GET['lang'] : 'Português'; ?></span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <div class="dropdown-content" aria-labelledby="dropbtn">
                    <a href="#" onclick="updateLanguage('Português')">Português</a>
                    <a href="#" onclick="updateLanguage('English')">English</a>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
<br><br><br>
    <div class="container">
        <h1>Login</h1>
        <p class="subtitle">Streaming - Estácio de Sá</p>

        <form method="POST" action="" class="login-form">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" placeholder="Seu nome de usuário" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Sua senha" required>
            </div>
            <button class="submit-btn" type="submit" name="login">Login</button>
            <p class="error-message"><?php echo $loginError; ?></p>
        </form>

        <p class="register-text">Não tem uma assinatura? <a class="register-link" href="assinatura.php">Assine Já</a></p>
    </div>
</main>
<br><br><br><br><br><br><br><br>
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
