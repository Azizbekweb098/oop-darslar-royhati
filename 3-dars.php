<?php
//
//class Furuest{
//    public $name;
//    protected $narxi;
//    private $kg;
//
//    public function __construct($name, $narxi, $kg){
//        $this->name = $name;
//        $this->narxi = $narxi;
//        $this->kg = $kg;
//    }
//    public function nechi_kunturgan(){
//        return 'Saqlanish muddati 20-kun';
//    }
//    public  function narxi()
//    {
//        return $this->narxi;
//    }
//
//};
//$chevy = new Furuest('olma', '28$', 27);
//echo $chevy->narxi();
//

class Car{
    public $model;
    protected $year;
    private $narxi;

    public function __construct($model, $year, $narxi){
        $this->model = $model;
        $this->year = $year;
        $this->narxi = $narxi;

    }
//    public  function year(){
//        return $this->year;
//    }
// public function narxi(){
//     return $this->narxi;
// }
protected function year()
{
    return '2008';
}

}

class ExuteCar extends  Car
{
    public $narxi;

    public function years()
    {
        return $this->year();
    }



    public function narxi()
    {
        return $this->narxi;
    }
}

$supra = new ExuteCar('supra  ', '2008  ',28 );
$supra->narxi = 28;

echo   $supra->model . $supra->years() . $supra->narxi() ;