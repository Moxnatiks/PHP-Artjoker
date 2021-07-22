<?php

require 'fibonacci.php';

$number = $_POST["number"];

$fibonacci = new Fibonacci();

if (isset($number)) {
    $fibonacci->getNumbers($number);
}