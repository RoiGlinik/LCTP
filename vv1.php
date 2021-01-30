<?php
// find word with the suffix
// remove it and add each of V in the end of it
// search for it in middle exceptions or end.

function check_patterns_with_no_suffix_delete_e($words_with_suffix,$suffix_replace, $patterns, $normal_patterns_rep, $text)
{
    $matches_replace = array();
    //remove suffixes
    $words_without_suffix = preg_replace($suffix_replace,"\\2",$words_with_suffix);

    $j = 0;
    foreach( $words_without_suffix as $match)
    {
        $matches_replace[$j] = $words_with_suffix[$j];
        for($i = 0; $i < count($patterns) ; $i++)
        {
            if(preg_match($pattern[$i], $match))
            {

                break;
            }
        }
        $j++;
    }
    //apply normal patterns on words with e added
    for($i = 0; $i < count($normal_patterns); $i++)
    {
        $words_without_suffix = preg_replace($normal_patterns[$i],$normal_patterns_rep[$i], $words_without_suffix);
    } 

    //remove e 
    for($i = 0; $i < count($words_with_suffix) ; $i++ ) 
    {
        $words_without_suffix[$i] = remove_letter_e($words_without_suffix[$i]);
    }

    //add  suffixes again after applying patterns and replace with orignal text.
    for($i = 0; $i < count($words_with_suffix) ; $i++ ) 
    {
        $length = strlen(utf8_decode($words_with_suffix[$i])); 
        $matches_replace[$i] = $words_without_suffix[$i] . substr($words_with_suffix[$i], -2);
    }

    for( $i=0;$i< count($words_with_suffix) ;$i++)
        $text = str_replace($words_with_suffix[$i],$matches_replace[$i],$text);
    //create replacement array.
    return $text;
}
    
$suffix_patterns = array(
    "/((\S*)([u][t]\\b))/u",
    "/((\S*)([o][n]\b))/u",
    "/((\S*)([a][y][m]\b))/u",
    "/((\S*)([i][y][u][t]\b))/u",
    "/((\S*)([i][t]\b))/u",
    "/((\S*)([i][y][y][u][t]\b))/u",
    "/((\S*)([i][m]\b))/u",
    "/((\S*)([o][t]\b))/u"
    );

    $suffix_patterns_con =  "/([^-,.\n ]*)(ut|at|on|aym|iyut|it|iyyut|im|ot|ahem|an|u|i|a|e)\\b/u";


$suffix_replace = array(
'([u][t])','([o][n])','([a][y][m])','([i][y][u][t])','([i][t])',
'([i][y][y][u][t])','([i][m])','([o][t])');
    

function longWord($var) { return(strlen($var) >3 ); }

function check_micpal_with_no_suffix($matches, $suffix_patterns_con,$text , $no_pattern_micpal_middle) 
{
    if(empty($matches))
        return;

    $matches_replace = array_fill(0, count($matches), "");
    $V = array("a","i","e","u","o",""); 

    for($i = 0 ; $i < count($matches) ; $i++)
    {       
        $match = $matches[$i];
        $suffix = get_suffix($suffix_patterns_con, $match);
        $word_without_suffix =  preg_replace($suffix_patterns_con,"\\1",$match);

        foreach($V as $v)
        {
            $iterator = $word_without_suffix . $v;

            if(array_key_exists( $iterator  , $no_pattern_micpal_middle ) ) 
            {

                $iterator  = $no_pattern_micpal_middle[$iterator];

                //remove added letter.
                if($v !== "")
                    $iterator = substr($iterator, 0, -1);

                $iterator .= $suffix;
  
                $matches_replace[$i] =  $iterator;
                break;
            } 
        } 
    }

    for( $i=0;$i<count($matches);$i++)
    {
        if(empty($matches_replace[$i]))
            continue;

        $text = str_replace($matches[$i],$matches_replace[$i],$text);
    }

return $text;
}

//find suffix words.

function get_suffix_words($suffixPattern,$text)
{
    $suffix_words = array();
    if(preg_match_all($suffixPattern, $text, $suffix_words))
    {
        $suffix_words = $suffix_words[0];        
        $suffix_words = array_unique($suffix_words);
        $suffix_words = array_filter($suffix_words,"longWord");
        $suffix_words = array_values($suffix_words);
        //$suffix_words = array_filter($suffix_words);
    }

    return $suffix_words;
}

function remove_suffix($suffixs,$words)
{
    return preg_replace($suffixs,"",$words);
}

function get_suffix($suffix_patterns_con, $word)
{
    return preg_replace($suffix_patterns_con,"\\2",$word);
}

