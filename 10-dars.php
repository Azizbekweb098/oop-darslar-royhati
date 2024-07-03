<?php

class DD
{
    const Salom = 'Salo mening ismim Azibek, ahvollar qalar';
    public function se()
    {
        echo self::Salom;
    }
}
$sa = new DD();
$sa->se();