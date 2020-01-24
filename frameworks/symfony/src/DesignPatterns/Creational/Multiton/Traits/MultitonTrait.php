<?php


namespace App\DesignPatterns\Creational\Multiton\Traits;


use App\DesignPatterns\Creational\Multiton\Interfaces\MultitonInterface;

trait MultitonTrait
{
    /**
     * @var array
     */
    protected static $instances = [];

    /**
     * @var string
     */
    private $name;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance(string $instanceName): MultitonInterface
    {
        if (isset(static::$instances[$instanceName])) {
            return static::$instances[$instanceName];
        }

        static::$instances[$instanceName] = new static();
        static::$instances[$instanceName]->setName($instanceName);

        return static::$instances[$instanceName];
    }

    public function setName($value): self
    {
        $this->name = $value;

        return $this;
    }
}