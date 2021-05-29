<?php


$pattern = "/\\b([hmˀnty][a]($C))([i]$C)\\b/u";
$pattern_rep = '\1\2\3';
$exceptions = array(
    "yaḥid",
    'yamim',
    'tamid',
    'hayit',
    'nagid',
    'hakin',
    'naśiˀ',
    'nabil',
    'ˀaḥib',
    'haqim',
    'ˀamir',
    'yapim',
    'yaˀir'
);

$text = preg_match_with_exceptions($pattern, $pattern_rep ,
 $exceptions, $text);