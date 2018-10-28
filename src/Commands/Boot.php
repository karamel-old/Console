<?php
namespace Karamel\Console\Commands;
use Karamel\Console\Facade\Console;

class Boot{
    public static function start()
    {
        Console::add('serve', 'Serve Server', '\Karamel\Console\Commands\Serve::define');

        Console::add('make:controller', 'Generate Controller files', '\Karamel\Console\Commands\Make\Controller::define');
        Console::add('make:model', 'Generate Model files', '\Karamel\Console\Commands\Make\Model::define');

        Console::add('key:generate', 'Generate Controller files', '\Karamel\Console\Commands\Make\Controller::define');

        Console::add('route:list', 'Generate Controller files', '\Karamel\Console\Commands\Make\Controller::define');
    }
}