<?php

class DefenderKeyboard extends Keyboard
{
    /**
     * Сразу после создания этот класс получает все свойства и методы своего родителя, если только они не privat
     */

    /**
     * @var int Гарантия, мес
     */
    protected $guarantee;

    public function __construct(
        string $color,
        bool $guarantee,
        int $type = self::KEYBOARD_TYPE_MECHANIC
    ) {
        parent::__construct('Defender', $color, $type);
        $this->guarantee = $guarantee;
    }

    /**
     * Возвращает период гарантии
     *
     * @return int
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Устанавливает период гарантии
     *
     * @param $value
     * @return int
     */
    public function setGuarantee($value)
    {
        return $this->guarantee = $value;
    }
}
