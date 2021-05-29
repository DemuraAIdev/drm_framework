<?php
if (file_exists('maintenance.php')) {
    if (MAINTENANCE == false) {
        unlink('maintenance.php');
    }
} else {
    switch (MAINTENANCE) {
        case 'true':
            $isi = '
<?php
define("reason_main", "' . MT_REASON . '");
            ';
            file_put_contents('maintenance.php', $isi, FILE_APPEND);
            break;
        case 'false':
            if (file_exists('maintenance.php')) {
                unlink('maintenance.php');
            }
        default:
            # code...
            break;
    }
}