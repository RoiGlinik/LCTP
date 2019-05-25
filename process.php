<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
mb_internal_encoding("UTF-8");

//'av-'
$trans = array( 'a' => 'a' , "‛" => "ˀ", "`" => "ˀ", '’' => 'ˀ', 'ʼ' => 'ˀ' , "b" => "b", "—" => '--',
 'v-'=>'w-',"v" => 'b', "V" => "B",
 'g' => 'g', 'd' => 'd', 'h' => 'h', 'Ṿ' => 'W',
 'ṿ' => 'w',  'z' => 'z', "z'"=>"ž", "Z'"=>"Ž", 'y' => 'y', 'k' => 'k', 'Kh' => 'K',
 'kh' => 'k', 'l' => 'l' , 'm' => 'm', 
 'n' => 'n' , 's' => 's', 'ʻ' => 'ˁ', '‘' => 'ˁ', "'" => 'ˁ',
 'p' => 'p', 'f' => 'p', 'F' => 'p', "Ts" => 'ç', "ts" => 'ç', 'ḳ' => 'q', 
 'ḳ' => 'q', 'Ḳ' => 'q', 'r' => 'r', 'sh' => 'š',
 'ś' => 'ś', 't' => 't', 'Sh' =>'š' );

 $eAynAin = array( "eˀa" ,  "eˀa" ,  "eˀa" );
 $eAynAout = array( "eˀˀa",  "eˀˀa",  "eˀˀa");

include 'words_names_special_list.php';

include 'no_pattern_micpal_end.php';
include 'no_pattern_micpal_middle.php';

function convertToRegEx( $arrayOfWords , $inputText )
{
    $suffix = "([u][t]|[o][t]|[o][n]|[a][y][m]|[i][y][u][t]|
    [i][t]|[i][y][y][u][t]|[i][m]|[o][t]|[e][i][k][a]|
    [e][k]|[k][a]|[y][i][k]|[k][e][m]|[k][e][n]|[e][k][a]|[e][n][u]|[a])?";

    foreach ($arrayOfWords as $key => $value)
    {
        $pattern = "/\\b($key)$suffix\\b/ui";
        $replace = "$value";
        $inputText = preg_replace($pattern, "$replace\\2", $inputText);
    }
    return $inputText;
}

function preg_match_with_pattern_exception_on_matches($pattern, $pattern_rep, $exception_pat,$exception_list, $input_string) 
{
	$matches = '';
	$output_string = $input_string;
	//print_r(preg_match_all($pattern, $input_string, $matches));
	if( preg_match_all($pattern, $input_string, $matches) ) 
	{

	$matches1 = preg_grep($exception_pat, $matches[0]);	

		if( isset($matches1) )
		{
			$matches = array_diff($matches[0], $matches1);
		}
		
		$matches = array_diff($matches,$exception_list);
		if( isset($matches) ){
			$replaces = preg_replace ($pattern,$pattern_rep, $matches);
			$output_string = (str_replace($matches, $replaces, $input_string));
		}

	}
		return $output_string;
}


function preg_match_with_pattern_exception($pattern, $pattern_rep, $exception_pat, $input_string) 
{
	$matches = '';
	$output_string = $input_string;

	if( preg_match_all($pattern, $input_string, $matches) ) 
	{

	preg_match_all($exception_pat, $input_string, $matches1);	

		if( isset($matches1[0]) )
		{
			$matches = array_diff($matches[0], $matches1[0]);
		}
			
		$replaces = preg_replace ($pattern,$pattern_rep, $matches);

		$output_string = (str_replace($matches, $replaces, $input_string));

	}
		return $output_string;
}


function preg_match_with_exceptions($pattern, $pattern_rep, $exceptions, $input_string) 
{

 $matches = '';
 $output_string = $input_string;
 //print_r(preg_match_all($pattern, $input_string, $matches));
 if( preg_match_all($pattern, $input_string, $matches) ) 
 {


 $matches = array_diff($matches[0], $exceptions);

 $replaces = preg_replace ($pattern,$pattern_rep, $matches);

 $output_string = (str_replace($matches, $replaces, $input_string));

 }
 return $output_string;
}


function preg_replace_with_exceptions($pattern, $pattern_rep ,
$pattern_rep_fix, $exceptions, $input_string) 
{

 $matches = '';
 $output_string = $input_string;

 if( preg_match_all($pattern, $input_string, $matches) ) 
 {
	
 //create micpal in the words for difference with exceptions bank.
 $matches_fix = preg_replace($pattern, $pattern_rep_fix, $matches[0]);

 $real_matches_replace = array_diff($matches_fix, $exceptions);

 $matches = array_intersect_key($matches[0], $real_matches_replace);

 $output_string = (str_replace($matches, $real_matches_replace, $input_string));

 }
 return $output_string;
}

