<?
session_start();
if(empty($_SESSION['id'])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="user">
    <p>Добро пожаловать!,<?= $_SESSION['login'] ?></p>
    <a href="php/logout.php">Выйти из аккаунта</a>
    </div>
    
    <h2>Список Пользователей</h2>
    <?
    require_once 'db/db_connection.php';

    $userList = $conn->query("SELECT * FROM users WHERE id != $_SESSION[id]");

    foreach($userList as $user){
        echo "<p>$user[login]</p>  <a href='chat'>открыть чат</a>";
    }


    ?>
    
    
</body>
</html>