<?php
require_once '../db/db_connection.php';
session_start();
if ($_SESSION['role'] !== 'admin') die("Доступ запрещен.");

$stmt = $conn->query("SELECT COUNT(*) as total FROM reports WHERE status = 'new'");
$new_reports = $stmt->fetch()['total'];

echo "<h1>Новые жалобы: $new_reports</h1>";
?>
<a href="manage_reports.php">репорты</a>
<a href="manage_users.php">Пользователи</a>