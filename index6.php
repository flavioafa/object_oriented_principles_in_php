<?php

class Person 
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return 'software developer';
    }

    public function favoriteTeam()
    {

    }

    private function thingsThatKeepUpAtNight()
    {
        return 'we are all going to die and that is terrifying.';
    }
}

$bob = new Person('bob');

var_dump($bob->job());