<?php

namespace Drm\Core\classes;

use Drm\Core\classes\drmsys;

class Cli
{
    protected static $args = array();
    protected static $STDOUT;
    protected static $STDERR;
    public static $readline_support = false;
    public static $nocolor = false;

    protected static $foreground_colors = array(
        'black'            => '0;30',
        'dark_gray'        => '1;30',
        'blue'            => '0;34',
        'dark_blue'        => '1;34',
        'light_blue'    => '1;34',
        'green'            => '0;32',
        'light_green'    => '1;32',
        'cyan'            => '0;36',
        'light_cyan'    => '1;36',
        'red'            => '0;31',
        'light_red'        => '1;31',
        'purple'        => '0;35',
        'light_purple'    => '1;35',
        'light_yellow'    => '0;33',
        'yellow'        => '1;33',
        'light_gray'    => '0;37',
        'white'            => '1;37',
    );

    protected static $background_colors = array(
        'black'            => '40',
        'red'            => '41',
        'green'            => '42',
        'yellow'        => '43',
        'blue'            => '44',
        'magenta'        => '45',
        'cyan'            => '46',
        'light_gray'    => '47',
    );

    public static function _init()
    {
        for ($i = 1; $i < $_SERVER['argc']; $i++) {
            $arg = explode('=', $_SERVER['argv'][$i]);

            static::$args[$i] = $arg[0];

            if (count($arg) > 1 || strncmp($arg[0], '-', 1) === 0) {
                static::$args[ltrim($arg[0], '-')] = isset($arg[1]) ? $arg[1] : true;
            }
        }

        static::$readline_support = extension_loaded('readline');

        static::$STDERR = STDERR;
        static::$STDOUT = STDOUT;
    }

    public static function color($text, $foreground, $background = null, $format = null)
    {
        if (!Input::server('ANSICON')) {
            return $text;
        }

        if (static::$nocolor) {
            return $text;
        }

        $string = "\033[" . static::$foreground_colors[$foreground] . "m";

        if ($background !== null) {
            $string .= "\033[" . static::$background_colors[$background] . "m";
        }

        if ($format === 'underline') {
            $string .= "\033[4m";
        }

        $string .= $text . "\033[0m";

        return $string;
    }

    public static function input($prefix = '')
    {
        if (static::$readline_support) {
            return readline($prefix);
        }

        echo $prefix;
        return fgets(STDIN);
    }
    public static function write($text = '', $foreground = null, $background = null)
    {
        if (is_array($text)) {
            $text = implode(PHP_EOL, $text);
        }

        if ($foreground or $background) {
            $text = static::color($text, $foreground, $background);
        }

        fwrite(static::$STDOUT, $text . PHP_EOL);
    }
    public static function option($name, $default = null)
    {
        if (!isset(static::$args[$name])) {
            return drmsys::value($default);
        }
        return static::$args[$name];
    }
}