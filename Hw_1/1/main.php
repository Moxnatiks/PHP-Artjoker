<?php


require 'converter.php';

$type = $_POST["type"];
$number = $_POST["number"];

$number = (int)$number;

$сonv = new Converter();
if (isset($number)) {
    if ($number != 0) {
        if ($type == 1) {
            $сonv->decInBin($number);
        } else if ($type == 2) {
            $сonv->binInDec($number);
        } else {
            echo "НЕверный тип!";
        }
    } else {
        echo ("Меня не обмануть, я кушаю  только целые числа и то только > 0!");
    }
} else {
    echo "Введите число для преобразования!";
}
