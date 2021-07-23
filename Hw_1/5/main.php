<?php

require ('mass.php');

$mass = $_POST["mass"];

if (isset($mass) && !empty($mass)){
    $class = new Mass();
    $class->actionOnMass($mass);
}



