<?php

class Keyboard
{
    protected const KEYBOARD_TYPE_MECHANIC = 1;
    /**
     * @var string Производитель
     */
    protected $brand;
    /**
     * @var string Цвет
     */
    protected $color;
    /**
     * @var int Тип
     */
    protected $type;

    public function __construct(
        string $brand,
        string $color,
        int $type = self::KEYBOARD_TYPE_MECHANIC
    ) {
        $this->brand = $brand;
        $this->color = $color;
        $this->type = $type;
    }

    /**
     * Возвращает производителя
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Возвращает цвет
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Возвращает тип
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
