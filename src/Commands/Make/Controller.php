<?php

namespace Karamel\Console\Commands\Make;

use Karamel\Console\Interfaces\ICommand;

class Controller implements ICommand
{

    public static function define()
    {
        global $argv;

        $template = "<?php

namespace ###NAMESPACE###;

class ###CLASSNAME###
{
    
}";
        $command = $argv[2];
        if ($command == '--help') {
            echo "Help";
        } else {

            $tmp = explode("/", $command);
            if (count($tmp) == 1) {
                fopen($command . '.php', 'w+');
            } else {
                $classname = array_pop($tmp);
                if (!file_exists(implode("/", $tmp)))
                    mkdir(implode("/", $tmp), 0755, true);
                $template = str_replace("###CLASSNAME###", $classname, $template);
                $template = str_replace("###NAMESPACE###", implode("\\", $tmp), $template);
                $file = fopen($command . '.php', 'w+');
                fwrite($file, $template);
                fclose($file);
            }

        }
    }
}