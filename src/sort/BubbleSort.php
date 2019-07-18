<?php

namespace DataStructuresAndAlgorithms\sort;

class BubbleSort
{
    public function run($array1)
    {
        if (!is_array($array1) || count($array1) <= 1) {
            return $array1;
        }

        $length = count($array1);
        $maxIndex = $length - 1;
        for ($i = $maxIndex; $i > 0; $i--) {
            for ($j = 0; $j < $i; $j++) {
                if ($array1[$j] > $array1[$j + 1]) {
                    $temp = $array1[$j];
                    $array1[$j] = $array1[$j + 1];
                    $array1[$j + 1] = $temp;
                }
            }
        }
        return $array1;
    }

}