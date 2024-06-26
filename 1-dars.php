<?php 
class Car{
    public $model;
    public $year;
    public function __construct($model, $year){
        $this->model = $model;
        $this->year = $year;
    }
};
$bmw  = new Car('Bmw', 1945);
$supra = new Car('Supra', 1990);
var_dump($bmw);
var_dump($supra);

?>