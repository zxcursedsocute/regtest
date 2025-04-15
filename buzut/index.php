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
    <a href="?insert=del">Удалить пользователей</a>
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
    <a href="?insert=prepDel">Удалить пользователей</a>
    <a href="?insert=prepShow">Показать пользователей</a>
<?
$users = [['user1','password1'],['user2','password2'],['user3','password3'],['user4','password4'],['user5','password5']];
    $sql = "insert into users (login,password) values (?,?)";
    $sql2 = "DELETE FROM users";
    $sql3 = "SELECT * FROM users";
    require_once 'db/connection.php';
    if(isset($_GET['insert']) && $_GET['insert'] == 'prepIns'){
        $result = $conn->prepare($sql);
        $i = 0;
        foreach($users as $elem){
            $result->execute($elem);
            $i++;
        }
       
        echo '<br>' . $i;
    }elseif(isset($_GET['insert']) && $_GET['insert'] == 'prepDel'){
        $result =$conn->prepare($sql2)->execute();
        echo '<br>' . $result;
    }elseif(isset($_GET['insert']) && $_GET['insert'] == 'prepShow'){
        $result = $conn->prepare($sql3);
        $result->execute();
        $result = $result->fetchAll();
        echo '<br>';
        foreach($result as $elem){
            echo "$elem[login] $elem[password] <br>";
        }
    }
?>
<h3>QUERY</h3>
<a href="?insert=queryIns">Добавить пользователя</a>
    <a href="?insert=queryDel">Удалить пользователей</a>
    <a href="?insert=queryShow">Показать пользователей</a>
    <?
    $sql = "insert into users (login,password) values ('user1','password1'),('user2','password2'),('user3','password3')";
    $sql2 = "DELETE FROM users";
    $sql3 = "SELECT * FROM users";
    require_once 'db/connection.php';
    if(isset($_GET['insert']) && $_GET['insert'] == 'queryIns'){
        $conn->query($sql);
        echo 'Добавил';
    }elseif(isset($_GET['insert']) && $_GET['insert'] == 'queryDel'){
        $conn->query($sql2);
        echo 'Удалил';
    }elseif(isset($_GET['insert']) && $_GET['insert'] == 'queryShow'){
        $result = $conn->query($sql3);
        $result = $result->fetchAll();
        echo '<br>';
        foreach($result as $elem){
            echo "$elem[login] $elem[password] <br>";
        }
    }

    ?>
</body>
</html>