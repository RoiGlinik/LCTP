<?php

$pattern = array("/\\b({$C}[e]([ˀˁr]))([u]$C)$suffix\\b/u");
$pattern_rep = array('\2\3\4');
$exceptions = array(
    'derušim',

);

for($i = 0; $i< sizeof($pattern) ; $i++)
{
    #print($pattern[$i]);
    $text = preg_match_with_exceptions($pattern[$i], $pattern_rep[$i] ,$exceptions, $text);
}
