<!-- register.php -->

<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $username = $_POST["NOME_USER_ADM"];
    $password = $_POST["Senha_LOGIN_ADM"];
    $email = $_POST["EMAIL_ADM"];
    
    // Configuração da conexão PDO com o banco de dados
    $conn = "mysql:host=localhost; port=3306; dbname=$Bco"; $usuario; $senha;
    $dbUsername = "root";
    $dbPassword = "";
    $Bco = "db_brutaltype";
    try {
        $conn = new PDO($conn, $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Verificar se o nome de usuário já está em uso
        $query = "SELECT * FROM usuarios WHERE username = :username";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $error = "O nome de usuário já está em uso. Por favor, escolha outro.";
        } else {
            // Inserir os dados do novo usuário no banco de dados
            $query = "INSERT INTO usuarios (username, password, email) VALUES (:username, :password, :email)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":email", $email);
            $stmt->execute();

            // Redirecionar para a página de login após o cadastro bem-sucedido
            header("Location: login.php");
            exit();
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
    <title>Cadastro - Seu Site de Roupas</title>
    <!-- Inclua os arquivos de estilo relevantes -->
    <link rel="stylesheet" type="text/css" href="css/Estilo.css">
</head>
<body>
    <h1>Cadastro</h1>
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
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
