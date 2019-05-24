<?php
// last letter is [aeu]
// word contains 2 C from the list, not necessary adjacent.
// add ˀ at the end of the word.

//examples: kala -> kalaˀ 
//          kole -> koleˀ

$relevant_cases = array (
    'bd', 'br', 'bṭ', 'bz', 'çb', 'çm', 'dk', 'ḥṭ', 'kl', 'mç', 'mḥ', 'ḥb',
    'ml', 'nś', 'pl', 'qm', 'qp', 'qr', 'rp', 'śn', 'ṭm', 'yç', 'yr');
             
for($i = 0; $i < sizeof($relevant_cases) ; $i++ )
{
    $C1 = $relevant_cases[$i][0];
    $C2 = $relevant_cases[$i][1];
    $patterna = "/(\\b($C|$V)*{$C1}($C|$V)*{$C2}($C|$V)*[aeu]) /";

    $text = preg_replace($patterna, '\1ˀ', $text); 	 
}





