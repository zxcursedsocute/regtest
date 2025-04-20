<?php
$dbSetup="mysql:host=mysql-8.0;dbname=3319v;charset=utf8";
$dbUser="root";
$dbPass="";
$dbErrMode=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$conn = new PDO($dbSetup, $dbUser, $dbPass, $dbErrMode);
?>