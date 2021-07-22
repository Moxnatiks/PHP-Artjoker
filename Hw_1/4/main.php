<?php

require ('access.php');

$start_ip = $_POST["start_ip"];
$end_ip = $_POST["end_ip"];
$check_ip = $_POST['check_ip'];

$access = new Access();

if (isset($start_ip) && isset($end_ip) && isset($check_ip) && !empty($start_ip) && !empty($start_ip) && !empty($start_ip)) {
    $access->checkAccess($start_ip, $end_ip, $check_ip);
} else {
    echo ("Invalid data!");
}
