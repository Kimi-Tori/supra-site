<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fName = 'Имя: ' . $_POST['fio'] . ' <br />';
    $fTel = 'Почта: ' . $_POST['tel'] . ' <br />';
    $AllInOne = $fName . $fTel;
    $to = 'nn_322@mail.ru';
    $headers = "From: nn_322@mail.ru <nn_322@mail.ru>\nReply-to:nn_322@mail.ru\nContent-Type: text/html; charset=\"utf-8\"\n";
    // отправка письма
    if (mail($to, 'Свяжитесь с нами', $AllInOne)) {
        echo 'Письмо успешно отправлено.';
    } else {
        echo 'Ошибка при отправке письма.';
    }
}
?>