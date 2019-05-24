<?php

$patterns4 = array(
"/\\b(({$C}[a])($C)([u]$C))\\b/u",
"/\\b(({$C}[a])($C)([i]$C))\\b/u",
"/\\b(({$C}[a]($C))([a]{$C}))\\b/u"
);

$patterns4_rep = array(
'\1\3',
'\2\4',
'\1\3'
);

$patterns4_rep_fix = array(
'\2\3',
'\2\3\3\4',
'\2\3'
);

$exceptions = array( 
        'nappax', 'sabbal', 'gannab', 'kammut', 'kappit','mappit','kallaˀ','naggid');

$size = count($patterns4);
for($i = 0; $i < $size; $i++ ) 
{
        $text = preg_replace_with_exceptions($patterns4[$i], $patterns4_rep[$i],$patterns4_rep_fix[$i], $exceptions, $text); 
}