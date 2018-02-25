<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 25.02.18
 * Time: 11:41
 */
namespace Acme\User;

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}