<?php

namespace App;

class Product extends AbstractProduct
{
    public function getPrice()
    {
        return $this->price;
    }
}
