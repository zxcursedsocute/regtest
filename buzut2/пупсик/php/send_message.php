<?php
session_start();
if(!empty($_SESSION['id'])
&& !empty($_SESSION['login'])){

    require_once '../db/db_connection.php';

    if(!empty($_POST['message'])
    && !empty($_POST['user_id'])){

    $conn->prepare("INSERT INTO messages VALUES (?,?,?,?,?,?)")->execute(array(NULL,$_SESSION['id'],$_POST['user_id'],$_POST['message'],0,date("Y-m-d-H-i-s",time())));
    }
}

if(!empty($_POST)
&& !empty($_POST['user_id'])){
$messageList = $conn->query("SELECT * FROM messages WHERE is_deleted != 1 and sender_id = $_SESSION[id] and receiver_id = $_POST[user_id] or is_deleted != 1 and sender_id = $_POST[user_id] and receiver_id = $_SESSION[id] ORDER BY sent_at DESC");
$messageList = $messageList->fetchAll();

foreach($messageList as $message){
  $message2 = file_get_contents('../include/message.php');
  $message2 = preg_replace('#{{ message }}#', $message['message_text'],$message2);
  $message2 = preg_replace('#{{ date }}#', $message['sent_at'],$message2);
  if($message['sender_id'] == $_SESSION['id']){
      $message2 = preg_replace('#{{ action }}#', "<a href='php/delete_mes.php?mes=$message[id]&user_id=$_POST[user_id]'>Удалить</a>",$message2);
      $message2 = preg_replace('#{{ class2 }}#', "id='mes'",$message2);
      $message2 = preg_replace('#{{ class3 }}#', "id='mess'",$message2);
  }else{
      $message2 = preg_replace('#{{ action }}#', "<div class='report' onclick='show_rep()'>репорт</div>",$message2);
  }
  echo $message2;
  }
}
?>