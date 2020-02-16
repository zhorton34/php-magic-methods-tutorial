<?php

$actions = [
  'getResponse',
  'validateResponse',
  'storeResponseToDatabase',
];

class Handle
{
    public static function it()
    {
        return new static();
    }

    public function __invoke($action)
    {
        echo "Handle: {$action} \n";
    }
}

array_walk($actions, Handle::it());

