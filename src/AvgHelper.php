<?php

namespace App;

class AvgHelper
{
    public function getAvg($arr)
    {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += $elem;
        }
        return $sum/count($arr);
    }

    public function getMeanSquare($arr)
    {
        $sum = 0;
        //create an object to call a class(SumHelper) method
        $sumHelper = new SumHelper();
        foreach ($arr as $elem) {
            $sum += $sumHelper->getSum2($elem);
        }
        return sqrt($sum/count($arr));
    }
}