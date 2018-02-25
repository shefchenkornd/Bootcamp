<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 25.02.18
 * Time: 11:42
 */
namespace Acme;

use Acme\User\Person;

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