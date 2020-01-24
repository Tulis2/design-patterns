<?php


namespace App\DesignPatterns\Creational\SimpleFactory\Classes;

use App\DesignPatterns\Creational\SimpleFactory\Interfaces\SimpleMessengerInterface;

abstract class AbstractMessenger implements SimpleMessengerInterface
{
    /**
     * @var string
     */
    private $sender;

    /**
     * @var string
     */
    private $message;

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setSender(string $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getSender(): string
    {
        return $this->sender;
    }
}