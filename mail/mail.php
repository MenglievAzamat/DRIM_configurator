<?php

if(isset($_POST["mail"])) {
    $site_type = $_POST["site_type"];
    $blocks = isset($_POST["blocks"]) ? $_POST["blocks"] : ["Не определено"];
    $funcs = isset($_POST["funcs"]) ? $_POST["funcs"] : ["Не определено"];
    $host = $_POST["host"];
    $time = $_POST["time"];
    $price = $_POST["price"];
    $phone = $_POST["phone_no"];

    $message = "Тип заказа: $site_type\n<br>
                Требуемые блоки: ";

    foreach ($blocks as $block) {
        $message .= $block . "\n<br>";
    }

    $message .= "\n<br>Требуемые функции: ";

    foreach ($funcs as $func) {
        $message .= $func . "\n<br>";
    }

    $message .= "\n<br>Требуется хостинг: $host\n<br>Время выполнения: $time ч.\n<br>Цена заказа: $price руб.\n<br>Контакт заказчика: $phone";

    echo $message;
}