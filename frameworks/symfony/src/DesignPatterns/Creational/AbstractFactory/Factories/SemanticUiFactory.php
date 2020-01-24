<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Factories;


use App\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi\ButtonSemanticUI;
use App\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi\CheckBoxSemanticUI;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUI();
    }

    /**
     * @return CheckBoxInterface
     */
    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxSemanticUI();
    }
}