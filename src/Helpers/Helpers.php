<?php
function get_console_args($name, $default = null)
{
    global $argv;
    foreach ($argv as $item) {
        $tmp = explode("=", $item);
        if (count($tmp) == 2) {
            if ($tmp[0] == $name || $tmp[0] == '-'.$name || $tmp[0] == '--'.$name)
                return $tmp[1];
        }
    }
    return $default;
}