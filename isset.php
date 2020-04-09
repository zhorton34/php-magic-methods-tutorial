<?php

class Channel
{
    public $name;

    public function __isset($property)
    {
        $exists = isset($this->$property);
        $not_empty = !empty($this->$property);

        return (bool) $exists and $not_empty;
    }

    public function __get($property)
    {
        return isset($this->$property) ? true : false;
    }
}

$channel = new Channel;

$channel->name = "Clean Code Studio (Please Like)";

if ($channel->name) {
    echo "Channel Name: {$channel->name}";
} else {
    echo "Channel Name Does Not Exist";
}
