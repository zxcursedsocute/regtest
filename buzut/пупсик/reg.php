<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Система быстрых сообщений</h1>
    <h2>Общайтесь с  разными людьми по всему миру молнеисносно</h2>
    <h3>Вход</h3>
    <form action="php/reg.php" method="POST">
        <input type="text" name='login' placeholder="Логин" required>
        <? if(!empty($_GET and $_GET['message'] == 'Этот логин уже есть')):
            echo "<p>$_GET[message]</p>";
        endif;
        ?>
        <input type="email" name="email" placeholder="Эл. Почта" required>
        <? if(!empty($_GET and $_GET['message'] == 'Это почта уже используется')):
            echo "<p>$_GET[message]</p>";
        endif;
        ?>
        <input type="password" name="password" placeholder="Пароль" required>
        <? if(!empty($_GET and $_GET['message'] == 'Пароль должен быть длинее 6 символов')):
            echo "<p>$_GET[message]</p>";
        endif;
        ?>
        <input type="password" name="Rep_password" placeholder="Повтарение пароля" required>
        <? if(!empty($_GET and $_GET['message'] == 'Введенные пароли не совпадают')):
            echo "<p>$_GET[message]</p>";
        endif;
        ?>
        <input type="text" name="name" placeholder="Имя (не обязательно)">
        <a href="index.php">Вход</a>
        <input type="submit">
    </form>
    
</body>
</html>