<?php


namespace App\DesignPatterns\Creational\AbstractFactory;


use App\DesignPatterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Creational\AbstractFactory\Factories\SemanticUiFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

use Exception;

class GuiKitFactory
{
    public const GUI_BOOTSTRAP = 'bootstrap';
    public const GUI_SEMANTICUI = 'semanticui';

    /**
     * @param string $type
     * @return GuiFactoryInterface
     * @throws Exception
     */
    public function getFactory(string $type): GuiFactoryInterface
    {
        switch ($type) {
            case self::GUI_BOOTSTRAP:
                $factory = new BootstrapFactory();
                break;
            case self::GUI_SEMANTICUI:
                $factory = new SemanticUiFactory();
                break;
            default:
                throw new Exception("Неизвестный тип фабрики [{$type}]");
        }

        return $factory;
    }
}