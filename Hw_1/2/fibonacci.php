<?php


class Fibonacci
{
    public function getNumbers ($number) {
        $count = 1;
        $oldNums = [0,1];
        $number = (int)$number;
        if ($numbers =! 0) {
            $swich = 0;
            while ($count <= $number) {
                if ($count == 1) {
                    echo ("0<br>");
                    $count++;
                }
                else if ($count == 2) {
                    echo ("1<br>");
                    $count++;
                } else {
                    $nextNum = $oldNums[0] + $oldNums[1];
                    if ($swich == 0) {
                        $oldNums[0] = $nextNum;
                        $swich = 1;
                    }
                    else {
                        $oldNums[1] = $nextNum;
                        $swich = 0;
                    }
                    echo ("$nextNum<br>");
                    $count++;
                }
            }
        } else {
            echo ("Invalid data!");
        }
    }

    public function getNumbers1 ($limit, $last1 = 0, $last2 = 1) {
        if ($limit == 0) {
            return 0;
        }
        $newValue = $last1 + $last2;

        echo ($newValue."<br>");

        getNumbers1(--$limit, $last2, $newValue);
    }


}