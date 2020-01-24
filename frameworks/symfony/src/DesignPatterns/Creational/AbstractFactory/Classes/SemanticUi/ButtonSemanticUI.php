<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi;


use App\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;

class ButtonSemanticUI implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}