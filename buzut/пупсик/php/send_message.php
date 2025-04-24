<?php
session_start();
if(!empty($_POST['message'])
&& !empty($_POST['user_id'])){
    /* session_start(); */
    if(!empty($_SESSION['id'])
    && !empty($_SESSION['login'])){

    require_once '../db/db_connection.php';

    $conn->prepare("INSERT INTO messages VALUES (?,?,?,?,?,?)")->execute(array(NULL,$_SESSION['id'],$_POST['user_id'],$_POST['message'],0,date("Y-m-d-H-i-s",time())));
    echo 'A0';
    }
}


if(!empty($_POST)
&& !empty($_POST['user_id'])){
//$messageList = $conn->query("SELECT * FROM messages WHERE is_deleted != 1 and sender_id = $_SESSION[id] and receiver_id = $_GET[user_id] or is_deleted != 1 and sender_id = $_GET[user_id] and receiver_id = $_SESSION[id] ORDER BY sent_at DESC");
$messageList = $conn->query("SELECT * FROM messages");
$messageList = $messageList->fetchAll();

foreach($messageList as $message){
    echo $message['message_text'] . "<br>";
    
  }
}
?>