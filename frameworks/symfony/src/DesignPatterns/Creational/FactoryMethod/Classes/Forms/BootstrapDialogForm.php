<?php


namespace App\DesignPatterns\Creational\FactoryMethod\Classes\Forms;


use App\DesignPatterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

/**
 * Class BootstrapDialogForm
 * @package App\DesignPatterns\Creational\FactoryMethod\Classes\Forms
 */
class BootstrapDialogForm extends AbstractForm
{
    /**
     * @return GuiFactoryInterface
     */
    function createGuiKit(): GuiFactoryInterface
    {
        return new BootstrapFactory();
    }
}