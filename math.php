<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 25.02.18
 * Time: 13:11
 */
class Math
{
    private static $count = 0;

    const PI = 3.14;

    public function __construct()
    {
        static::$count++; // подсчитывааем кол-во созданных объектов
    }

    public function getCount()
    {
        return static::$count;
    }

    public function add()
    {
        return array_sum(func_get_args());
    }

    public static function static_add(...$num)
    {
        return array_sum($num);
    }
}

$m = new Math;
$m2 = new Math;
$m3 = new Math;

var_dump( $m->getCount() );
var_dump( Math::PI );