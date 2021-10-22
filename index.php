<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <title>Admin</title>
</head>
<body>
    <h1>Home</h1>
    <form action="autentica-login.php" method="POST">
        <label>Usuário:</label>
        <input type="text" name="user" id="txtNome">
        <label>Senha:</label>
        <input type="password" name="pw" id="pw">
        <input type="submit" value="Login">
    </form>
    <?php
    if (isset($_COOKIE['cred-erro'])) {
        echo $_COOKIE['cred-erro'];
    }
    ?>
</body>
</html>