<?php

if (isset($_COOKIE['come-back'])) {
    echo 'С возвращением дружище!';
} else {
    setcookie('come-back', '1', time()+3600*10);
    echo 'Бобро пожаловать, новичек';
}