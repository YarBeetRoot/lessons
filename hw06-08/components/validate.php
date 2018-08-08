<?php

function isValid() {

    switch ($_POST) {
        case ($_POST['name'] == '' && $_POST['age'] == ''):
            $message = 'Поля имя и возраст обязательны';
            break;
        case ($_POST['name'] == ''):
            $message = 'Поле имя обязательно';
            break;
        case ($_POST['age'] == ''):
            $message = 'Поле возраст обязательно';
            break;
        case (strlen($_POST['name']) > 15):
            $message = 'Какое-то длинное имя у вас))))';
            break;
        case ($_POST['age'] < 18):
            $message = 'Рано еще!';
            break;
        case ($_POST['age'] > 100):
            $message = 'Уже поздно :-(';
            break;
        default:
            return $data = [
                'name' => $_POST['name'],
                'age' => $_POST['age'],
                'university_id' => $_POST['universityId'],
            ];
    }

    header("Location: /hw06-08/index.php?success=0&message=$message");

}