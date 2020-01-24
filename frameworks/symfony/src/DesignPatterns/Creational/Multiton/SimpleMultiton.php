<?php


namespace App\DesignPatterns\Creational\Multiton;


use App\DesignPatterns\Creational\Multiton\Interfaces\MultitonInterface;
use App\DesignPatterns\Creational\Multiton\Traits\MultitonTrait;

class SimpleMultiton implements MultitonInterface
{
    use MultitonTrait;

    private $test;

    public function setTest($test): MultitonInterface
    {
        $this->test = $test;

        return $this;
    }
}