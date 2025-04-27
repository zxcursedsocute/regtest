<?php
require_once '../db/db_connection.php';
session_start();
if ($_SESSION['role'] !== 'admin') die("Доступ запрещен.");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $report_id = $_POST['report_id'];
    $action = $_POST['action'];
    $stmt = $conn->prepare("UPDATE reports SET status = ? WHERE id = ?");
    $stmt->execute([$action, $report_id]);
}

$reports = $conn->query("SELECT * FROM reports ORDER BY created_at DESC");

foreach ($reports as $report) {
    echo "<p>Жалоба #{$report['id']} на {$report['target_type']} #{$report['target_id']} — {$report['type']} [{$report['status']}]</p>";
    echo "<form method='POST'>
            <input type='hidden' name='report_id' value='{$report['id']}'>
            <select name='action'>
              <option value='in_progress'>В обработке</option>
              <option value='resolved'>Решено</option>
            </select>
            <button type='submit'>Обновить</button>
          </form>";
}
?>