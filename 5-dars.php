<?php



interface Animal{
public function runing();
}

class Cats implements Animal{
public $years;
public function __construct($years){
$this->years = $years;
}
public function runing(){
    return 'Salom';
}
}
$mushuk = new Cats('2021');
var_dump($mushuk);