<?php

namespace Karamel\Console;
class Console
{

    private $commands;

    public function __construct()
    {
        $this->commands = [];
    }

    public function add($name, $description, $callback)
    {
        if (isset($this->commands[$name]))
            throw new \Exception("Command name has been reserved");

        $this->commands[$name] = [
            'name' => $name,
            'description' => $description,
            'callback' => $callback
        ];
    }

    public function run($name)
    {
        if (!isset($this->commands[$name]))
            throw new \Exception("Command not defined");
        return $this->commands[$name]['callback']();
    }
}