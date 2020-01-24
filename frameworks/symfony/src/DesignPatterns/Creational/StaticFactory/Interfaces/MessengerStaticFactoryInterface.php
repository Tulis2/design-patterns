<?php


namespace App\DesignPatterns\Creational\StaticFactory\Interfaces;


interface MessengerStaticFactoryInterface
{
    public const TYPE_EMAIL = 'email';
    public const TYPE_SMS = 'sms';

    public static function build(string $type = self::TYPE_EMAIL): StaticMessengerInterface;
}