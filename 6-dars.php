<?php


trait wow
{
    public function vov()
    {
        return 'vovo vov';
    }
}

interface Animal
{
public function yurushi();
}

class Cats implements Animal
{
    public $name;
    public function  __construct($name)
    {
        $this->name = $name;
    }

    public function yurushi()
    {
        return 'yurushi';
    }
}
$necovoy = new Cats('Necovoy');
var_dump($necovoy);