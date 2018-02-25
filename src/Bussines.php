<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 25.02.18
 * Time: 11:41
 */
namespace Acme;

use Acme\User\Person;

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