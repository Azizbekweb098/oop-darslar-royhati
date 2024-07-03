<?php

class Fruet{
    public $name;
    public $narxi;

    public function __construct($name, $narxi)
    {
        $this->name = $name;
        $this->narxi = $narxi;
    }
    public function __destruct()
    {
        echo "Salom bu mavaning nomi {$this->name} va uning narxi {$this->narxi}";
    }
}
$apple = new Fruet('Olma', '20$');
