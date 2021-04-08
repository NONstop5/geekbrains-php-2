<?php

class Controller
{
    public function indexAction()
    {
        $microsoftKeyboard = new Keyboard('Microsoft', 'white');
        echo $microsoftKeyboard->getType();

        $defenderKeyboard = new DefenderKeyboard('black', 12);
        $defenderKeyboard->setGuarantee(24);
        echo $defenderKeyboard->getGuarantee();

        $geniusBlackKeyboard = new GeniusBlackKeyboard();
        echo $geniusBlackKeyboard->getIsHighlight();
    }
}
