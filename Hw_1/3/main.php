<?php

require ('power.php');

$number = $_POST["number"];
$power = $_POST["power"];

$calculations = new Power();
if (isset($number) && isset ($power) && !empty($number) && !empty ($power)) {
    $calculations->numInPower($number, $power);
} else {
    echo ("Invalid data!");
}
