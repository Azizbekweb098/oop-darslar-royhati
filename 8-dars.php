<?php

class greeting{
    public static function welcome()
    {
        echo 'salom <br>';
    }
}
greeting::welcome();


class fff{
    public static function welcome()
    {
        echo 'salom <br>';
    }
    public function __construct()
    {
        self::welcome();
    }
}
new fff();


class A{
    public static function welcome()
    {
        echo 'salom <br>';
    }
}
class B{
    public function message()
    {
        A::welcome();
    }
}
$abj = new B();
$abj->message();