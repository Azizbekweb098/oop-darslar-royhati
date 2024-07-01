<?php


class Fruet
{
    public $name;
    public $tami;
    public $narxi;
    public function __construct($name, $tami, $narxi)
    {
        $this->name = $name;
        $this->tami = $tami;
        $this->narxi = $narxi;
    }

}
class ExitFruet extends Fruet
{

}
$apple = new ExitFruet('apple', 'zor', '10$');
var_dump($apple);