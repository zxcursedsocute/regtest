<?php
if(!empty($_POST['login']
&& !empty($_POST['password']))){
    require_once '../db/db_connection.php';

    $user = $conn->prepare("SELECT * FROM users WHERE login = ? or email = ?");
    $user->execute(array($_POST['login'],$_POST['login']));
    $user = $user->fetch();

    if($user != false){
        if(password_verify($_POST['password'],$user['password_hash']) and $user['is_blocked'] != 1){
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            $_SESSION['role'] = $user['role'];
            header("Location:../users_page.php");
        }else{
            header("Location:../index.php?message=Неправельный логин или пароль");
        }
    }else{
        header("Location:../index.php?message=Неправельный логин или пароль");
    }
}

?>