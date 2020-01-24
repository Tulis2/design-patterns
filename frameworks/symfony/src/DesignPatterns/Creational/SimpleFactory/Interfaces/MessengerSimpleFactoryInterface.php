<?php


namespace App\DesignPatterns\Creational\SimpleFactory\Interfaces;

interface MessengerSimpleFactoryInterface
{
    public const TYPE_EMAIL = 'email';
    public const TYPE_SMS = 'sms';

    public function build(string $type = self::TYPE_EMAIL): SimpleMessengerInterface;
}