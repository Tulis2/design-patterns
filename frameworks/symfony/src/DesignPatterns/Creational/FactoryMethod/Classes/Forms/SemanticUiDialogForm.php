<?php


namespace App\DesignPatterns\Creational\FactoryMethod\Classes\Forms;


use App\DesignPatterns\Creational\AbstractFactory\Factories\SemanticUiFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

/**
 * Class SemanticUiDialogForm
 * @package App\DesignPatterns\Creational\FactoryMethod\Classes\Forms
 */
class SemanticUiDialogForm extends AbstractForm
{
    /**
     * @return GuiFactoryInterface
     */
    function createGuiKit(): GuiFactoryInterface
    {
        return new SemanticUiFactory();
    }
}