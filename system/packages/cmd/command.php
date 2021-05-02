<?php

namespace cmd;

use Drm\Core\classes\Cli;
use Drm\Core\DRM;

class command
{
    public static function init($args)
    {

        // Remove flag options from the main argument list
        $args = self::_clear_args($args);


        if (!isset($args[1])) {
            if (Cli::option('v', Cli::option('version'))) {
                Cli::write('Fuel: ' . DRM::version('system'));
                return;
            }
            return;
        }
    }
    protected static function _clear_args($actions = array())
    {
        foreach ($actions as $key => $action) {
            if (substr($action, 0, 1) === '-') {
                unset($actions[$key]);
            }

            // get rid of any junk added by Powershell on Windows...
            isset($actions[$key]) and $actions[$key] = trim($actions[$key]);
        }

        return $actions;
    }
}