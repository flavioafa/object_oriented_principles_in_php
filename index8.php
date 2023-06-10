<?php

class Age
{
    private $age;

    public function __construct($age)
    {
        if($age < 0 || $age > 120) {
            throw new InvalidArgumentException('Age must be between 0 and 120');
        }
        $this->age = $age;
    }    
}

function register(string $name, Age $age)
{

}

register('Flávio Araújo', new Age(500));