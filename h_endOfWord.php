<?php

// remove h from end of words.
$pattern = array( "/\\b(($C|$V)*[a])h\\b/u",
);

$pattern_rep = array('\1');

$exceptions = "/{$C}{$C}(atah)/";


$h_exception = array(
 
'ˁerutah',
'šṭiḥah' ,
'šaˁah' ,
'šbuˁah' ,
'škiḥah' ,
'šliḥah' ,
'šluḥah' ,
'šmuˁah' ,
'šoḥah' ,
'špuˁah' ,
'šuḥa.h' ,
'ṭbiḥah' ,
'ṭoˁah' ,
'ṭoˁeh' ,
'ṭpaḥah' ,
'ṭpiḥah' ,
'ṭriḥah' ,
'ṭuḥah' ,
'ˀabṭaḥah' ,
'ˀargiˁah' ,
'ˀliḥah' ,
'ˀnaḥah' ,
'ˀriḥah' ,
'ˀruḥah' ,
'bṭiḥah' ,
'baṭṭuḥah' ,
'bdiḥah' ,
'bliḥah' ,
'bluˁah' ,
'briḥah' ,
'buˁah' ,
'caḥcaḥah' ,
'caḥcaḥah' ,
'cbuˁah' ,
'cliḥah' ,
'cmiḥah' ,
'cniḥah' ,
'cpiḥah' ,
'criḥah' ,
'cwiḥah' ,
'cḥiḥah' ,
'cḥuḥah' ,
'gliḥah' ,
'gnaḥah' ,
'gniḥah' ,
'hšaḥah' ,
'hṭaḥah' ,
'hašṭaḥah' ,
'hašbaˁah' ,
'hašbaḥah' ,
'hašgaḥah' ,
'haškaḥah' ,
'hašlaḥah' ,
'hašmaˁah' ,
'hašpaˁah' ,
'hašqaˁah' ,
'haṭbaˁah' ,
'haṭmaˁah' ,
'haṭpaḥah' ,
'haṭraḥah' ,
'haˀlaḥah' ,
'haˀraḥah' ,
'habṭaḥah' ,
'habbaˁah' ,
'hablaˁah' ,
'hablaḥah' ,
'habqaˁah' ,
'habraḥah' ,
'hacbaˁah' ,
'haccaˁah' ,
'hacdaˁah' ,
'haclaḥah' ,
'hacmaḥah' ,
'hacnaˁah' ,
'hacnaḥah' ,
'hacraḥah' ,
'hacḥaḥah' ,
'haddaḥah' ,
'hadlaḥah' ,
'haggaˁah' ,
'hagraˁah' ,
'haknaˁah' ,
'hakraˁah' ,
'hakraḥah' ,
'hamšaḥah' ,
'hamlaḥah' ,
'hamtaḥah' ,
'hancaḥah' ,
'hannaḥah' ,
'hapcaˁah' ,
'hapgaˁah' ,
'happaḥah' ,
'hapqaˁah' ,
'hapqaḥah' ,
'hapraˁah' ,
'hapraḥah' ,
'hapsaˁah' ,
'haptaˁah' ,
'haqšaḥah' ,
'haqṭaˁah' ,
'haqcaˁah' ,
'haqdaḥah' ,
'haqlaˁah' ,
'haqmaḥah' ,
'haqqaˁah' ,
'haqraḥah' ,
'haršaˁah' ,
'harbaˁah' ,
'harcaˁah' ,
'hargaˁah' ,
'harqaˁah' ,
'hartaˁah' ,
'hartaḥah' ,
'harwaḥah' ,
'hasraḥah' ,
'hassaˁah' ,
'hassaqah' ,
'hassaḥah' ,
'hatlaˁah' ,
'hatnaˁah' ,
'hatnaḥah' ,
'hatraˁah' ,
'haznaḥah' ,
'hazraˁah' ,
'hazraḥah' ,
'hazzaˁah' ,
'hdaḥah' ,
'hgaḥah' ,
'hištaˁˁah' ,
'hitmaḥḥah' ,
'hitraˁˁah' ,
'hnaˁah' ,
'hnaḥah' ,
'hošaˁah' ,
'hodaˁah' ,
'hogaˁah' ,
'hokaḥah' ,
'hoqaˁah' ,
'hpaḥah' ,
'hpiḥah' ,
'hraˁah' ,
'hraˁah' ,
'hraḥah' ,
'jmeiḥah' ,
'jmeḥah' ,
'knaˁah' ,
'kobaˁah' ,
'ksiḥah' ,
'lqiḥah' ,
'mašqeˁah' ,
'maˁah' ,
'macbeˁah' ,
'macbiˁah' ,
'makseḥah' ,
'maltaˁah' ,
'mamleḥah' ,
'manniḥah' ,
'mapqiˁah' ,
'mapriˁah' ,
'maqceˁah' ,
'maqcuˁah' ,
'maqdeḥah' ,
'margeˁah' ,
'matpeḥah' ,
'maḥraˀah' ,
'mazreˁah' ,
'meltaḥah' ,
'merqaḥah' ,
'mišpaḥah' ,
'miṭbaˁah' ,
'miṭwaˀah' ,
'micbaˁah' ,
'micraˁah' ,
'midlaˁah' ,
'migraˁah' ,
'mimlaḥah' ,
'mipšaˁah' ,
'mipšaˁah' ,
'mipjaˁah' ,
'mipqaḥah' ,
'mipraˁah' ,
'mipsaˁah' ,
'mipsaˁah' ,
'mirbaˁah' ,
'mispaḥah' ,
'mitlaˁah' ,
'mizraˁah' ,
'mliḥah' ,
'mniḥah' ,
'mnuḥah' ,
'mošaˁah' ,
'mošiˁah' ,
'modaˁah' ,
'moḥah' ,
'mriḥah' ,
'mtiḥah' ,
'naḥah' ,
'nbiḥah' ,
'nciḥah' ,
'ngiḥah' ,
'nitmaḥḥah' ,
'nitqahhah' ,
'npiḥah' ,
'nsiḥah' ,
'ntiḥah' ,
'nuḥah' ,
'pšiḥah' ,
'paqquˁah' ,
'pciḥah' ,
'pcuˁah' ,
'peḥah' ,
'pliḥah' ,
'pqiḥah' ,
'pquˁah' ,
'priḥah' ,
'psiḥah' ,
'ptiḥah' ,
'qšiḥah' ,
'qbuˁah' ,
'qdiḥah' ,
'qliḥah' ,
'qpiḥh' ,
'qriḥah' ,
'raˁah' ,
'rbuˁah' ,
'rciḥah' ,
'rcuˁah' ,
'roˁeh' ,
'rqiḥah' ,
'rtiḥah' ,
'sliḥah' ,
'spiḥah' ,
'spuḥah' ,
'sriḥah' ,
'suḥah' ,
'tšuˁah' ,
'tamneˁah' ,
'tapšuˁah' ,
'timnaˁah' ,
'tnuˁah' ,
'tnuḥah' ,
'toˁah' ,
'todaˁah' ,
'tokaḥah' ,
'toleˁah' ,
'topaˁah' ,
'tpiḥah' ,
'truˁah' ,
'tḥiḥah' ,
'yšuˁah' ,
'zbiḥah' ,
'zniḥah' ,
'zriḥah' ,
'zwaˁah' ,
'zḥiḥah',
'bah',
'znabah',
);    


for($i = 0; $i< sizeof($pattern) ; $i++)
{
   $text = preg_match_with_pattern_exception_on_matches($pattern[$i], $pattern_rep[$i] ,$exceptions, $h_exception, $text);
}