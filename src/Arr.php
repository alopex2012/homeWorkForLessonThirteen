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
}

