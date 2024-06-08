
<?php
session_start();
include('config.php');

if (isset($_POST['cadastrar'])) {
    // Recuperar os valores dos campos usando o método POST e salvar nas variáveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $plano = $_POST['plano'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $forma_pagamento = $_POST['forma_pagamento'];
    $termo = isset($_POST['termo']) ? $_POST['termo'] : '';

    // Adicione a validação dos dados aqui (por exemplo, verificar se os campos obrigatórios estão preenchidos)

    try {
        // Conectar ao banco de dados
        $conn = new PDO("sqlsrv:Server=localhost;Database=projetoIntegrador", null, null);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Inserir dados na tabela do banco de dados usando parâmetros preparados
        $sql = "INSERT INTO dbo.assinantes (nome, email, senha, plano, cep, endereco, cidade, estado, forma_pagamento, concordou_termos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $plano, $cep, $endereco, $cidade, $estado, $forma_pagamento, $termo]);

        if ($stmt->rowCount() > 0) {
            $_SESSION['mensagem'] = "Registro realizado com sucesso.";
            header("Location: sucesso.php"); // Redirecionar para página de sucesso
            exit();
        } else {
            $_SESSION['mensagem'] = "Erro: Falha ao realizar o registro.";
            header("Location: erro.php"); // Redirecionar para página de erro
            exit();
        }
    } catch (PDOException $e) {
        // Registra detalhes do erro em um arquivo de log
        error_log($e->getMessage(), 3, "error.log");
        $_SESSION['mensagem'] = "Erro: Ocorreu um problema durante o registro. Tente novamente mais tarde.";
        header("Location: erro.php"); // Redirecionar para página de erro
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Estácio</title>
    <link rel="icon" type="image/png" href="img/icon-estacio.png">
    <link rel="stylesheet" href="css/styleCadastro.css">
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
    <section class="container-form">
        <h1>Cadastre-se</h1>
        <form action="cadastrar_assinante.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="E-mail" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Senha" required>

            <label for="plano">Selecione o Plano</label>
            <select id="plano" name="plano" required>
                <option value="" disabled selected>Selecione o Plano</option>
                <option value="1">Assinatura Básica - R$ 19,90</option>
                <option value="2">Assinatura Premium - R$ 29,90</option>
                <option value="3">Assinatura Família - R$ 39,90</option>
            </select>


            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" placeholder="CEP" required>

            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" placeholder="Endereço" required>

            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" placeholder="Cidade" required>

            <label for="estado">Estado</label>
            <input type="text" id="estado" name="estado" placeholder="Estado" required>

            <label for="forma_pagamento">Forma de Pagamento</label>
            <select id="forma_pagamento" name="forma_pagamento" required>
                <option value="" disabled selected>Forma de Pagamento</option>
                <option value="cartao">Cartão de Crédito</option>
                <option value="boleto">Boleto Bancário</option>
                <option value="pix">PIX</option>
            </select>

            <div class="termo">
                <input type="checkbox" id="termo" name="termo" required>
                <label for="termo">Li e concordo com os <a href="Termos.php">Termos de Serviço</a></label>
            </div>

            <input type="submit" value="Cadastrar">
        </form>
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
    // Função para preencher automaticamente os campos de endereço pelo CEP
    function preencherEnderecoPorCEP(cep) {
        // Substitua "SEU_TOKEN" pelo token da API ViaCEP
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                document.querySelector('input[name="endereco"]').value = data.logradouro;
                document.querySelector('input[name="cidade"]').value = data.localidade;
                document.querySelector('input[name="estado"]').value = data.uf;
                document.querySelector('input[name="bairro"]').value = data.bairro;
            })
            .catch(error => console.error('Erro ao preencher endereço:', error));
    }

    // Evento de mudança no campo de CEP para acionar o preenchimento automático
    document.querySelector('input[name="cep"]').addEventListener('change', function(event) {
        const cep = event.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        if (cep.length === 8) { // Verifica se o CEP tem o tamanho correto
            preencherEnderecoPorCEP(cep);
        } else {
            console.error('CEP inválido');
        }
    });


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
