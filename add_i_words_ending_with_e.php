<?php


	$pattern = array(
	 "/\\b(($C|$V){4,}[e]\\b)/u",
	// "/([ ,]($C|$V){3,}[e])[-](($C|$V){3,})/u",
	// "/([ ,]($C*$V+$C*)[e])[-](($C|$V){3,})/u",
	);
	
    $pattern_rep = array( '\1i',  /*'\1i-\3', '\1i-\3'*/);
    
    $exceptions = array(
        "nidme",
        "maˀne", 
        "harbe",
        "naˁśe"
    );
    
    for($i = 0; $i< sizeof($pattern) ; $i++)
    {
        $text = preg_match_with_exceptions($pattern[$i], $pattern_rep[$i] ,$exceptions, $text);
    }
    