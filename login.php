<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            font-family: 'Courier New', Courier, monospace;
            background-color: #f78a8a00;
        }
        .login-container {
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
    <div class="login-container">
        <h2><b>Login</b></h2>     
        <form action="submit_login.php" method="POST">   
            <label for="email">Email:</label>          
            <input type="email" id="email" name="email" placeholder="Email" required>          
            <label for="senha">Senha:</label>            
            <input type="password" id="senha" name="senha" placeholder="Senha" required>         
            <input type="submit" value="Entrar">
        </form>
        <p>Não tem uma conta? <a href="register.php">Cadastre-se aqui</a></p>
    </div>
</body>
</html>
