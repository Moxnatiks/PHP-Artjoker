<?php

require ('doublemass.php');

$long_mass_1 = $_POST["long_mass_1"];
$high_mass_1 = $_POST["high_mass_1"];
$long_mass_2 = $_POST["long_mass_2"];
$high_mass_2 = $_POST["high_mass_2"];

if (isset($long_mass_1) && isset($high_mass_1) && isset($long_mass_2) && isset($high_mass_2) &&
    !empty($long_mass_1) && !empty($high_mass_1) && !empty($long_mass_2) && !empty($high_mass_2) &&
    is_integer($long_mass_1) && is_integer($high_mass_1) && is_integer($long_mass_2) && is_integer($high_mass_2)) {

    $doublemass = new Doublemass($long_mass_1, $high_mass_1, $long_mass_2, $high_mass_2);

    $doublemass->transpose(1);
    $doublemass->transpose(2);

    $doublemass->multiplication();

} else {
    echo ("Invalid data!");
}