<?php
header("Content-Type: text/html; charset=utf-8");
    $name = $_POST['name'];
    $text = $_POST['text-comment'];
    $count_stars = $_POST['countStars'] + 1;

    include($_SERVER['DOCUMENT_ROOT'].'/app/logic/db.php');

    if($link->connect_errno) {
        $message = '<script>alert(Ошибка подключения к БД!!);<script>';
        printf($message, $link->connect_error);
        exit();
    }

    $count_rows = 0;
        if($result = $link->query("SELECT * FROM comments")) {
            $count_rows = $result->num_rows + 1;
            // Очищаем набор
            $result->close();
        }

        if($result = $link->query("INSERT INTO comments(id, name, count_stars, text) VALUES (". $count_rows .", '$name', ". $count_stars .", '$text')")) {
            echo '<script>alert("Сообщение отправлено! Спасибо за отзыв!")</script>';
            exit('<meta http-equiv="refresh" content="0; url=/index.php" />');
        } else {
            echo '<script>alert("Ошибка! Отзыв не отправлен")</script>';
        }
?>
