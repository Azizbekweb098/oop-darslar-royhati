<?php


abstract class Car{
    public $model;

    abstract protected function years();
    protected $year;
    private $narxi;

    public function __construct($model, $year, $narxi){
        $this->model = $model;
        $this->year = $year;
        $this->narxi = $narxi;

    }
    protected function year()
    {
        return '2008';
    }

}

class  ExitCars extends  Car{
    public function years()
    {
        return $this->year;
    }

};

$supra = new ExitCars('supra', 2008,'28000$');

var_dump($supra->years());

