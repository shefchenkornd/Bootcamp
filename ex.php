<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 20.02.18
 * Time: 11:31
 */
class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Bussines
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getMembers()
    {
        return $this->staff->members();
    }
}

class Staff
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracast = new Bussines($staff);

$laracast->hire(new Person('Jane Doe'));

var_dump($laracast->getMembers());