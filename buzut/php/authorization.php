<?php
$db = require '../db/connection.php';

$query = "SELECT * FROM users WHERE login = '$_POST[login]' and password = '$_POST[password]'";
$res = $conn->query($query);
$row = $res->fetch();
var_dump($row);
if($row){
    session_start();
    $_SESSION['id'] = $row['id'];

}
?>