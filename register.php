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
    header("Location: login.php"); // Redireciona para a página de login
    //exit(); // Garante que nenhum código adicional seja executado
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            font-family: 'Courier New', Courier, monospace;
            background-color: #f78a8a00;
        }
        .registration-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 30vh;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Cadastro</h2>
        <form action="submit_register.php" method="POST"> <!-- Ação aponta para este script -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
            
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" placeholder="Senha" required>
            <button type="button" onclick="togglePassword('password', 'togglePasswordBtn1')" id="togglePasswordBtn1">Mostrar</button><br> 
            <label for="confirm_password">Confirmar Senha:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar Senha" required>
            <button type="button" onclick="togglePassword('confirm_password', 'togglePasswordBtn2')" id="togglePasswordBtn2">Mostrar</button><br> 

            <input type="submit" value="cadastrar"     >


        </form>
        <p>Já tem uma conta? <a href="login.php">Faça login aqui</a></p>
    </div>
   <script>
        function togglePassword(inputId, buttonId) {  
            const senhaInput = document.getElementById(inputId);
            const toggleButton = document.getElementById(buttonId);
            const type = senhaInput.type === 'password' ? 'text' : 'password';
            senhaInput.type = type;
            toggleButton.textContent = type === 'password' ? 'Mostrar' : 'Ocultar';
        }
    </script>
</body>
</html>
