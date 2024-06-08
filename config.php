<?php
define("SERVIDOR", "localhost"); // Servidor do Banco de Dados
define("USUARIO", ""); // Usuário do Banco de Dados
define("SENHA", ""); // Senha do Banco de Dados
define("BANCO", "ESTACIOCINE"); // Nome do Banco de Dados
define("PORTA", ""); // Porta do Banco de Dados

// Conexão com o banco de dados
$conn = new mysqli(SERVIDOR, USUARIO, SENHA, BANCO, PORTA);

// Verificar se ocorreu um erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Definir o conjunto de caracteres para a conexão
$conn->set_charset("utf8");

// Outras configurações e operações no banco de dados...

// Fechar a conexão com o banco de dados no final do script
$conn->close();
?>
