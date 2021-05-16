<?php

namespace Drm\Core\classes;

class decode
{
    /**
     * JSON_PATH
     * 
     * Decode a json file to variable at the specified location
     * 
     *Usage : decode::json('$PATH', '0', 'name')
     * Locate drm_frm/public/json/
     * 
     * @param string $file
     * @param string $var
     * @param string $line
     */
    public static function json_path($file, $var, $line)
    {
        $ver = file_get_contents(BASEURL . "json/$file.json");
        $json = json_decode($ver, TRUE);
        echo $json[$line][$var];
    }

    /**
     * JSON_DECODE
     * 
     * Decode a json to variable
     * 
     * @param string $json
     * @param string $var
     * @param string $line
     */
    public static function json($json, $var, $line = null)
    {
        if (isset($line)) {
            $json = json_decode($json, TRUE);
            echo $json[$line][$var];
        } else {
            var_dump(json_decode($json, true));
        }
    }

    /**
     * base64_DECODE
     * 
     * Decode a BASE64 to variable
     * 
     * @param string $contents
     * */
    public static function base64($contents)
    {
        echo base64_encode($contents);
    }

    //Cooming soon
}