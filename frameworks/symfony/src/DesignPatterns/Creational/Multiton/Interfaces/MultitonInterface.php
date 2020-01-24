<?php


namespace App\DesignPatterns\Creational\Multiton\Interfaces;


interface MultitonInterface
{
    public static function getInstance(string $instanceName): MultitonInterface;

    public function setTest($value): MultitonInterface;
}