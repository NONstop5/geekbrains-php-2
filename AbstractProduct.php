<?php

namespace App;

abstract class AbstractProduct
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var float
     */
    protected $price = 100;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    abstract public function getPrice();
}