function add_letter_e($word)
{
    // add e letter in n-1 position of string.
    $length = strlen(utf8_decode($word)); 
    $new_suffix = "e";
    $new_suffix .= mb_substr($word, -1);

    $new_prefix = mb_substr($word , 0 , $length-1);

    return $new_prefix . $new_suffix;
}

function remove_letter_e($word)
{ // add e letter in n-1 position of string.
    $new_suffix = mb_substr($word, -1);
    $new_prefix = mb_substr($word, 0, -2);
    return $new_prefix . $new_suffix;
    //return substr_replace($word, '', -2, 1);
}

function check_patterns_with_no_suffix_add_e($words_with_suffix,$suffix_replace, $normal_patterns, $normal_patterns_rep, $text)
{
    $matches_replace = array();
    //remove suffixes
    $words_without_suffix = preg_replace($suffix_replace,"\\2",$words_with_suffix);
    $words_to_get_suffix = $words_without_suffix;
    //print_r ($words_without_suffix);
    //add e in n-1 place.
    for($i = 0; $i < count($words_with_suffix) ; $i++ ) 
    {
        $words_without_suffix[$i] = add_letter_e($words_without_suffix[$i]);
    }
    //print_r ($words_without_suffix);

    //apply normal patterns on words with e added
    for($i = 0; $i < count($normal_patterns); $i++)
    {
        $words_without_suffix = preg_replace($normal_patterns[$i],$normal_patterns_rep[$i], $words_without_suffix);
    }
    //print_r ($words_without_suffix);
    
    //remove e 
    for($i = 0; $i < count($words_with_suffix) ; $i++ ) 
    {
        $words_without_suffix[$i] = remove_letter_e($words_without_suffix[$i]);
    }

    //add suffixes again after applying patterns and replace with orignal text.
    for($i = 0; $i < count($words_with_suffix) ; $i++ ) 
    {
        $length = strlen(utf8_decode($words_with_suffix[$i])); 
 
        $suffix = str_replace($words_to_get_suffix[$i] ,"",$words_with_suffix[$i]);

        $matches_replace[$i] = $words_without_suffix[$i] . $suffix;
    }

    for( $i=0;$i< count($words_with_suffix) ;$i++)
        $text = str_replace($words_with_suffix[$i],$matches_replace[$i],$text);
    //create replacement array.
    return $text;
}

function check_micpal_with_no_suffix_changeAtoB($words_with_suffix,$suffix_replace,$A, $B, $data, $text)
{
    $matches_replace = array();

    $words_without_suffix = preg_replace($suffix_replace,"\\1",$words_with_suffix);
    $suffixes = preg_replace($suffix_replace,"\\2",$words_with_suffix);

    //check if words match the pattern
    //$intersect words with data to find relevant ones.
    $numOfWords = count($words_without_suffix);

    for($i = 0; $i < $numOfWords  ; $i++ ) 
    {

        if(!preg_match("/(.*)$A(.)/u",$words_without_suffix[$i]) ) {
            unset($words_without_suffix[$i]);
            continue;
        }
        //now change u to o in word
        $words_without_suffix[$i] = preg_replace("/(.*)$A(.)/u","\\1{$B}\\2",$words_without_suffix[$i]);

        if(!isset($data[$words_without_suffix[$i]])) {
            unset($words_without_suffix[$i]);
            continue;
        }

    }

    if(empty($words_without_suffix)) {
       return $text;
    }

    //intersect keys with matches - remove unrelevant suffixes from suffix array.
    $words_with_suffix = array_intersect_key($words_with_suffix,$words_without_suffix);
    $suffixes =  array_intersect_key($suffixes,$words_without_suffix);
    
    //enumerate again array keys.
    $words_with_suffix = array_values($words_with_suffix);
    $words_without_suffix = array_values($words_without_suffix);
    $suffixes = array_values($suffixes);

    //add micpal and change to o to u again again.
    $words_without_suffix = preg_replace("/(.*)[$B](.)\\b/u","\\1{$A}\\2\\2",$words_without_suffix);

    //add suffixes again after applying patterns and replace with orignal text.
    for($i = 0; $i < count($words_with_suffix) ; $i++ ) 
    {       
        $matches[$i] = $words_without_suffix[$i] . $suffixes[$i];
    }

    //replace orignal with new text.
    for( $i=0;$i< count($words_with_suffix) ;$i++)
        $text = str_replace($words_with_suffix[$i],$matches[$i],$text);
    return $text;
}


