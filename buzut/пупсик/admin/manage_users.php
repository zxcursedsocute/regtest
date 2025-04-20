<?php
require_once '../db/db_connection.php';
session_start();
if ($_SESSION['role'] !== 'admin') die("Доступ запрещен.");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $action = $_POST['action'];
    if ($action === 'block') {
        $conn->prepare("UPDATE users SET is_blocked = 1 WHERE id = ? AND role != 'admin'")->execute([$user_id]);
    } elseif ($action === 'unblock') {
        $conn->prepare("UPDATE users SET is_blocked = 0 WHERE id = ?")->execute([$user_id]);
    }
}

$users = $conn->query("SELECT * FROM users");

foreach ($users as $user) {
    echo "<p>{$user['login']} ({$user['role']}) — заблокирован: {$user['is_blocked']}</p>";
    if ($user['role'] !== 'admin') {
        echo "<form method='POST'>
                <input type='hidden' name='user_id' value='{$user['id']}'>
                <button name='action' value='block'>Заблокировать</button>
                <button name='action' value='unblock'>Разблокировать</button>
              </form>";
    }
}
?>