<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <form action="php/authorization.php" method="POST">
            <h1>Вход</h1>
            <input type="text" placeholder="Логин" name="login">
            <input type="password" placeholder="пароль" name="password">
            <a href="reg.php">Регестрация</a>
            <input type="submit">
        </form>
    </div>
</body>
</html>