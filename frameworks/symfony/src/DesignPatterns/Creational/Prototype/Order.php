<?php


namespace App\DesignPatterns\Creational\Prototype;


class Order
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $deliveryDt;

    /**
     * @var Client
     */
    private $client;

    public function __construct($id, \DateTime $deliveryDt, Client $client)
    {
        $this->id = (string)$id;
        $this->deliveryDt = $deliveryDt;
        $this->client = $client;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDeliveryDt(): \DateTime
    {
        return $this->deliveryDt;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function __clone()
    {
        $this->id = $this->id . '_copy';
        $this->deliveryDt = clone $this->deliveryDt;
        $this->client->addOrder($this);
    }
}