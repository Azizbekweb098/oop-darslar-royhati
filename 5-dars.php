<?php

interface Animal
{
    public function ovozi();
  public function yurushi();
}

class Cat implements Animal{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function ovozi()
    {
        return 'Miyov Miyov';
    }
    public function yurushi()
    {
        return 'Yurushiga gap yoq';
    }
}

$neko_mushuk = new Cat('nekovoy');
var_dump($neko_mushuk->ovozi(), $neko_mushuk->yurushi());