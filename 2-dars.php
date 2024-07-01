<?php

class Car{
    public $model;
    public $year;
    public $narxi;

    public function __construct($model, $year, $narxi){
        $this->model = $model;
        $this->year = $year;
        $this->narxi =$narxi;
    }
}

$supra = new Car('Supra', 2008, '20000$');
var_dump($supra);