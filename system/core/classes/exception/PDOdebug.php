<?php

namespace Drm\Core\classes\exception;

use Drm\Core\classes\logs;

class PDOdebug
{
    public function exception($isi)
    {
        if (PDO_DEBUG == true) {
            logs::debug("PDO ERROR" . PHP_EOL . $isi . PHP_EOL . '----------------', 'PDO');
            die($isi);
        } else {
            die(include('errorpage.php'));
            return false;
        }
    }
}