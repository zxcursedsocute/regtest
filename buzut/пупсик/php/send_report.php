<?php
session_start();
if(!empty($_SESSION['id'])
&& !empty($_POST['user_id'])
&& !empty($_POST['description'])
&& !empty($_POST['rep'])){
    
    require_once '../db/db_connection.php';

    $description = substr($_POST['description'], 0, 200);

    $conn->prepare("INSERT INTO reports VALUES (?,?,?,?,?,?,?,?)")->execute(array(NULL,$_SESSION['id'],'message',$_POST['user_id'],$_POST['rep'],$description,'new',date("Y-m-d-H-i-s",time())));
}
header("Location:../users_page.php?user_id=$_POST[user_id]");

?>