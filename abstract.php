<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 28.02.18
 * Time: 16:30
 */
interface Proveder
{
    public function method();
}

abstract class AbstractProvider
{
    abstract protected function method();
}

class FacebookProvider implements Proveder
{
    public function method()
    {
        return '';
    }
}