<?php

namespace App;

class WeightProduct extends AbstractProduct
{
    /**
     * @var float
     */
    protected $weight;

    public function __construct($name, $weight)
    {
        parent::__construct($name);
        $this->name = $name;
        $this->weight = $weight;
    }

    public function getPrice()
    {
        return $this->weight * $this->price;
    }
}
