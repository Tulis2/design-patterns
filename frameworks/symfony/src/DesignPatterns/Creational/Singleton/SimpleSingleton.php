<?php


namespace App\DesignPatterns\Creational\Singleton;


class SimpleSingleton extends AbstractSingleton
{
    private static $instance;

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }
}