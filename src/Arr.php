<?php

namespace App;

class Arr
{
    private $nums = [];
    private $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper;
    }

    public function getSum23()
    {
        $nums = $this->nums;
        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    public function add($number)
    {
        $this->nums[] = $number;
    }

    public function getAvgMeanSum()
    {
        $nums = $this->nums;
        $avgHelper = new AvgHelper();
        //find the sum of the arithmetic mean and the square mean from the array
        return $this->$avgHelper->getAvg($nums) + $this->$avgHelper->getAvgMeanSquare($nums);
    }
}

