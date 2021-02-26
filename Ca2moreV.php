<?php

$pattern = array(
    "/(\\b($C)[a](($C$V){2,})($C|$V)*(?!ot))\\b/u",
    "/\\b(($C)[a]($C$V$C*$V*$C*)-)/u",
    '/\\bˀabal\\b/u',

);


$pattern_rep = array('\2\3\5','\2\3-','ˀbal');
$exceptions = array(
    "ˀarahu",
    "mate-", // only 1 V is needed in case of a dash(-)
    "hayiti",
    "raˀi",
    'laken',
    'ḥalonot',
    'ˀalenbi',
    'haganot',
    'halaknu',
    'baṭuaḥ',
    'ˁaleiha',
    'hayinu',
    'maçaˀnu',
    'bakita',
    'laredet',
    'ḥašabnu',
    'nakeḥu',
    'mašehu',
    'ˀaḥeret',
    'šabuˁa',
    'parašot',
    'ˀayelet',
    'çalašim',
    'zaruˁa',
    'çarepati',
);

for($i = 0; $i< sizeof($pattern) ; $i++)
{
    $text = preg_match_with_exceptions($pattern[$i], $pattern_rep[$i] ,$exceptions, $text);
}
