<?php
if (!empty($_POST['login'])
    && !empty($_POST['email'])
    && !empty($_POST['fio'])
    && !empty($_POST['password'])
    && !empty($_POST['repPassword'])
    && !empty($_POST['tel'])){
    if ($_POST['password']==$_POST['repPassword']){
        $db = require_once '../db/connection.php';
        $conn -> prepare("insert into users (login, fio, password, email, tel) values (?, ?, ?, ?, ?)") -> execute(array($_POST['login'], $_POST['email'], 
        $_POST['fio'],  $_POST['password'], $_POST['tel']));
    } else {
        header('location:../reg.php?message=Введенные пароли не совпадают!');
    }
}
?>