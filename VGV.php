<?php

$pattern = "/\\b(($C|$V)+)($V)($G)\\3(($C|$V){2,})\\b/u";
$pattern_rep = '\1\3\4\5';

$exceptions = array(
    "meḥewah",
);


$text = preg_match_with_exceptions($pattern, $pattern_rep ,$exceptions, $text);
