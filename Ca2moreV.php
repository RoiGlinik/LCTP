<?php

$pattern = array("/(\\b($C)[a]($C$V$C*$V$C*$V*))\\b/u","/\\b(($C)[a]($C$V$C*$V*$C*)-)/u");
$pattern_rep = array('\2\3','\2\3-');
$exceptions = array(
    "ˀarahu",
    "mate-", // only 1 V is needed in case of a dash(-)
    "hayiti",
    "raˀi",
    'laken',
    'ḥalonot',
    'ˀalenbi'
);

for($i = 0; $i< sizeof($pattern) ; $i++)
{
    $text = preg_match_with_exceptions($pattern[$i], $pattern_rep[$i] ,$exceptions, $text);
}
