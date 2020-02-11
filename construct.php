<?php

class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;

        var_dump($this->name);
    }
}

$timmy = new User('Timmy');


echo $timmy->name;
