<?php

interface Animal{
public function runing();
}
class  Cats implements Animal{
    public $years;

    public function __construct($years)
    {
        $this->years = $years;
    }
public function runing(){
    return 'yurush';
}
}
$cats = new Cats('2008');

var_dump($cats);