<?php


namespace App\DesignPatterns\Creational\Singleton;


abstract class AbstractSingleton
{
    private $test;

    public function setTest($test): void
    {
        $this->test = $test;
    }

    public function getTest()
    {
        return $this->test;
    }
}