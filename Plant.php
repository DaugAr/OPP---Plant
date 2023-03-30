<?php

class Plant
{
    public $name;
    public $latinName;
    public $perennial;
    public $height;
    public $continents;
    public $year;

    function __construct($name = null, $latinName = null, $perennial = null, $height = null, $continents = null, $year = null)
    {
        $this->name = $name;
        $this->$latinName = $latinName;
        $this->$perennial = $perennial;
        $this->$height = $height;
        $this->$continents = $continents;
        $this->$year = $year;
    }
}

