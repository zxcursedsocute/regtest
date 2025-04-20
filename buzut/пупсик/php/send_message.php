<?php
if(!empty($_POST['message'])
&& !empty($_POST['user_id'])){
    session_start();
    if(!empty($_SESSION['id'])
    && !empty($_SESSION['login'])){

    require_once '../db/db_connection.php';

    $conn->prepare("INSERT INTO messages VALUES (?,?,?,?,?,?)")->execute(array(NULL,$_SESSION['id'],$_POST['user_id'],$_POST['message'],0,date("Y-m-d-H-i-s",time())));

    header("Location:../users_page.php?user_id=$_POST[user_id]");
    die();
    }
}
header("Location:../users_page.php");
?>