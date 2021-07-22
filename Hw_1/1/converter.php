<?php


class Converter
{
    function decInBin ($num)
    {
        echo "Из десятичной ($num) в двоичную: ";
        $mass = [];
        while($num > 1)
        {
            $ostatok = $num % 2;
            if ($ostatok == 0) {
                $num /= 2;
            } else {
                $num -=$ostatok;
                $num /= 2;
//                $num +=$ostatok;
            }

            $mass[] = $ostatok;
        }
        if ($num == 1){
            $mass[] = 1;
        }

//        $num = count($mass); // Не использовать функции стандартной библиотеки.
        $count = 0;
        foreach ($mass as $el) {
            $count++;
        }

        $count = ($count * (-1)) + 1;
        for($i = $count; $i < 1; $i++)
        {
            $t = $i * (-1);
            echo "$mass[$t]";
        }

    }

    function binInDec ($num)
    {
        $mass = str_split($num);
        $checkNum = [3,4,5,6,7,8,9];
        foreach ($mass as $item) {
            if (in_array($item, $checkNum)) {
                echo "Меня не обмануть, исправь число!";
                exit;
            }
        }

        echo "Из двоичной ($num) в десятичную: ";
        $count = count($mass);
        $number = 0;
        $power = $count;
        for($i = 0; $i < $count; $i++)
        {
            $power --;
            $number += ($mass[$i]) * (2 ** $power);
        }
        echo "$number";
    }
}