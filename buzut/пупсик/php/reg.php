<?php
if(!empty($_POST['login'])
&& !empty($_POST['email'])
&& !empty($_POST['password'])
&& !empty($_POST['Rep_password'])){
    if($_POST['password'] == $_POST['Rep_password']){
        if(strlen($_POST['password']) > 6){
            require_once '../db/db_connection.php';

            $res = $conn->prepare("SELECT * FROM users WHERE login = ?");
            $res->execute(array($_POST['login']));
            $res = $res->fetch();
    
            if($res != false){
                header("Location:../reg.php?message=Этот логин уже есть");
                die();
            }
    
            $res = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $res->execute(array($_POST['email']));
            $res = $res->fetch();
    
            if($res != false){
                header("Location:../reg.php?message=Это почта уже используется");
                die();
            }
    
            $pass_Hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
    
            $res = $conn->prepare("INSERT INTO users VALUE(?,?,?,?,?,?,?)");
            $res->execute(array(NULL,$_POST['login'],$pass_Hash,$_POST['email'],'user',0,date("Y-m-d-h-m-s",time())));
    
            header("Location:../index.php");

        }else{
            header("Location:../reg.php?message=Пароль должен быть длинее 6 символов");

        }
    }else{
        header("Location:../reg.php?message=Введенные пароли не совпадают");
    }
}

?>