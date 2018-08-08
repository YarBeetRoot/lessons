<?php
if (isset($_POST['send']) && isValid()) {

    $success = true;
    $result = insertStudent();


    if ($result) {
        $message = 'Пользователь добавлен';
    } else {
        $message = 'Ошибка добавление пользователя';
        $success = false;
    }

    header("Location: /hw06-08/index.php?success=$success&message=$message");
}

if (isset($_GET['success'])) {
    if ($_GET['success']) {
        echo "<p style='color:green'>{$_GET['message']}</p>";
    } else {
        echo "<p style='color:red'>{$_GET['message']}</p>";
    }

}