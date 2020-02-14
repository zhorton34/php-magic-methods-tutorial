<?php

class Building
{
    private function exploded($becauseYou)
    {
        echo "The Building exploded because you {$becauseYou}. Shouldn't of done that.";
    }

    public function __call($method, $parameters)
    {
        call_user_func_array([$this, $method], $parameters);
    }
}

$tower = new Building;

$tower->exploded("pressed the red button");
