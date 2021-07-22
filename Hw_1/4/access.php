<?php


class Access
{
    public function checkAccess ($start_ip, $end_ip, $check_ip) {
        $start_ip_v1 = str_replace(".", "", $start_ip);
        $end_ip_v1 = str_replace(".", "", $end_ip);
        $check_ip_v1 = str_replace(".", "", $check_ip);

        $start_ip_v1 = (int)$start_ip_v1;
        $end_ip_v1 = (int)$end_ip_v1;
        $check_ip_v1 = (int)$check_ip_v1;

        if ($start_ip_v1 != 0 && $end_ip_v1 != 0 && $check_ip_v1 != 0) {
            if ($start_ip_v1 <= $check_ip_v1 && $check_ip_v1<= $end_ip_v1) {
                echo ("IP: $check_ip access is allowed!");
            } else {
                echo ("IP: $check_ip access is denied!");
            }
        } else {
            echo ("Invalid data!");
        }
    }
}