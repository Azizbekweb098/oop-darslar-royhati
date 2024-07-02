<?php


abstract class  Car{
    public $model;
    public $year;
    public $price;

    abstract public function driving();
    abstract public function rangi();

    public function drv()
    {
        return 'yurushusi: 1:saot-20km';
    }
    public function rang()
    {
        return 'rangi: oq';
    }
}

class ExitCars extends Car
{
  public function __construct($model, $year, $price)
  {
  $this->model = $model;
  $this->year = $year;
  $this->price = $price;
  }
  public function driving()
  {
      return $this->drv();
  }
  public function rangi()
  {
      return $this->rang();
  }
}

$supra = new ExitCars('Supra', '1965', '20000$');
var_dump($supra);