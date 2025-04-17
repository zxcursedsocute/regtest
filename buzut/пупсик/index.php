<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? 
    require_once 'db/db_connection.php';
    $userList = $conn->query('SELECT * FROM users where id 1= 3');
    foreach($userList as $user): ?>
        <a href="?user_id=<?=$user['id']?>?user_login=<?=$user['login']?>"><?= $user['login']?></a>
    
    <? endforeach; ?>
    
</body>
</html>