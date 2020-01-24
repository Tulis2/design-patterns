<?php


namespace App\DesignPatterns\Creational\Prototype;


class Client
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $orders;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addOrder(Order $order)
    {
        $this->orders[$order->getId()] = $order;
    }

    public function removeOrder(Order $order)
    {
        unset($this->orders[$order->getId()]);
    }

    public function getOrders(): array
    {
        return $this->orders;
    }
}