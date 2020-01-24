<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Interfaces;

/**
 * Interface GuiFactoryInterface
 * @package DesignPatters\Creational\AbstractFactory\Interfaces
 */
interface GuiFactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface;

    /**
     * @return CheckBoxInterface
     */
    public function buildCheckBox(): CheckBoxInterface;
}