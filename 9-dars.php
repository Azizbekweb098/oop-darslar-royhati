<?php
class  Salom{
    public static $value = 'Qanday <br>';
}
echo Salom::$value;


class qanday{
public static $value = 'Salom';
public function setmee()
{
return self::$value;
}
}
$ww = new qanday();
var_dump($ww->setmee());



/////////

class pi
{
    public static $value = 122.334534;
}
class x extends pi{
    public function setmese()
    {
        return parent::$value;
    }
}
echo x::$value;

$abj = new x();
$abj->setmese();