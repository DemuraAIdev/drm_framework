<?php

use Drm\Core\classes\logs;

error_reporting(0);
function tanganiError1($level, $message, $file, $line)
{
    if (DEBUG == false) {
        die(include('errorpage.php'));
    }
    echo "<div style='padding: 2rem; background: rgba(200, 0, 0, 0.5); color: white'>";
    echo    "<b>Terjadi FATAL Error</b>";
    echo    "<p>[{$level}] {$message}<br> <b>locate :</b>{$file}<br><b>Line :</b>{$line}</p>";
    echo "</div>";
    logs::logerror(
        "Fatal Error" .
            "[{$level}] {$message}" . PHP_EOL .
            "Locate :{$file}" . PHP_EOL .
            "Line :{$line}" . PHP_EOL .
            date("F j, Y, g:i a") . PHP_EOL .
            "-------------------------" . PHP_EOL
    );

    return true;
}

function tanganiError($level, $message, $file, $line)
{
    if (DEBUG == false) {
        die(include('errorpage.php'));
    }
    include 'error_handling.php';
    logs::logerror(
        "Fatal Error" .
            "[{$level}] {$message}" . PHP_EOL .
            "Locate :{$file}" . PHP_EOL .
            "Line :{$line}" . PHP_EOL .
            date("F j, Y, g:i a") . PHP_EOL .
            "-------------------------" . PHP_EOL
    );

    return true;
}

set_error_handler("tanganiError");

register_shutdown_function(function () {
    if (error_get_last()) {
        # ambil error terakhir
        $error = (object) error_get_last();

        # hapus semua output sebelum terjadi error
        ob_end_clean();

        tanganiError1(
            $error->type,
            $error->message,
            $error->file,
            $error->line
        );
    }
});