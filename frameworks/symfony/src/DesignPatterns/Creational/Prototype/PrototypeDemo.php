<?php


namespace App\DesignPatterns\Creational\Prototype;


class PrototypeDemo
{
    public function run()
    {
        $client = new Client(2, 'Client');

        $deliveryDt = new \DateTime();
        $order = new Order(11, $deliveryDt, $client);

        $client->addOrder($order);

        $cloneOrder = clone $order;
        $cloneOrder->getDeliveryDt()->modify('+1 day');

        return compact('client', 'order', 'cloneOrder');
    }
}