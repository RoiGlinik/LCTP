<?php
        //normal buildings - adding micpal with no exceptions 
        
	$normal_patterns = array(
// "(($C$V$G1)$V($C))",
// "((\\b$C$V$C)$V($G))",
// "(\\b($C$V"."[y])[i]($C))",
// "(\\b($C$V$C)[i]([y]))",
// "((\\b$C$V$C)[e]($C))", 
//"(\\b($C{$C}[a]$C{$C}[a]($C))\\b)" , //5
// "(\\b($C"."[i]($C))([o]$C))" ,// optional need check this pattern.
//"/(\\b([h]|[m]|[ˀ]|[n]|[t]|[y])[a]($C))([i]$C)/u", // yahid pattern change to exception
//"/(\\b([nytmˀ]?$C"."[aiu]($C))($V$C)\\b)/u", //13 not sure if needed.
//"/\\b({$G})a({$C}i({$C})\\3a)\\b/u", // hariga ->hriga
//"/\\b({$CNOG})e({$C}i({$C})\\3a)\\b/u", // yešiba -> yšiba    
/*pattern that will be ignore in the regex operation.
will replace matches with %s and then recover them with vsprint.      
*/
        "/(\\b({$C}[i]($C))([u]$C))/u", //1
        "/(\\b([nytmhˀ][i][t]{$C}[a]($C))([ea]$C))/u", //2
        "/(\\b(([nytmhˀ][i])[t]([jsš])[a]($C)\\4)([e]$C))/u", //3
        "/(((\\b[nytmhˀ][i])[t]([c])[a]($C)\\5)([e]$C))/u", //4

        "/(\\b({$C}[i]($C))([e]$C))/u", //5
        "/(\\b({$C}[i]({$C}))([a]{$C}{$suffix}))/ui", //6

        "/(\\b([hmˀnty][u]($C))([a]$C)\\b)/ui", //7
        "/(\\b([nythˀ][i]($C))([a]{$C}[e]$C))/u", //8
        "/\\b({$C}[e]([ˀˁr]))([u]$C)$suffix\\b/u", //9
        "/\\b({$C}[i]($C))([i]{$C1}[uai]?)\\b/u", //10
        "/\\b([h][i]($C))([i]$C)\\b/u", //12
   
        "/(\\b([h][i][sš][t][a]($C))([e]$C))/u", //11
        "/(\\b([h][i][z][d][a]($C))([e]$C))/u", //12
        "/(\\b([h][i][ç][ṭ][a]($C))([e]$C))/u", //13
        "/(\\b([nytmhˀ][i][t]{$C}[a]($C))($C$suffix1))/u", //14 hityasbut /
        "/\\b([m]{$C}[ua]({$C}))([a]{$C})\\b/u", // myuḥad 15
        "/\\b({$G})a({$C}i{$C}a)\\b/u", // hariga ->hriga 16
        "/\\b({$CNOG})e({$C}i{$C}a)\\b/u", // yešiba -> yšiba   17 

        "/\\b({$C}a($C))([e]$C)\\b/u", //18
        );
    
        //print_r($normal_patterns);
        $normal_patterns_rep = array(
        // '\1\2',
        // '\1\2',
        // '\1\2',
        // '\1\2',
        // '\1\2',
            
        '\2\3\4', //1
        '\2\3\4', //2
        '\2\3ta\4\4\5', //3
        '\3cṭa\5\5\6', //4
        //'\1\2\3', //5
        '\2\3\4', //6
        //'\1\2\3',
        '\2\3\4', //7
        //'\1\2\3', //this is the yahid case...
        '\2\3\4', //8
        '\2\3\4', //9
        '\1\2\3\4', //10
        '\1\2\3', //11
        '\1\2\3', //12
        '\2\3\4', //13
        '\2\3\4', //14
        '\2\3\4', //15
        '\2\3\4', //16
        '\1\2\3', //17
        '\1\2', //18
        '\1\2\3', //18

                

        //

        
        '\1\2\3\4',
        );
    
        $size = count($normal_patterns);
        for($i = 0; $i < $size ; $i++ ) {
                $text = preg_replace($normal_patterns[$i], $normal_patterns_rep[$i], $text); 	 
        }