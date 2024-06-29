<?php

 class Furuest{
    public $name;
    public $narxi;
    public $kg;

    public function __construct($name, $narxi, $kg){
        $this->name = $name;
        $this->narxi = $narxi;
        $this->kg = $kg;
    }
    public function nechi_kunturgan(){
        return 'Saqlanish muddati 20-kun';
    }

};
class Apple extends Furuest{
public function xidi(){
    return 'xidi shirin';
}
};
$apple = new Apple('olma', '20-ming', '3kg');

var_dump($apple->xidi(), $apple->nechi_kunturgan)

?>