<?php


namespace App\DesignPatterns\Creational\FactoryMethod\Classes\Forms;


use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;
use App\DesignPatterns\Creational\FactoryMethod\Interfaces\FormInterface;

/**
 * Class AbstractForm
 * @package App\DesignPatterns\Creational\FactoryMethod\Classes\Forms
 */
abstract class AbstractForm implements FormInterface
{
    /**
     * @return array
     */
    public function render(): array
    {
        $quiKit = $this->createGuiKit();
        $result[] = $quiKit->buildButton()->draw();
        $result[] = $quiKit->buildCheckBox()->draw();

        return $result;
    }

    /**
     * @return GuiFactoryInterface
     */
    abstract function createGuiKit(): GuiFactoryInterface;
}