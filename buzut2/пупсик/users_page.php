<?
session_start();
if(empty($_SESSION['id'])){
    header("Location:index.php");
}
require_once 'db/db_connection.php';

$res = $conn->query("SELECT is_blocked FROM users WHERE id = $_SESSION[id]");
$res = $res->fetch();
if($res['is_blocked']){
    session_destroy();
    session_abort();
    header("Location:index.php?message=Вы были заблокированны за нарушение правил сообщества");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js/report.js" defer></script>
    <script src="js/messages.js" defer></script>
    <link rel="stylesheet" href="assets/message.css">
    <link rel="stylesheet" href="assets/chat.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="Hide-background"></div>
    <div class="user">
    <p>Добро пожаловать,<?= $_SESSION['login'] ?></p>
    <?php if ($_SESSION['role'] === 'admin'): ?>
          <a href="admin/dashboard.php">Админ-панель</a>
        <?php endif; ?>
        <a href="home.php">Личный кабинет</a>
        <a href="php/logout.php">Выйти из аккаунта</a>
    </div>
    <main>
        <div class="users">
            <?
            $messageList = $conn->query("SELECT * FROM messages WHERE sender_id = $_SESSION[id] or receiver_id = $_SESSION[id] ORDER BY sent_at DESC");
            $messageList = $messageList->fetchAll();

            $arr = [];

            if((isset($messageList[0]))){
                echo '<h2>Вы недавно общались</h2>';
                foreach($messageList as $user){
                    $flag = false;
                    if($user['sender_id'] != $_SESSION['id']){
                        $res = $conn->query("SELECT login,id FROM users WHERE id = $user[sender_id]");
                        $res = $res->fetch();
                    }else{
                        $res = $conn->query("SELECT login,id FROM users WHERE id = $user[receiver_id]");
                        $res = $res->fetch();
                    }
                    foreach($arr as $elem){
                        if($elem == $res['login']){
                            $flag = true;
                        }
                    }
                    if(!$flag){
                        echo "<a class='users_user' id='$res[id]' href='users_page.php?user_id=$res[id]'><p>$res[login]</p><p>открыть чат</p></a>";
                        $arr[] = $res['login'];
                    }
                }
            }
            ?>
        <h2>Список Пользователей</h2>
        <?
        $userList = $conn->query("SELECT * FROM users WHERE id != $_SESSION[id]");
                foreach($userList as $user){
                    foreach($arr as $elem){
                        if($elem == $res['login']){
                            $flag = true;
                        }
                    }
                    if(!$flag){
                        echo "<a class='users_user' id='$user[id]' href='users_page.php?user_id=$user[id]'><p>$user[login]</p><p>открыть чат</p></a>";
                    }
        }
/*         foreach($userList as $user){
            
            echo "<a class='users_user' id='$user[id]' href='users_page.php?user_id=$user[id]'><p>$user[login]</p><p>открыть чат</p></a>";
        } */
        ?>
        </div>
        <div class="message2">
            <div class="chat" id='chat'>
            <?
                if(!empty($_GET)
                && !empty($_GET['user_id'])){
                $messageList = $conn->query("SELECT * FROM messages WHERE is_deleted != 1 and sender_id = $_SESSION[id] and receiver_id = $_GET[user_id] or is_deleted != 1 and sender_id = $_GET[user_id] and receiver_id = $_SESSION[id] ORDER BY sent_at DESC");
                $messageList = $messageList->fetchAll();

                foreach($messageList as $message){
                    $message2 = file_get_contents('include/message.php');
                    $message2 = preg_replace('#{{ message }}#', $message['message_text'],$message2);
                    $message2 = preg_replace('#{{ date }}#', $message['sent_at'],$message2);
                    if($message['sender_id'] == $_SESSION['id']){
                        $message2 = preg_replace('#{{ action }}#', "<a href='php/delete_mes.php?mes=$message[id]&user_id=$_GET[user_id]'>Удалить</a>",$message2);
                        $message2 = preg_replace('#{{ class2 }}#', "id='mes'",$message2);
                        $message2 = preg_replace('#{{ class3 }}#', "id='mess'",$message2);
                    }else{
                        $message2 = preg_replace('#{{ action }}#', "<div class='report' onclick='show_rep()'>репорт</div>",$message2);
                    }
                    echo $message2;
                    }
                }
                ?>
            </div>
            <div class="send_mes">
                <form name='messages_form' method="post">
                    <input type="hidden" name="user_id" value="<? if(!empty($_GET['user_id'])){ echo $_GET['user_id'];} ?>">
                    <input type="text" name="message" placeholder="Сообщение" required>
    <!--                 <input type="submit"> -->
                    <button onclick="Show_messages()">Отправить</button>
                </form>
            </div>
        </div>
    <div class="report_form">
        <div class="text">
        <h2>Репорт</h2>
        <p onclick="show_rep()">X</p>
        </div>
        <form action="php/send_report.php" method="POST">
        <input type="hidden" name="user_id" value="<? if(!empty($_GET['user_id'])){ echo $_GET['user_id'];} ?>">
            <select name="rep">
                <option value="spam">спам</option>
                <option value="osk">оскорбление</option>
                <option value="nfs">нежелательный контент</option>
            </select>
            <input type="text" placeholder="Описание" name="description" required>
            <input type="submit">
        </form>
    </div>
    </main>
</body>
</html>