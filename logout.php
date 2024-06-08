<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está autenticado antes de realizar o logout
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Limpa todas as variáveis de sessão
session_unset();

// Destrói a sessão
session_destroy();

// Evita o armazenamento em cache da página de logout
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Redireciona o usuário para a página de login com uma mensagem de logout
header('Location: login.php');
exit();
?>
