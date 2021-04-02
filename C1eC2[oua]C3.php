<?php

$pattern = array("/(\\b$C)[e]({$C}[aou]$C)\\b/u");
$pattern_rep = array('\1\2');
$exceptions = array(
    "tebel",
    'qedar',
    'ˁeśaw',
    'ˀebar',
    'nekar',
    'ḥemar',
    'lebab',
    'ˁenab',
    'šegal',
    'šekar',
    'śeˁar',
    'çelaˁ',
    'meˀah',
    'šehuˀ',
    'ˀeḥad',
    'ˀezor'
);

for($i = 0; $i< sizeof($pattern) ; $i++)
{
    #print($pattern[$i]);
    $text = preg_match_with_exceptions($pattern[$i], $pattern_rep[$i] ,$exceptions, $text);
}
