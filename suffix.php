<?php

	$suffix_patterns = array(
	"/\\b(($C|$V){2,})e({$C}(ut|on|aym|iyut|it|iyyut|ot|im))\\b/u",

	"/((($C|$V){2,})ayim)/u", //9
	"/\\b((($C|$V)+)ehem)\\b/u", //10
	"/\\b((($C|$V)+)ai)\\b/u", //11

	"/\\b(($C|$V)+[e]{$C})et\\b/u",
	"/(\\b(\\S*)act)\\b/u",
	"/(\\b(($C|$V){4,})yim)\\b/u",
	"/\\b(($C|$V){2,})({$V})aˁ\\b/u", //15
	);

	//print_r($suffix_patterns);
	$suffix_patterns_rep = array(
	'\1\3',

	'\2aym',//9
	'\2eihem',//10
	'\2ay',//11

	'\1t',
	'\2ect',
	'\2ym',
	'\1\3ˁ'
	);

	$exceptions = array(
		"heççegim",
		'šˀelot',
		'ˀemet',
		'gderot',		
		'yiśrˀelit'
	);

	$size = count($suffix_patterns);
	for($i = 0; $i < $size ; $i++ ) {
		$text = preg_match_with_exceptions($suffix_patterns[$i], $suffix_patterns_rep[$i] ,$exceptions, $text);
	}