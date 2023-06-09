<?php

abstract class ArchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/',' $0',$class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ','-',$this->name())).'.png';
    }

    abstract public function qualifier($user);
}

class FirstThousandPoints extends ArchievementType
{
    public function qualifier($user)
    {
        
    }
}

class FirstBestAnswer extends ArchievementType
{
    public function qualifier($user)
    {
        
    }
}

$archievement = new FirstThousandPoints();

echo $archievement->icon();