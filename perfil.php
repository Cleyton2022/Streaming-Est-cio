<?php
$isLogged = true; // Exemplo de variável para verificar se o usuário está logado
$userName = "Cleyton Santos"; // Exemplo de nome do usuário

// Verificar se a opção "Sair da Conta" foi acionada
if (isset($_GET['logout'])) {
    $isLogged = false;
    // Redirecionar para a página inicial
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Configurações - Estácio Streaming</title>
    <link rel="icon" type="image/png" href="img/icon-estacio.png">
    <link rel="stylesheet" href="css/stylePerfil.css">
</head>
<body>
    <header>
        <div class="container">
            <a href="/index.php">
                <img class="logo" src="img/estacio-logo.png" alt="Logo Estácio Streaming">
            </a>
            <p>Seja bem-vindo(a), <?php echo htmlspecialchars($userName); ?>!</p>
        </div>
    </header>

    <main class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="#perfil" class="active">Perfil</a></li>
                <li><a href="#seguranca">Segurança</a></li>
                <li><a href="#preferencias">Preferências</a></li>
                <li><a href="#notificacoes">Notificações</a></li>
                <li><a href="#privacidade">Privacidade</a></li>
                <li><a href="#pagamentos">Pagamentos</a></li>
                <li><a href="#ajuda">Ajuda</a></li>
                <li><a href="?logout=true">Sair da Conta</a></li>
            </ul>
        </nav>

        <div class="content">
            <section id="perfil">
                <h1>Perfil</h1>
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="profile-picture">Foto de Perfil:</label>
                            <input type="file" id="profile-picture" name="profile-picture" accept="image/*">
                            <img id="profile-picture-preview" style="display: none;">
                        </div>
                        <div class="form-group">
                            <button type="submit">Salvar</button>
                            <p class="confirmation-message" style="display: none;">Dados salvos com sucesso!</p>
                        </div>
                    </form>
                </div>
            </section>

            <section id="seguranca">
                <h1>Segurança</h1>
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="current-password">Senha atual:</label>
                            <input type="password" id="current-password" name="current-password">
                        </div>
                        <div class="form-group">
                            <label for="new-password">Nova senha:</label>
                            <input type="password" id="new-password" name="new-password">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirmar nova senha:</label>
                            <input type="password" id="confirm-password" name="confirm-password">
                        </div>
                        <div class="form-group">
                            <button type="submit">Salvar</button>
                            <p class="confirmation-message" style="display: none;">Dados salvos com sucesso!</p>
                        </div>
                    </form>
                </div>
            </section>

            <section id="preferencias">
                <h1>Preferências</h1>
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="language">Idioma:</label>
                            <select id="language" name="language">
                                <option value="pt">Português</option>
                                <option value="en">English</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit">Salvar</button>
                            <p class="confirmation-message" style="display: none;">Dados salvos com sucesso!</p>
                        </div>
                    </form>
                </div>
            </section>

            <section id="notificacoes">
                <h1>Notificações</h1>
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="email-notifications">Notificações por email:</label>
                            <select id="email-notifications" name="email-notifications">
                                <option value="1">Ativadas</option>
                                <option value="0">Desativadas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit">Salvar</button>
                            <p class="confirmation-message" style="display: none;">Dados salvos com sucesso!</p>
                        </div>
                    </form>
                </div>
            </section>

            <section id="privacidade">
                <h1>Privacidade</h1>
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="privacy-level">Nível de privacidade:</label>
                            <select id="privacy-level" name="privacy-level">
                                <option value="public">Público</option>
                                <option value="private">Privado</option>
                                <option value="friends">Amigos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit">Salvar</button>
                            <p class="confirmation-message" style="display: none;">Dados salvos com sucesso!</p>
                        </div>
                    </form>
                </div>
            </section>

            <section id="pagamentos">
                <h1>Pagamentos</h1>
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="payment-method">Método de pagamento:</label>
                            <select id="payment-method" name="payment-method">
                                <option value="credit-card">Cartão de crédito</option>
                                <option value="debit-card">Cartão de débito</option>
                                <option value="paypal">PayPal</option>
                                <option value="pix">PIX</option>
                            </select>
                        </div>
                        <div id="qr-code-container" class="form-group">
                            <!-- Gerar QR Code aqui -->
                        </div>
                        <div class="form-group">
                            <button type="submit">Salvar</button>
                            <p class="confirmation-message" style="display: none;">Dados salvos com sucesso!</p>
                        </div>
                    </form>
                </div>
            </section>

            <section id="ajuda">
                <h1>Ajuda</h1>
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="message">Mensagem:</label>
                            <textarea id="message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">Enviar</button>
                            <p class="confirmation-message" style="display: none;">Mensagem enviada com sucesso!</p>
                        </div>
                    </form>
                </div>
            </section>
        </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Pré-visualização da imagem de perfil
            const profilePictureInput = document.getElementById('profile-picture');
            const profilePicturePreview = document.getElementById('profile-picture-preview');

            profilePictureInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profilePicturePreview.src = e.target.result;
                        profilePicturePreview.style.display = 'block';
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Manipulação de seleção de método de pagamento e QR Code
            const paymentMethodSelect = document.getElementById('payment-method');
            const qrCodeContainer = document.getElementById('qr-code-container');

            paymentMethodSelect.addEventListener('change', function() {
                if (paymentMethodSelect.value === 'pix') {
                    qrCodeContainer.innerHTML = '<img src="img/qrcode-placeholder.png" alt="QR Code do PIX">';
                } else {
                    qrCodeContainer.innerHTML = '';
                }
            });

            // Exibir mensagem de confirmação
            const forms = document.querySelectorAll('.form-container form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const confirmationMessage = form.querySelector('.confirmation-message');
                    confirmationMessage.style.display = 'block';
                });
            });

            // Mudar o seletor ativo conforme a seção
            const sidebarLinks = document.querySelectorAll('.sidebar a');
            const sections = document.querySelectorAll('.content section');

            window.addEventListener('hashchange', function() {
                const currentHash = window.location.hash;
                sidebarLinks.forEach(link => {
                    if (link.getAttribute('href') === currentHash) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });

                sections.forEach(section => {
                    if ('#' + section.id === currentHash) {
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                });
            });

            // Inicialização para mostrar a seção correta ao carregar a página
            if (window.location.hash) {
                const currentHash = window.location.hash;
                sidebarLinks.forEach(link => {
                    if (link.getAttribute('href') === currentHash) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });

                sections.forEach(section => {
                    if ('#' + section.id === currentHash) {
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                });
            } else {
                document.getElementById('perfil').style.display = 'block';
            }
        });
    </script>
</body>
</html>
