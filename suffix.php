<?php

	$suffix_patterns = array(
	"/e({$C}(ut|on|aym|iyut|it|iyyut|ot))\\b/u",

	"/((($C|$V){2,})ayim)/u", //9
	"/\\b((($C|$V)+)ehem)\\b/u", //10
	"/\\b((($C|$V)+)ai)\\b/u", //11

	"/\\b(($C|$V)+[e]{$C})et\\b/u",
	"/(\\b(\\S*)[a][c][t])\\b/u",
	"/(\\b(\\S{4,})[y][i][m])\\b/u",
	
	);

	//print_r($suffix_patterns);
	$suffix_patterns_rep = array(
	'\1',

	'\2aym',//9
	'\2eihem',//10
	'\2ay',//11

	'\1t',
	'\2ect',
	'\2ym'
	);

	$exceptions = array(
		"heççegim",
		'šˀelot',
		'ˀemet',
	);

	$size = count($suffix_patterns);
	for($i = 0; $i < $size ; $i++ ) {
		$text = preg_match_with_exceptions($suffix_patterns[$i], $suffix_patterns_rep[$i] ,$exceptions, $text);
	}