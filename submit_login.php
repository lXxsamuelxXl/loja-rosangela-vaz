<?php
session_start(); // Inicia a sessão

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

// Captura os dados do formulário de login
$email = $_POST['email'];
$senha = $_POST['senha'];


// Verifica se o usuário existe
$sql = "SELECT senha FROM usuario WHERE email='$email'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // O usuário foi encontrado
    $row = $result->fetch_assoc();
    echo $senha ;
    echo "    ";
    echo $row['senha']; 

    
    // Verifica se a senha está correta password_hash($password, PASSWORD_DEFAULT);
    if (password_verify($senha, $row['senha'])) {
        // Senha correta, loga o usuário
        $_SESSION['email'] = $email; // Armazena o email na sessão
        header("Location: welcome.php"); // Redireciona para a página de boas-vindas
        
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

$conn->close();
?>
