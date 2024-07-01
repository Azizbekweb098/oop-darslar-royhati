<?php
class Car{
    public $year;

    public function model()
    {
        echo  'SUPRA';
    }
}
$supra = new Car();
$supra->year = 2008;

var_dump($supra);


