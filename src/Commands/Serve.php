<?php

namespace Karamel\Console\Commands;

use Karamel\Console\Interfaces\ICommand;

class Serve implements ICommand
{

    public static function define()
    {
        $port = get_console_args('port', 8000);
        $public = get_console_args('t', 'public/');

        echo "Server has been start at :" . $port . " And Document root is " . $public . "\n";
        exec('php -S localhost:' . $port . ' -t ' . $public);
    }
}