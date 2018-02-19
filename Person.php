<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 19.02.18
 * Time: 8:49
 */

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        if ($age < 18)
            throw new Exception('Person is not old enough.');

        $this->age = $age;
    }
}

$person = new Person('Ilya Shef');

$person->setAge(29);

var_dump($person->getAge());