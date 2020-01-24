<?php


namespace App\DesignPatterns\Creational\StaticFactory;


use App\DesignPatterns\Creational\StaticFactory\Classes\AppStaticMessenger;
use App\DesignPatterns\Creational\StaticFactory\Interfaces\StaticMessengerInterface;
use App\DesignPatterns\Creational\StaticFactory\Interfaces\MessengerStaticFactoryInterface;

class StaticFactory implements MessengerStaticFactoryInterface
{
    public static function build(string $type = self::TYPE_EMAIL): StaticMessengerInterface
    {
        $messenger = new AppStaticMessenger();

        switch ($type) {
            case self::TYPE_EMAIL:
                $messenger->toEmail();
                $sender = 'test@test.com';
                break;
            case self::TYPE_SMS:
                $messenger->toSms();
                $sender = '380941354212';
                break;
            default:
                throw new \InvalidArgumentException("Неизвестный тип [{$type}]");
        }

        $messenger
            ->setSender($sender)
            ->setMessage('test message');

        return $messenger;
    }
}