if (isset($_POST['data'])){

	$C = '[^AIEOUaieou\s\- ]';
	$CNOG = '[^hḥˁˀAIEOUaieou\s\- ]';
	$V = '[aieouAIEOU]';
	$G = "[hḥˁˀ]";
	$G1 = "[ḥ]";
	$C1 = '[^tmaieoujsc$\s]';
	$C2 = '[^hḥˁˀtmaieoujsc$\s]';

	$text = $_POST['data'];
	$text = mb_strtolower( $text, 'UTF-8' );
	$text = " $text";
	$pattern = '';
	$result = '';

	$suffix = "((ut)|(ot)|(on)|(aym)|(iyut)|(it)|(iyyut)|(im)|(ot)|(eika)|(ek)|(ka)|(yik)|(kem)|(ken)|(eka)|(enu))?";
	$suffix1 = "((ut)|(ot)|(on)|(aym)|(iyut)|(it)|(iyyut)|(im)|(ot)|(eika)|(ek)|(ka)|(yik)|(kem)|(ken)|(eka)|(enu)|(ta))";

	#1 Translation from library congress letters to phonemic letters.
	$text = strtr($text, $trans);
	$s1 = array("g'" , "G'", "z'" , "Z'" , "c'", "C'");
	$sp1 = array("ǧ" , "Ǧ", "ž" , "Ž" , "č", "Č");
	$text = str_replace($s1, $sp1, $text);


	$fllc = array(
	" miha-" , " meha-", " u-"," weha-"," ube-"," v-",
	" uba-" ," umi-"," ulei-", " ule-"," keše-",
	"štayim","šebaˁ","šmonei","tešaˁ"," wela-",' o ',' uwe-',
	'šelo', 'šebo'          
	);
	$flp = array(
	" mi-ha-" , " me-ha-"," w-"," w-ha-"," w-b-"," w-",
	" w-ba-"," w-mi-"," w-l-", " w-l-"," kše-",
	"šteim","šbaˁ","šmone","tšaˁ"," we-l",' ˀo ',' w-b-',
	'še-lo', 'še-bo'
	);
	$text = str_ireplace($fllc, $flp, $text);


	//special words cases SEM/BEN
	//for every suffix delete the e 
	//for ka,kem switch e to i
	$pattern =  "/\\b(ben)($suffix1)\\b/u";
	$text = preg_replace($pattern, "bn\\2", $text);
	$pattern =  "/(ben)(ka|kem)\\b/u";
	$text = preg_replace($pattern, "bin\\2", $text);

	$pattern =  "/\\b(sem)($suffix1)\\b/u";
	$text = preg_replace($pattern, "sm\\2", $text);
	$pattern =  "/(sem)(ka|kem)\\b/u";
	$text = preg_replace($pattern, "sim\\2", $text);

	//1. add ^ to beginings of words.
	//2. If a word ends with ʻa\\b switch to aʻ\\b example: Yehoshuʻa

	//ignored pattern - add example later.
	//Hemshekhim, words like datiy and bein aswell.
	//concatenate pattern with new words.
	
	$ignored_pattern = "/\\b(([h][e]{$C}{$C}[e]{$C})|(bein)|[0-9+]|(datiy)|(Babel)|(šeni)){$suffix}\\b/u";
	//echo "$ignored_pattern"; 
	preg_match_all($ignored_pattern, $text, $matches);
	$matches = $matches[0];

	$text = preg_replace($ignored_pattern, '%s', $text);

	$pattern = array("/\\b($V(($C|$V)+))\\b/u", 
	"/(^($V([^ -]*))\\b)/u",
	"/([-]($V([^ -]*))\\b)/u",
	);

	$rep_pattern = array('ˀ\1', 'ˀ\2', '-ˀ\2');
	$text = preg_replace($pattern, $rep_pattern, $text);

	//
	// Names list and special words.
	//
	$text = convertNames($names, $text);


	
	// ...aGat# and not in this pattern haC1C2aC3at remove second a.
	$pattern = "/\\b(($C|$V)*[a]$G)at\\b/ui";
	$pattern_exp = "/\\b(ha$C{$C}a{$C}at)\\b/ui";
	$text = preg_match_with_pattern_exception($pattern,'\1t',$pattern_exp,$text);

	include 'vv1.php';
	include '[hm^nty][a]C[i]C.php'; //hagi‘o case          
	
	//special case rule 1 and 2 
	//adding ei to long words...
	//exei -> to xei in long words in the end
	//3. a word with 3 V when a is the first vowel -> a need to be removed.
	//3. example: gamurim =>  gmurim (a,u,i).
	//3. if first letter is G then will not work.
	//3. so need to add not G in this specific case.
	//3. will be using $C2 for this case.
	//3. add example later.
	//
	//LAST UPDATE:: rule number 3 changed to 
	//"/(\\b($C*)[a]($C$V$C*$V$C*))\\b/u"
	// from "/(\\b($C*)[a]($C*$V$C*$V$C*))\\b/u"
	
	//4. #.*[e]C[e]t$ -> #.*[e]C[t]$
	//5. #.*[a]C[t]$ -> #.*[e]C[t]$ 
	//6 YIM in end of words => YM. example: Yrušalayim => Yrušalaym
	//7 ^...VG[a]$ -> ^...VG$. example: Yehoshuʻa -> Yhošuˁ 
	//8 yamXXX -> yamXXX
	//9 aG1a{2,}.. -> aG1{2,} remove second a

	//fid VGV inside a word.
	$pattern = "/\\b(($C|$V)+)($V)($G)\\3(($C|$V){2,})\\b/u";
	$rep_pattern = '\1\3\4\5';
	$text = preg_replace($pattern, $rep_pattern, $text);

	//--------------
	//remove suffixes from words before applying the Ca2moveV rules .
	// $ignored_pattern = "/(\\b(($C|$V){3,})([u][t]|[o][n]|[a][y][m]|[i][y][u][t]|[i][t]|[i][y][y][u][t]|[i][m]|[o][t]|(an)|[i]|[a])\\b)/u";
	// //echo "$ignored_pattern"; 
	// preg_match_all($ignored_pattern, $text, $matchesSuffix);
	// $matchesSuffix = $matchesSuffix[4];
	// //print_r($matchesSuffix);
	// $text = preg_replace($ignored_pattern, '\2%s', $text);
	//echo $text;
	include	'Ca2moreV.php';
	//insert suffixes again.
	//$text = vsprintf($text, $matchesSuffix);
	//echo $text;
	//--------------


	$pattern = array( 
		"/\\b(($V|$C)+)[e](($V|$C)[e][i]\\b)/u"//3
		);
	$rep_pattern = array( '\1\3');
	$text = preg_replace($pattern, $rep_pattern, $text);
	          	
	include 'suffix.php';
	//include 'vv.php';

	#3 { b, l, k, v, sh}[e] -> delete e and put -
	$pattern = array( '/((\b[bBlLkKwWvVṾṿ])[ei][-])/u' );
	$rep_pattern = array('\2-');
	$text = preg_replace($pattern, $rep_pattern, $text);
	#3. Ba-word ha-word / Ba-word not(ha) -> B-word 
	#4. { b, l, k, v, sh}[ia] -> delete i and put -
	#5. Wa-dam ->  w-dam ,  Wa-C*VC*\\b -> W-C*VC*\\b
	#6. rearrange capital letters at begining of word.

	$pattern = array("/\\b(ba-)(($C|$V)+[ ](?!ha))/u", #1
	'/((\b[kKwWvVṾṿšŠ])[ia][-])/u', #2
	"/[lL]a-([^ ]*($|([ ][^h][^a][^-])))/u", #3
	"/($V)($C)[e](\\2$V)/ui", #4
	
	);
	$rep_pattern = array('b-\2',
	'\2-','l-\1','\1\2_\3');
	//$text = preg_replace($pattern, $rep_pattern, $text);

	//replace ben->bein also for suffixes case, example: benaym-> beinaym
	include 'ben_bein.php';

	include 'totax.php';
	$text = convertToRegEx($totax_list, $text);
	//in the begining of the word, added case when not only in begging of word.
	//CeCV -> CCV 
	//[e]->word ==> ei-[word]
	include 'normal_patterns.php';
	include 'CeCV.php';
	$text = convertToRegEx($CeCV_words, $text);
	//include 'C1C2[aeu].php';
	
	include 'words_ending_with_alif.php';
	$text = convertToRegEx($words_ending_with_alif, $text);
	
	
	$text = convertToRegEx($no_pattern_micpal_end, $text);
	$text = convertToRegEx($no_pattern_micpal_middle, $text);
	include 'C1eC2[oua]C3.php';
	//add i to words ending with e-
	$pattern = array(
	 "/\\b(($C|$V){4,}[e]\\b)/u",
	// "/([ ,]($C|$V){3,}[e])[-](($C|$V){3,})/u",
	// "/([ ,]($C*$V+$C*)[e])[-](($C|$V){3,})/u",
	);
	
    $rep_pattern = array( '\1i',  /*'\1i-\3', '\1i-\3'*/);
	$text = preg_replace($pattern, $rep_pattern, $text);
	include 'h_endOfWord.php';
	include 'aetAtEndOfWord.php';
	$text = strtr($text, $aetAtEndOfWord);
		
	//include 'special_patterns.php';

	$text = vsprintf($text, $matches);

header('Content-Type: text/plain; charset=utf-8');
echo (($text));

} else {
 
}

?>
