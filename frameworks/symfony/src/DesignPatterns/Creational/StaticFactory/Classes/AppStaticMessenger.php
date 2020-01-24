<?php


namespace App\DesignPatterns\Creational\StaticFactory\Classes;


use App\DesignPatterns\Creational\SimpleFactory\Classes\AbstractMessenger;
use App\DesignPatterns\Creational\StaticFactory\Interfaces\StaticMessengerInterface;

class AppStaticMessenger extends AbstractMessenger implements StaticMessengerInterface
{
    public function toEmail(): StaticMessengerInterface
    {
        // TODO: Implement toEmail() method.

        return $this;
    }

    public function toSms(): StaticMessengerInterface
    {
        // TODO: Implement toSms() method.

        return $this;
    }
}