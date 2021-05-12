<?php

namespace Drm\Core\classes;

class decode
{
    public static function json($file, $var, $line)
    {
        $ver = file_get_contents(BASEURL . "json/$file.json");
        $json = json_decode($ver, TRUE);
        echo $json[$line][$var];
    }

    //Cooming soon
}