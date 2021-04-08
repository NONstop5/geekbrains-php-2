<?php

class GeniusBlackKeyboard extends Keyboard
{
    /**
     * Сразу после создания этот класс получает все свойства и методы своего родителя, если только они не privat
     */

    /**
     * @var string Наличие подсветки
     */
    protected $isHighlight;

    public function __construct(
        bool $isHighlight = false,
        int $type = self::KEYBOARD_TYPE_MECHANIC
    ) {
        parent::__construct('Genius', 'black', $type);
        $this->isHighlight = $isHighlight;
    }

    /**
     * Возаращает наличие подсветки
     *
     * @return int
     */
    public function getIsHighlight()
    {
        return $this->isHighlight;
    }
}
