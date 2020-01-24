<?php


namespace App\DesignPatterns\Creational\SimpleFactory;


use App\DesignPatterns\Creational\SimpleFactory\Classes\EmailMessenger;
use App\DesignPatterns\Creational\SimpleFactory\Classes\SmsMessenger;
use App\DesignPatterns\Creational\SimpleFactory\Interfaces\MessengerSimpleFactoryInterface;
use App\DesignPatterns\Creational\SimpleFactory\Interfaces\SimpleMessengerInterface;
use http\Exception\InvalidArgumentException;

class MessengerSimpleFactory implements MessengerSimpleFactoryInterface
{
    public function build(string $type = self::TYPE_EMAIL): SimpleMessengerInterface
    {
        switch ($type){
            case self::TYPE_EMAIL:
                $messenger = new EmailMessenger();
                $messenger
                    ->setSender('sdfsdf@sdfsdfsd.com')
                    ->setMessage('sd;lfjsd;klfjlksdf');
                break;
            case self::TYPE_SMS:
                $messenger = new SmsMessenger();
                $messenger
                    ->setSender('3809343543533')
                    ->setMessage('dreio4984784784784 409348 jfoksdf');
                break;
            default:
                throw new InvalidArgumentException('Not correct object type');
        }

        return $messenger;
    }
}