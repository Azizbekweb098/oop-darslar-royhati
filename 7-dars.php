<?php

class Frueit{
    public $name;
    public $year;

    public function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
    }
    public function __destruct()
    {
  echo "Bu mevani nomi {$this->name} va unu uzulgan sanasi {$this->year}";
    }
}
$apple = new Frueit('olma', 2008);
