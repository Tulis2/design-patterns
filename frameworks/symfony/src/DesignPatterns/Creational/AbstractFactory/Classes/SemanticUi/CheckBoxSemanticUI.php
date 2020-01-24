<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi;


use App\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckBoxSemanticUI implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}