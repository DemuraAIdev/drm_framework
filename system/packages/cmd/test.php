<?php

use Drm\Core\DRM;
use Drm\Core\classes\Dates;
use Drm\Core\classes\decode;
use Drm\Core\classes\Database;

$app = new Drm;
echo 'Test 1 Compleat' . PHP_EOL;

echo dates::showtime('Y-m-d', 'America/New_York') . PHP_EOL;
echo 'Test 2 Compleat' . PHP_EOL;

decode::base64('VEVTVCBCQVNFNjQgREVDT0RF');
echo  PHP_EOL;
echo 'Test 3 Compleat' . PHP_EOL;


$json = '[{
    "Drm": "Test JSON DECODE"
}]';
decode::json($json, 'Drm', '0');
echo  PHP_EOL;
echo 'Test 4 Compleat' . PHP_EOL;

$db = new Database;
echo 'Get Database...';
echo 'Test 5 Compleat' . PHP_EOL;