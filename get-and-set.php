<?php

class Organization
{
    public function __get($property)
    {
        if (!property_exists($this, $property)) {
            throw new \Error("Property {$property} Does Not Exist");
        }

        return $this->{$property};
    }

    public function __set($property, $value)
    {
        $this->{$property} = $value;
    }
}

$simplified = new Organization;

$simplified->name = 'Simplified';
$simplified->email = 'simplified@example.com';

echo "{$simplified->name} Email Address {$simplified->email}.";
