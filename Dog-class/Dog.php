<?php

class Dog
{
public $name;
public static $value = '25 kg';

const BREED = "DOBMERAN";

public function __construct($name)
{
    $this->name = $name;
}

public function bark()
{
return self::BREED;
}
public function run()
{
return 'Yaxshi yuguradi';
}
public static function eat()
{
 return 'eating';
}
}