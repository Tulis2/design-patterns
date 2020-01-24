<?php


namespace App\DesignPatterns\Creational\StaticFactory\Interfaces;


interface StaticMessengerInterface
{
    public function toEmail(): StaticMessengerInterface;

    public function toSms(): StaticMessengerInterface;
}