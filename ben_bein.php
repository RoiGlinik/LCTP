<?php 


$pattern = array(
"/\\b(ben)\\b/u",
"/(ben)$suffix1\\b/ui"
);
$pattern_rep = array(
'bein',
'bein\2'
);

$size = count($pattern);
for($i = 0 ; $i < $size ; $i++ )
{
    $text = preg_replace($pattern[$i], $pattern_rep[$i], $text);
}