<?php

$pattern = array( "/\\b({$C}a($C))([e]$C)\\b/u");
$pattern_rep = array('\1\2\3');
$exceptions = array(
    'hagen',
    'laken',

);

for($i = 0; $i< sizeof($pattern) ; $i++)
{
    #print($pattern[$i]);
    $text = preg_match_with_exceptions($pattern[$i], $pattern_rep[$i] ,$exceptions, $text);
}
