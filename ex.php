<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 20.02.18
 * Time: 11:31
 */

// точка входа для autoload'a и require других файлов в проект
require 'vendor/autoload.php';

use Acme\User\Person;
use Acme\Bussines;
use Acme\Staff;

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracast = new Bussines($staff);

$laracast->hire(new Person('Jane Doe'));

var_dump($laracast->getMembers());