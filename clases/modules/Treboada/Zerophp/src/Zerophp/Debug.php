<?php
namespace Treboada\Zerophp;

class Debug
{
    public static function dump(&$var, $before = "<pre>", $after = "</pre>")
    {
        echo $before;

        print_r($var);

        echo $after;
    }

    public static function dump_die (&$var)
    {
        Debug::dump($var);
        die();
    }
}
