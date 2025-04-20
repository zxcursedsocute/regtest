<?
session_start();
if(!empty($_SESSION['id'])){
    header("Location:users_page.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/main_page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
    <h1>Система быстрых сообщений</h1>
    <h2>Общайтесь с  разными людьми по всему миру анонимно</h2>
    <? if(!empty($_GET and $_GET['message'] == 'Вы были заблокированны за нарушение правил сообщества')):
            echo "<p>$_GET[message]</p>";
        endif;
    ?>
    <h3>Вход</h3>
    <form action="php/auth.php" method="POST">
        <input type="text" name='login' placeholder="Логин или адресс эл. почты" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <? if(!empty($_GET and $_GET['message'] == 'Неправельный логин или пароль')):
            echo "<p>$_GET[message]</p>";
        endif;
        ?>
        <a href="reg">Регистрация</a>
        <input type="submit" value="Войти">
    </form>
    </div>
</body>
</html>