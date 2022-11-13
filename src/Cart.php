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

        for ($i=0; $i<count($this->products); $i++) {
            echo "Item ". $i+1 ." - Name: {$this->products[$i]->getName()} Price: {$this->products[$i]->getPrice()} Quantity:  {$this->products[$i]->getQuantity()}";
        }
    }
}

