<?php

namespace App;

class Cart

{
    public $products = [];

    public function add($product)
    {
        $this->products[] = $product;
    }

    public function remove($name)
    {

        for ($i = 0; $i < count($this->products); $i++) {
            if ($this->products[$i]->getName() === $name) {
                //remove the element with the specified name
                unset($this->products[$i]);
            }
        }
        //reindex array elements
        $this->products = array_values($this->products);

    }

    public function getInfo()
    {
        for ($i = 0; $i < count($this->products); $i++) {
            echo " Item " . $i + 1 . " - Name: {$this->products[$i]->getName()} Price: {$this->products[$i]->getPrice()} Quantity:  {$this->products[$i]->getQuantity()} .";
        }
    }

    public function getTotalCost()
    {
        $coast = 0;
        for ($i = 0; $i < count($this->products); $i++) {
            $coast += $this->products[$i]->getPrice() * $this->products[$i]->getQuantity();
        }
        return $coast;
    }

    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        for ($i = 0; $i < count($this->products); $i++) {
            $totalQuantity += $this->products[$i]->getQuantity();
        }
        return $totalQuantity;
    }

    public function getAvgPrice()
    {
        return round($this->getTotalCost() / $this->getTotalQuantity(), 2);
    }
}