function check_micpal_with_no_suffix_changeUtoO_add_a($words_with_suffix,$suffix_replace, $data, $text)
{
    $matches_replace = array();
    //remove suffixes
    $words_without_suffix = preg_replace($suffix_replace,"\\2",$words_with_suffix);
    $words_to_get_suffix = $words_without_suffix;

    //change u to o in n-1 location.
    $words_without_suffix = preg_replace("/(.*)[u](.)\\b/u",'\1o\2',$words_without_suffix);
    //add a in the second place.

    for($i = 0; $i < count($words_without_suffix) ; $i++ ) 
    {
        $words_without_suffix[$i] = substr($words_without_suffix[$i],0,1) . "a" . substr($words_without_suffix[$i],1);
    }

    $words_without_suffix = array_flip($words_without_suffix);
    //handle part that need to be micpal
    $matches_keys = array_intersect_key($words_without_suffix,$data);
    $matches_keys = array_flip($matches_keys);
    $words_without_suffix = array_flip($words_without_suffix);

    //$words without suffix. intersect keys with matches

    $words_with_suffix = array_intersect_key($words_with_suffix,$matches_keys);
    $words_without_suffix =  array_intersect_key($words_without_suffix,$matches_keys);
    $words_to_get_suffix =  array_intersect_key($words_to_get_suffix,$matches_keys);
    
    //enumerate again array keys.
    $words_with_suffix = array_values($words_with_suffix);
    $words_without_suffix = array_values($words_without_suffix);
    $words_to_get_suffix = array_values($words_to_get_suffix);

    $words_without_suffix = array_flip($words_without_suffix);
    $matches = array_intersect_key($data,$words_without_suffix);

    //add micpal and change to u again.
    $matches_keys = array_intersect_key($data,$words_without_suffix);
    $matches = preg_replace("/(.)[a](.*)[o](.{2})\\b/u",'\1\2u\3',$matches);
    $matches = array_values($matches);

    //add suffixes again after applying patterns and replace with orignal text.
    for($i = 0; $i < count($words_with_suffix) ; $i++ ) 
    {
        $suffix = str_replace($words_to_get_suffix[$i],"",$words_with_suffix[$i]);
        
        $matches[$i] = $matches[$i] . $suffix;
    }

    for( $i=0;$i< count($words_with_suffix) ;$i++)
        $text = str_replace($words_with_suffix[$i],$matches[$i],$text);
    return $text;
}

// words.
if(preg_match($suffix_patterns_con, $text))
{
    $words = get_suffix_words($suffix_patterns_con, $text);

    if(!empty($words))
    {

      $text = check_micpal_with_no_suffix_changeAtoB($words,$suffix_patterns_con,'i','e', $no_pattern_micpal_end ,$text);
      $text = check_micpal_with_no_suffix_changeAtoB($words,$suffix_patterns_con,'u','o', $no_pattern_micpal_end ,$text);
      $text = check_micpal_with_no_suffix_changeUtoO_add_a($words,$suffix_patterns_con, $no_pattern_micpal_end ,$text);

      $text = check_micpal_with_no_suffix($words,$suffix_patterns_con,$text,  $no_pattern_micpal_middle  );
      $text = check_micpal_with_no_suffix($words,$suffix_patterns_con,$text,  $no_pattern_micpal_end  );

    }
}

$suffix_patterns_verb_con =  "/(($C|$V)+)((ti)|(ta)|(t)|(nu)|(tem))/u";

function check_patterns_with_no_suffix_verbs($words,$suffix_patterns, $p, $rep, $text)
{

    $suffixes = preg_replace($suffix_patterns,"\\3", $words);

    $word_without_suffix =  preg_replace($suffix_patterns,"\\1",$words);

    $word_without_suffix_rep =  preg_replace($p,$rep,$word_without_suffix);

    for($i = 0; $i < count($words) ; $i++)
    {
        $word_without_suffix_rep[$i] =  $word_without_suffix_rep[$i] . $suffixes[$i];
    }
    return str_replace($words, $word_without_suffix_rep , $text );

}

$pattern = "/(($C|$V)+we)/u";
$rep = "\\1i";

//verb suffixes section.
if(preg_match($suffix_patterns_verb_con, $text))
{
    $words = get_suffix_words($suffix_patterns_verb_con, $text);

    if(!empty($words))
    {
      // $text = check_patterns_with_no_suffix_add_e($words,$suffix_patterns_con,$normal_patterns,$normal_patterns_rep ,$text);
      $text = check_patterns_with_no_suffix_verbs($words,$suffix_patterns_verb_con, $pattern, $rep ,$text);
    
       
    }
   
}
