<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "loja_roupa";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Captura os dados do formulário
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';



// Verifica se as senhas coincidem
if ($password !== $confirm_password) {
    die("As senhas não coincidem.");
}

// Faz o hash da senha para segurança
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insere os dados na tabela
$sql = "INSERT INTO usuario (email, senha) VALUES ('$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    // Redireciona para a página de login após o cadastro bem-sucedido
    header("Location: welcome.php");
     // Redireciona para a página de login
    //exit(); // Garante que nenhum código adicional seja executado
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
