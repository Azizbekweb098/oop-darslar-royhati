<?php

class Car
{
    public static $value = 'Salom';
}
echo Car::$value;

class CarR
{
    public static $valuw = 'Qanday';
    public function ss()
    {
        return self::$valuw;
    }
}
$sr = new CarR();
var_dump($sr->ss());


class Cart
{
    public static $value = 'wwww';
}
class SWer extends Cart
{
    public function dsa()

    {
        return parent::$value;
    }
}
$bj = new SWer();
var_dump($bj->dsa());