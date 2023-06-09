<!-- login.php -->

<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar as credenciais do usuário
    $username = $_POST["NOME_USER_ADM"];
    $password = $_POST["Senha_LOGIN_ADM"];

    // Configuração da conexão PDO com o banco de dados
    $dsn = "mysql:host=localhost;db_brutaltype";
    $dbUsername = "username";
    $dbPassword = "password";

    try {
        $conn = new PDO($dsn, $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta para verificar se as credenciais são válidas
        $query = "SELECT * FROM usuarios WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Redirecionar para a página principal após o login bem-sucedido
            header("Location: index.php");
            exit();
        } else {
            // Exibir mensagem de erro se as credenciais forem inválidas
            $error = "Credenciais inválidas. Por favor, tente novamente.";
        }
    } catch (PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Seu Site de Roupas</title>
    <!-- Inclua os arquivos de estilo relevantes -->
    <link rel="stylesheet" type="text/css" href="css/Estilo.css">
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
