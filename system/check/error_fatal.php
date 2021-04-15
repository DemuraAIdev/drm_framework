<?php



function tanganiError1($level, $message, $file, $line)
{
    echo "<div style='padding: 2rem; background: rgba(200, 0, 0, 0.5); color: white'>";
    echo    "<b>Terjadi FATAL Error</b>";
    echo    "<p>[{$level}] {$message}<br> <b>locate :</b>{$file}<br><b>Line :</b>{$line}</p>";
    echo "</div>";

    return true;
}
error_reporting(0);
function tanganiError($level, $message, $file, $line, $error_con)
{
    include 'error_handling.php';

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