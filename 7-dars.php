<?php

class Fruet{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function __destruct(){
   echo "Salom bu mevani nome {$this->name} va unu rangi {$this->color} va unu narxi 20$";
    }
}
$apple = new Fruet('olma', 'yellow');
var_dump($apple);