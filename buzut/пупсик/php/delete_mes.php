<?php
session_start();
if(!empty($_SESSION)
&& !empty($_SESSION['id'])){
    require_once '../db/db_connection.php';

    $res = $conn->query("SELECT sender_id FROM messages WHERE id = $_GET[mes]");
    $res = $res->fetch();
    if($res['sender_id'] == $_SESSION['id']){
        $conn->query("UPDATE messages SET is_deleted = 1 WHERE id = $_GET[mes]");
    }
}
header("Location:../users_page.php?user_id=$_GET[user_id]");

?>