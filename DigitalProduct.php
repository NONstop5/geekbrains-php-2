<?php

namespace App;

class DigitalProduct extends AbstractProduct
{
    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price / 2;
    }
}
