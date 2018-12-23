<?php

namespace Karamel\Console\Facade;
/**
 * Class Console
 * @package Karamel\Console\Facade
 * @method static add($name, $description, $callback)
 * @method static run($name)
 */
class Console
{
    private static $instance;

    public static function __callStatic($name, $arguments)
    {
        self::getInstace()->$name(...$arguments);
    }

    public static function getInstace()
    {
        if (self::$instance == null)
            self::$instance = new \Karamel\Console\Console();
        return self::$instance;
    }
}