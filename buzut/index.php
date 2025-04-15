<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>EXEC</h3>
    <a href="?insert=exec">Добавить пользователя</a>
    <a href="?insert=del">Удалить пользователя</a>
    <?
    $sql = "insert into users (login,password) values ('user1','password1'),('user2','password2'),('user3','password3')";
    require_once 'db/connection.php';
    $sql2 = "DELETE FROM users";
    if(isset($_GET['insert']) && $_GET['insert'] == 'exec'){
        $result = $conn->exec($sql);
        echo '<br>' . $result;
    }elseif(isset($_GET['insert']) && $_GET['insert'] == 'del'){
        $result =$conn->exec($sql2);
        echo '<br>' . $result;
    }

    ?>
    <h3>PREPARE</h3>
    <a href="?insert=prepIns">Добавить пользователя</a>
<a href="?insert=prepDel">Удалить пользователя</a>
<?
$users = [['user1','password1'],['user2','password2'],['user3','password3'],['user4','password4'],['user5','password5']];
    $sql = "insert into users (login,password) values (?,?),(?,?),(?,?)";
    $sql2 = "DELETE FROM users";
    require_once 'db/connection.php';
    if(isset($_GET['insert']) && $_GET['insert'] == 'prepIns'){
        $result = $conn->prepare($sql);
        foreach($users as $elem){
            $result->execute($elem);
        }
       
        echo '<br>' . $result;
    }elseif(isset($_GET['insert']) && $_GET['insert'] == 'prepDel'){
        $result =$conn->prepare($sql2)->execute();
        echo '<br>' . $result;
    }
?>
</body>
</html>