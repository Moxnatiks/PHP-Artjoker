<?php


class Mass
{
    private $countAll;
    private $mass = [];
    private $precision = 2;

    public function __construct()
    {
        $this->countAll = 0;
    }

    public function actionOnMass ($mass) {
        $mass = explode(',',$mass);
        if (is_array($mass)) {
            echo ("Вы ввели масив: ");
            foreach ($mass as $el) {
                if (!is_numeric($el)){
                    echo ("<br>Invalid array!");
                    exit;
                }
                echo (" $el ");
                $this->countAll++;
            }

            // 3 разных функций
//            $this->positiveNumbers($mass);
//            $this->negativeNumbers($mass);
//            $this->zeroNumbers($mass);
            // 1 общая
            $this->filterNumbers($mass, $operation = '>', $text = 'положительных' );
            $this->filterNumbers($mass, $operation = '<', $text = 'отрицательных' );
            $this->filterNumbers($mass, $operation = '==', $text = 'нулевых' );

            $this->primeNumbers($mass);

            $this->sortMassIncreases($mass);
            $this->sortMassDiminishing ($mass);


        } else {
            echo ("I only accept array!");
        }
    }

    private function filterNumbers ($mass, $operation, $text) {
        $count = 0;
        foreach ($mass as $el) {
            switch ($operation) {
                case "==":  if ($el == 0) $count++; break;
                case ">":  if ($el > 0) $count++; break;
                case "<":  if ($el < 0) $count++; break;
                default:       echo ("Unknown operation!");
            }
        }
        $prots = $this->countProts($count);
        echo ("<br><br>В этом массиве $count $text чисел! Их процент составляет: $prots %");
    }

    private function positiveNumbers ($mass) {
        $countPositive = 0;
        foreach ($mass as $el) {
            if ($el > 0) {
                $countPositive++;
            }
        }
        $prots = $this->countProts($countPositive);
        echo ("<br><br>В этом массиве $countPositive положительных чисел! Их процент составляет: $prots %");
    }

    private function negativeNumbers ($mass) {
        $countNegative = 0;
        foreach ($mass as $el) {
            if ($el < 0) {
                $countNegative++;
            }
        }
        $prots = $this->countProts($countNegative);
        echo ("<br><br>В этом массиве $countNegative отрицательных чисел! Их процент составляет: $prots %");
    }

    private function zeroNumbers ($mass) {
        $countZero = 0;
        foreach ($mass as $el) {
            if ($el == 0) {
                $countZero++;
            }
        }
        $prots = $this->countProts($countZero);
        echo ("<br><br>В этом массиве $countZero нулевых чисел! Их процент составляет: $prots %");
    }

    private function primeNumbers ($mass) {
        $countPrime = 0;
        foreach ($mass as $el) {

            if ($el == 2 || $el == 3 || $el == 5 || $el == 7) {
                $countPrime++;
            }
            if ($el %2 == 0 || $el %3 == 0 || $el %5 == 0 || $el %7 ==0 || $el == 1) {
                continue;
            }
            $countPrime++;
        }
        $prots = $this->countProts($countPrime);
        echo ("<br><br>В этом массиве $countPrime простых чисел! Их процент составляет: $prots %");
    }

    private function sortMassIncreases ($mass) {
        // - > +
        $this->mass = $mass;
        $countDisplay = 0;
        echo ("<br><br>В порядке возрастания: ");
        while ($this->countAll != $countDisplay) {

            foreach ($this->mass as $el) {
                $num = $el;
                break;
            }
            foreach ($this->mass as $el) {
                if ($num > $el) {
                    $num = $el;
                }
            }
            echo ("$num ");
            unset($this->mass[array_search($num,$this->mass)]);
            $countDisplay++;
        }
    }

    private function sortMassDiminishing ($mass) {
        // + > -
        $this->mass = $mass;
        $countDisplay = 0;
        echo ("<br><br>В порядке убывания: ");
        while ($this->countAll != $countDisplay) {

            foreach ($this->mass as $el) {
                $num = $el;
                break;
            }
            foreach ($this->mass as $el) {
                if ($num < $el) {
                    $num = $el;
                }
            }
            echo ("$num ");
            unset($this->mass[array_search($num,$this->mass)]);
            $countDisplay++;
        }
    }

    private function countProts ($number) {
        return (round(100 * $number / $this->countAll, $this->precision));
    }

}