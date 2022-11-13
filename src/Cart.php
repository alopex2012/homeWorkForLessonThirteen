<?php

namespace App;

class Cart

{
    public Product $product; //= new Product($name,$price,$quantity);
    public $products = [];

    public function add($product)
    {
        $this->products[] = $product;
    }

    public function remove($name)
    {
        //foreach ($this->products as $elem)
        //{
           // if ($elem->name = $name) {

            //};
            return array_diff_key($this->products,[$this->products->name = $name]);
       // }
    }
}

