<?php


class Doublemass
{
    public $mass1 = [];
    private $mass2 = [];

    public function __construct($long_mass_1, $high_mass_1, $long_mass_2, $high_mass_2)
    {
        $this->createMass1($long_mass_1, $high_mass_1);
        $this->createMass2($long_mass_2, $high_mass_2);
    }

    private function rand () {
        return (rand(-9,9));
    }

    private function createMass1 ($long_mass_1, $high_mass_1) {
        for ($i = 1; $i <= $high_mass_1; $i++)
        {
            for ($j = 1; $j <= $long_mass_1; $j++)
            {
                $this->mass1[$i][$j] = $this->rand();
            }
        }
        echo ("Первый массив: <br>");
        $this->displayArray($this->mass1);
        echo ("<br>");echo ("<br>");
    }

    private function createMass2 ($long_mass_2, $high_mass_2) {
        for ($i = 1; $i <= $high_mass_2; $i++)
        {
            for ($j = 1; $j <= $long_mass_2; $j++)
            {
                $this->mass2[$i][$j] = $this->rand();
            }
        }
        echo ("Второй массив: <br>");
        $this->displayArray($this->mass2);
        echo ("<br>");echo ("<br>");
    }

    private function displayArray ($mass, $level = 0) {
        foreach($mass as $el){
            if(is_array($el)){
                $this->displayArray ($el, $level = 1);
            }
            if (!is_array($el)){
                if ($level == 1) {
                    $level = 0;
                    echo ("<br>");
                }
                echo ($el)."\t";
            }
        }
    }

    public function transpose ($number) {
     if ($number == 1) {
         $text = "первый";
         $mass = $this->mass1;
     }  else {
         $text = "второй";
         $mass = $this->mass2;
     }
     $newMass = [];
     $i = 0;
     $j = 0;
     foreach ($mass as $el) {
         if (is_array($el)){
             foreach ($el as $e) {
                 $newMass[$j][$i] = $e;
                 $j++;
             }
             $j = 0;
         }
         $i++;
     }
        echo ("Tранспонированная $text матрица: <br>");
        $this->displayArray($newMass);
        echo ("<br>");echo ("<br>");
    }

    public function multiplication () {
        $strings = 0;
        $columns = 0;
        foreach ($this->mass1 as $item) {
            $strings++;
        }
        foreach ($this->mass2 as $item) {
            if (is_array($item)) {
                foreach ($item as $el) {
                    $columns++;
                }
            }
            break;
        }
        if ($strings == $columns) {
            $newMass =array();
            for ($k = 1; $k <= $columns; $k++) {
                for ($j = 1; $j <= $columns; $j++) {
                    $newMass[$k][$j] = 0;
                    for ($i = 1; $i <= $columns; $i++) {
                        $newMass[$k][$j] += $this->mass1[$k][$i] * $this->mass2[$i][$j];
//                        echo ($this->mass1[$k][$i])." * ".$this->mass2[$i][$j]."<br>";
                    }
                }
            }
            echo ("Умножение: <br>");
            $this->displayArray($newMass);
            echo ("<br>");echo ("<br>");

        } else {
            echo ("Две матрицы можно умножать между собой только тогда,<br>когда количество столбцов в первой матрице совпадает с количеством строк во второй матрице.");
        }
    }

    public function deleteSC ($number) {
        if ($number == 1) {
            $text = "первый";
            $mass = $this->mass1;
        }  else {
            $text = "второй";
            $mass = $this->mass2;
        }

        foreach ($mass as $column) {
            $sum = 0;
            foreach ($column as $string){
                $sum += $string;
            }
        }
    }







}