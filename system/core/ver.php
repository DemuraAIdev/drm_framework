<?php

namespace Drm\Core;

class ver
{

    public static function DrmVer($App)
    {
        $ver = file_get_contents(ROOT . "version.json");
        $json = json_decode($ver, TRUE);
        echo $json[0][$App];
    }
    public static function ClassVer($App)
    {
        $ver = file_get_contents(ROOT . "version.json");
        $json = json_decode($ver, TRUE);
        echo $json[1][$App];
    }
}