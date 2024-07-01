<?php

abstract class Car{
    public $model;
    public $year;
    public $price;

    abstract public function yurushi();

    public function yer()
    {
        return 'tezlik: 20-ot-kuch-tezlik';
    }
}
class  ExitCars extends Car
{
    public function __construct($model, $year, $price)
    {
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }
    public function yurushi()
    {
        return $this->yer();
    }
}
$supra = new ExitCars('supra', 1978, '2000$');

var_dump($supra);