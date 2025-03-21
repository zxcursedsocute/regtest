<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <? if (isset($_GET['message'])): ?>
        <p><?=$_GET['message']?></p>
    <? endif; ?>
    <div class="form">
        <form action="php/registration.php" method="POST">
            <h1>Регистрация</h1>
            <input type="text" placeholder="Логин" name="login">
            <input type="text" placeholder="ФИО" name="fio">
            <input type="email" placeholder="Почта" name="email">
            <input type="password" placeholder="Пароль" name="password">
            <input type="password" placeholder="Повтор пароля" name="repPassword">
            <input type="tel" placeholder="Телефон" name="tel">
            <a href="index.php">Войти</a>
            <input type="submit" value="Зарегистрироваться">
      /form>
    </div>
</body>
</html>