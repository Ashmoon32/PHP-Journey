<?php 

class Animal
{
    static $type = "Mammal";

    static function info()
    {
        echo "Group: " . static::$type;
    }
}

echo Animal::$type . "\n";

Animal::info();

echo "\n";