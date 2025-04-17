<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <div class="form">
        <form action="php/registration.php" method="POST">
            <h1>Регистрация</h1>
            <input type="text" placeholder="Логин" name="login" required>
            <input type="text" placeholder="ФИО" name="fio" required>
            <input type="email" placeholder="Почта" name="email" required>
            <input type="password" placeholder="Пароль" name="password" required>
            <input type="password" placeholder="Повтор пароля" name="repPassword" required>
            <? if (isset($_GET['message'])): ?>
            <p><?=$_GET['message']?></p>
            <? endif; ?>
            <input type="tel" placeholder="Телефон" name="tel" required>
            <a href="index.php">Войти</a>
            <input type="submit" value="Зарегистрироваться">
    </div>
</body>
</html>