<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 20.02.18
 * Time: 10:40
 */

abstract class Share{
    protected $color;

    public function __construct($color = 'red'){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
}


class Square extends Share{
}

echo (new Square('green'))->getColor() . "\n";