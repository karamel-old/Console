<?php

namespace Karamel\Console\Commands\Make;

use Karamel\Console\Interfaces\ICommand;

class Model implements ICommand
{
    public static function define()
    {
        $temp = "<?php
namespace ####NAMESPACE### ;
        
class ####CLASSNAME### {
        
}
        ";
        global $argv;
        $explode = explode('/', $argv[2]);
        $filename = array_pop($explode);
        mkdir(implode('/', $explode));
        $file = fopen($argv[2] . '.php', 'w+');
        $temp = str_replace('####NAMESPACE###', array_pop(explode('/', $argv[2])), $temp);
        $temp = str_replace('####CLASSNAME###', $filename, $temp);
        fwrite($file, $temp);
//        fwrite($filename ,'w+');
    }
}