<?php
class greeting{
public static function wlecome()
{
echo 'hello wolrd <br>';
}
}

greeting::wlecome();

class fff{
    public static function welcome(){
        echo 'hello sworld <br>';
    }
    public function __construct(){
        self::welcome();
    }
}
new fff();

class B
{
    public static function welcome()
    {
        echo 'hello wolrd <br>';
    }
}

class A
{
    public function message()
    {
        B::welcome();
    }
}

$abj = new A();
echo $abj->message();


class domen{
    protected static function getWebsitename()
    {
   return 'Azizbek-Xasnaov.netlify.app';
    }
}

class Domen3 extends domen{
public $websiteName;
public function __construct(){
    $this->websiteName = parent::getWebsitename();
}
}
$givname = new Domen3();
echo $givname->websiteName;