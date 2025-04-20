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
    <h3>Регистрация</h3>
    <form action="php/reg.php" method="POST">
        <input type="text" name='login' placeholder="Логин" value="<? if(!empty($_SESSION['login'])){echo $_SESSION['login'];} ?>"required>
        <? if(!empty($_GET and $_GET['message'] == 'Этот логин уже используется') or !empty($_GET) and $_GET['message'] == 'слишком длинный логин'):
            echo "<p>$_GET[message]</p>";
        endif;
        ?>
        <input type="email" name="email" placeholder="Эл. Почта" value="<? if(!empty($_SESSION['email'])){echo $_SESSION['email'];} ?>" required>
        <? if(!empty($_GET and $_GET['message'] == 'Эта почта уже используется')):
            echo "<p>$_GET[message]</p>";
        endif;
        ?>
        <input type="password" name="password" placeholder="Пароль (мин. 6 символов)" value="<? if(!empty($_SESSION['password'])){echo $_SESSION['password'];} ?>" required>
        <? if(!empty($_GET and $_GET['message'] == 'Пароль должен быть длинее 6 символов')):
            echo "<p>$_GET[message]</p>";
        endif;
        ?>
        <input type="password" name="Rep_password" placeholder="Повторение пароля" value="<? if(!empty($_SESSION['Rep_password'])){echo $_SESSION['Rep_password'];} ?>" required>
        <? if(!empty($_GET and $_GET['message'] == 'Введенные пароли не совпадают')):
            echo "<p>$_GET[message]</p>";
        endif;
        ?>
        <input type="text" name="name" placeholder="Имя (не обязательно)" value="<? if(!empty($_SESSION['name'])){echo $_SESSION['name'];} ?>">
        <a href="index.php">Вход</a>
        <input type="submit" value="Зарегистрироваться">
    </form>
    </div>
</body>
</html>