<?
session_start();
if(!empty($_SESSION['id'])){
    require_once 'db/db_connection.php';

    $result = $conn->query("SELECT * FROM users WHERE id = $_SESSION[id]");
    $result = $result->fetch();

    $user_reports = $conn->query("SELECT * FROM reports 
    JOIN users
    on users.id = reports.target_id
    WHERE user_id = $_SESSION[id]");
    $user_reports = $user_reports->fetchAll();

}else{
    header("Locaation:index.php");
}
$res = $conn->query("SELECT is_blocked FROM users WHERE id = $_SESSION[id]");
$res = $res->fetch();
if($res['is_blocked']){
    session_destroy();
    session_abort();
    header("Location:index.php?message=Вы были заблокированны за нарушение правил сообщества");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head>
        <div class="back-button">
            <a href="users_page.php">Назад</a>
        </div>
    </head>
    <main>
    <section class="User-acc">
            <h1>Личный кабинет</h1>
            <div class="User-acc-info">
                <div class="User-acc-info-tel">
                    <p>Логин: <?= $result['login'] ?> </p>
                    <button>Изменить</button>
                </div>
                <div class="User-acc-info-email">
                    <p>Электронная почта: <?= $result['email'] ?></p>
                    <button>Изменить</button>
                </div>
                <div class="User-acc-info-email">
                    <p>Пароль: ******</p>
                    <button>Изменить</button>
                </div>
                <div class="User-acc-info-Datareg">
                    <p>Дата регистрации: <?= $result['created_at'] ?></p>
                </div>
                <div class="User-acc-info-Daysfromreg">
                    <p>Количество дней, прошедших с момента регистрации:<?= substr((abs(time() - strtotime($result['created_at']))) / 86400,0,3); ?></p>
                </div>
            </div>
        </section>
        <section class="User-App">
            <div class="User-acc-app">
                <h3 class="User-App-h3">Ваши Репорты</h3>
                <div class="User-acc-app-active">
                    <?
                    if(isset($user_reports[0])){
                        foreach($user_reports as $report){
                            echo "<div class='User-acc-app-active-card'>
                                    <div class='User-acc-app-active-card-info'>
                                            <p>На кого: $report[login]</p>
                                            <p>На что: $report[target_type]</p>
                                            <p>Описание: $report[description]</p>
                                            <p>статус: $report[status]</p>
                                            <p>дата отправики: $report[created_at]</p>
                                    </div>
                                    <div class='User-acc-app-card-edit'>
                                        <button>Удалить</button>
                                        <button>Редактировать</button>
                                    </div>
                                </div>";
                        }
                    }else{
                        echo "<p class='User-acc-app-active-card'>Вы еще не отправляли репортов</p>";
                    }
                    ?>
                </div>
            <div>
        </section>
    </main>
</body>
</html>