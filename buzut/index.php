<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="?insert=exec">Добавить пользователя</a>
<a href="?insert=del">Удалить пользователя</a>
    <?
    $sql = "insert into users (login,password) values ('user1','password1'),('user2','password2'),('user3','password3')";
    require_once 'db/connection.php';
    $sql2 = "DELETE FROM users";
    if(isset($_GET['insert']) && $_GET['insert'] == 'exec'){
        $result = $conn->exec($sql);
        echo $result;
    }elseif(isset($_GET['insert']) && $_GET['insert'] == 'del'){
        $result =$conn->exec($sql2);
    }

    ?>
</body>
</html>