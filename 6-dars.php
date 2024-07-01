<?php


trait Wow{
    public function WOw(){
        return 'Vov vov';
    }
    public function Wee()
    {
        return 'salom';
    }
}
interface Animal{
    public function runing();
}

class Cats implements Animal{
    use Wow;
    public $years;
    public function __construct($years){
        $this->years = $years;
    }
    public function runing()
    {
        return 'Salom';
    }

}

$mushuk = new Cats('2021');
var_dump($mushuk->WOw());
var_dump($mushuk->Wee());