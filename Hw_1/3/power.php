<?php


class Power
{
    public function numInPower ($number, $power) {
        $number = (int)$number;
        $power = (int)$power;
        if ($number != 0 && $power != 0) {
            $work = $number**$power;
            echo ("Number \"$number\" in power \"$power\" equal \"$work\" !");
        } else {
            echo ("Only number!");
        }
    }
}