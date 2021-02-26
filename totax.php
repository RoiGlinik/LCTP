<?php

// punction convertToRegEx( $arrayOpWords , $inputText )
// {
//     $suppix = "([u][t]|[o][t]|[o][n]|[a][y][m]|[i][y][u][t]|
//     [i][t]|[i][y][y][u][t]|[i][m]|[o][t]|[e][i][k][a]|
//     [e][k]|[k][a]|[y][i][k]|[k][e][m]|[k][e][n]|[e][k][a]|[e][n][u]|[a])?";

//     poreach ($arrayOpWords as $key => $value)
//     {
//         $pattern = "/\\b($key)$suppix\\b/ui";
//         //echo "$pattern";
//         $replace = "$value";
//         $inputText = preg_replace($pattern, "$replace\\2", $inputText);
//     }
//     return $inputText;
// }
// https://anydesk.com/remote-desktop

$totax_list = array (
 
    "ˀeben" => "ˀebn",
    "ˀeden" => "ˀedn",
    "ˀeder" => "edr",
    "ˀekep" => "ekep",
    "ˀelep" => "elp",
    "ˀemeš" => "emš",
    "ˀepes" => "ˀeps",
    "ˀepaˁ" => "epˁ",
   "ˀereb" => "ˀerb",
    "ˀerek" => "erk",
    "ˀereç" => "erç",
    "ˀareç" => "ˀarç",
   	"ˀešek" => "ˀešk" ,
    "beged" => "begd",
    "bedeq" => "bedq",
    "bahaṭ" => "bahṭ", 
   "baḥan" => "baḥn",
    "beṭaḥ" => "beṭḥ",
    "beṭen" => "beṭn",
    "beke" => "beke",
    "beker" => "bekr",
    "belaˁ" => "belˁ",
    "baˁal" => "baˁl",
    "baˁar" => "baˁr",
    "beçaˁ" => "beçˁ",
    "beçer" => "beçr",
    "beqaˁ" => "beqˁ",
	"berek" => "berk",
    "beśem" => "beśm",
    "beter" => "betr",
    "gebeˀ" => "gebˀ",
    "geber" => "gebr",
    "ˀešed" => "ešd",
    "gezaˁ" => "gezˁ",
    "geled" => "geld",
    "genez" => "genz",
    "gaˁaš" => "gaˁš",
    "gepen" => "gepn",
    "gerem" => "gere",
    "gereš" => "gerš",
    "gešem" => "gešm",
    "debeq" => "debq",
    "deber" => "debr",
    "degel" => "degl",
    "delep" => "delp",
    "demaˁ" => "demˁ",
    "derek" => "derk",
    "dešeˁ" => "dešˁ",
    "dešen" => "dešn",
    "hebel" => "hebl",
    "hege" => "hege",
    "heder" => "hede",
    "hemes" => "hems",
    "hereg" => "herg",
    "heres" => "hers",
    "zebed" => "zebd",
    "zebaḥ" => "zebḥ",
    "zebed" => "zebd",
    "zebaḥ" => "zebḥ",
    "zemer" => "zemr",
    "zaˁam" => "zaˁm",
    "zaˁaq" => "zaˁq",
    "zaˁap" => "zaˁp",
    "zeraḥ" => "zerḥ",
    "zerem" => "zerm",
    "zeraˁ" => "zerˁ",
    "ḥebel" => "ḥebl",
    "ḥeber" => "ḥebr",
    "ḥedel" => "ḥedl",
    "ḥeder" => "ḥedr",
    "ḥeled" => "ḥeld",
    "ḥeleç" => "ḥelç",
    "ḥemer" => "ḥemr",
    "ḥesed" => "ḥesd",
    "ḥeser" => "ḥesr",
    "ḥereb" => "ḥerb",
    "ḥereṭ" => "ḥerṭ",
    "ḥeres" => "ḥers",
    "ḥereś" => "ḥerś",
    "ḥetep" => "ḥetp",
    "ṭebaḥ" => "ṭebḥ",
    "ṭene" => "ṭene",
    "ṭaˁam" => "ṭaˁm",
    "ṭepaḥ" => "ṭepḥ",
    "ṭerep" => "ṭerp",
    "yedaˁ" => "yedˁ",
    "yaḥad" => "yaḥd",
    "yaḥaś" => "yaḥś",
    "yeled" => "yeld",
    "yeleq" => "yelq",
    "yaˁar" => "yaˁar",
    "yeqeb" => "yeqb",
    "yeraḥ" => "yerḥ",
    "yereq" => "yerq",
    "yešaḥ" => "yešḥ",
    "yešaˁ" => "yešˁ",
    "yeter" => "yetr",
    "kebel" => "kebl",
    "kebeś" => "kebś",
    "kebeš" => "kebš",
    "kaḥaš" => "kaḥš",
    "kele" => "kele",
    "keleb" => "kelb",
    "kelaḥ" => "kelḥ",
    "kese" => "kese",
    "kesel" => "kesl",
    "kesep" => "kesp",
    "kaˁas" => "kaˁs",
    "kepel" => "kepl",
    "keres" => "kers",
    "keraˁ" => "kerˁ",
    "kaseb" => "kasb", 
    "kešep" => "kešp",
    "ketem" => "ketm",
    "keter" => "ketr",
    "lahab" => "lahb",
    "lahag" => "lahg",
    "lahaṭ" => "lahṭ",
    "leḥem" => "leḥm",
    "laḥaç" => "laḥç",
    "laḥaš" => "laḥš",
    "leked" => "lekd",
    "laˁag" => "laˁg",
    "leqaḥ" => "leqḥ",
    "leqeṭ" => "leqṭ",
    "lešem" => "lešm",
    "letek" => "letek",
    "meged" => "megd",
    "mezeg" => "mezg",
    "maḥaç" => "maḥa",
    "mekes" => "meks",
    "meker" => "mekr",
    "melaḥ" => "melḥ",
    "meleṭ" => "melṭ",
    "melek" => "melk",
    "mesek" => "mesk",
    "maˁal" => "maˁl",
    "mered" => "merd",
    "mešek" => "mešk",
    "mešeq" => "mešq",
    "meteg" => "metg",
    "meteq" => "metq",
    "negeb" => "negb",
    "neged" => "negd",
    "negaˁ" => "negˁ",
    "negep" => "negp",
    "neder" => "nedr",
    "naham" => "nahm",
    "nezem" => "nezm",
    "nezeq" => "nezq",
    "naḥal" => "naḥl",
    "naḥar" => "naḥr",
    "naḥaš" => "naḥš",
    "naḥat" => "naḥt",
    "neṭaˁ" => "neṭˁ",
    "neked" => "nekd",
    "nekes" => "neks",
    "neker" => "nekr",
    "nesek" => "nesk",
    "naˁal" => "naˁl",
    "naˁar" => "naˁr",
    "nepeç" => "nepç",
    "naˁal" => "naˁl",
    "naˁar" => "naˁr",
    "nepeš" => "nepš",
    "neqeb" => "neqb",
    "nešek" => "nešek",
    "nešep" => "nešp",
    "nešeq" => "nešq",
    "nešer" => "nešr",
    "neteq" => "netq",
    "neter" => "netr",
    "sahar" => "sahr",
    "saḥar" => "saḥr",
    "sekel" => "sekl",
    "selaˁ" => "selˁ",
    "selep" => "selp",
    "saˁar" => "saˁr",
    "seraḥ" => "serḥ",
    "seren" => "sern",
    "ˁebed" => "ˁebd",
    "ˁekes" => "ˁeks",
    "ˁelem" => "ˁelm",
    "ˁenep" => "ˁenp",
    "ˁeceb" => "ˁecb",
    "ˁecem" => "ˁecem",
    "ˁecer" => "ˁecr",
    "ˁereb" => "ˁerb",
    "ˁereś" => "ˁerś",
    "ˁešet" => "ˁešt",
    "pegaˁ" => "pegˁ",
    "peger" => "pegr",
    "paḥad" => "paḥd",
    "paḥaz" => "paḥz",
    "paḥat" => "paḥt",
    "peṭer" => "peṭr",
    "pele" => "pel",
    "peleg" => "pelg",
    "pelaḥ" => "pelḥ",
    "pelek" => "pelek",
    "peleṭ" => "pelṭ",
    "peles" => "pels",
    "pesaḥ" => "pesḥ",
    "pesel" => "pesl",
    "paˁam" => "paˁm",
    "peçaˁ" => "peçˁ",
    "peqaˁ" => "peqˁ",
    "pereg" => "perg",   
    "pered" => "perd",
    "peraḥ" => "perḥ",
    "pereṭ" => "perṭ",
    "perek" => "pereh",
    "pereṭ" => "perṭ",
    "peraˁ" => "perˁ",
    "pereç" => "perç",
    "pereq" => "perq",
    "pereš" => "perš",
    "pešaˁ" => "pešˁ",
    "petaḥ" => "petḥ",
    "peten" => "petn",
    "petaˁ" => "petˁ",
    "çebaˁ" => "çebˁ",
    "çebet" => "çebt",
    "çedeq" => "çedq",
    "çaḥar" => "çaḥr",
    "çelem" => "çelm",
    "çelaˁ" => "çelˁ",
    "çemed" => "çemd",
    "çemaḥ" => "çemḥ",
    "çemer" => "çemr",
    "çaˁar" => "çaˁr",
    "çepaˁ" => "çepˁ",
    "qeber" => "qebr",
    "ketem" => "kete",
    "qeṭeb" => "qeṭb",
    "qeṭel" => "qeṭl",
    "qelqs" => "qels",
    "qelaˁ" => "qelˁ",
    "qemaḥ" => "qemaḥ ",
    "qesem" => "qesm",
    "qeçeb" => "qeçb",
    "qeçaḥ" => "qeçḥ",
    "qeçep" => "qeçp",
    "qereb" => "qerb",
    "qeraḥ" => "qerḥ",
    "qeren" => "qern",
    "qeses" => "qess",  
    "qeraˁ" => "qerˁ",
    "qereç" => "qerç",
    "qereš" => "qerš",
    "qešeb" => "qešb",
    "qešer" => "qešr",
    "regaˁ" => "regˁ",
    "regeš" => "regš",
    "rahab" => "rahb",
    "rahaṭ" => "raha",
    "reḥem" => "reḥm",
    "raḥam" => "raḥm",
    "raḥaç" => "raḥç",
    "reṭeṭ" => "reṭṭ",
    "rekeb" => "rekb",
    "rekes" => "reks",
    "remeḥ" => "remḥ",
    "resen" => "resn",
    "raˁad" => "raˁd",
    "raˁam" => "raˁm",
    "raˁaš" => "raˁš",
    "repeš" => "repš",
    "repet" => "rept",
    "reçaḥ" => "reçḥ",
    "reçep" => "reçp",
    "reqaḥ" => "reqḥ",
    "šeber" => "šebr",
    "šebet" => "šebt",
    "šeger" => "šegr",
    "šewaˁ" => "šewˁ",
    "šaḥal" => "šaḥl",
    "šaḥap" => "šaḥp",
    "šaḥaç" => "šaḥç",
    "šaḥaq" => "šaḥq",
    "šaḥar" => "šaḥr",
    "šeṭep" => "šeṭp",
    "šekem" => "šekm",
    "šeken" => "šekn",
    "śeker" => "śekr",
    "śekel" => "śekl",
    "šeleg" => "šelg",
    "šelaḥ" => "šelḥ",
    "šeleṭ" => "šelṭ",
    "šelem" => "šelm",
    "šemen" => "šemn",
    "šemeç" => "šemç",
    "šemer" => "šemr",
    "šemeš" => "šemš",
    "šesaˁ" => "šesˁ",
    "šaˁal" => "šaˁl",
    "šaˁar" => "šaˁr",
    "šepeṭ" => "šepṭ",
    "šepek" => "šepek",
    "šepaˁ" => "šepˁ",
    "šeper" => "šeper",
    "šeçep" => "šeçp",
    "šeqeṭ" => "šeqṭ",
    "šeqel" => "šeql",
    "šeqep" => "šeqp",
    "šeqeç" => "šeqç",
    "šeqer" => "šeqr",
    "śered" => "śerd",
    "śereṭ" => "śerṭ",
    "šereç" => "šerç",
    "teben" => "tebn",
    "taḥaš" => "taḥš",
    "telem" => "telm",
    "eged" => "ˀegd",
    "eres" => "ˀers",
    "beged" => "begd",
    "bezeq" => "bezeq",
    "baˁaç" => "baˁç",
    "geder" => "gedr",
    "gahar" => "gahr",
    "geleš" => "gelš",
    "geses" => "gess",
    "gered" => "gere",
    "deles" => "dels",
    "deleq" => "delq",
    "deqel" => "deql",
    "deqer" => "deqr",
    "deren" => "dern",
    "weset" => "west",
    "waˁad" => "waˁd",
    "wered" => "werd",
    "weteq" => "wetq",
    "zebel" => "zebl",
    "zaḥal" => "zaḥl",
    "zelaḥ" => "zelḥ",
    "zelep" => "zelp",
    "zepeq" => "zepq",
    "zereb" => "zerb",
    "ḥebe" => "ḥebe",
    "ḥebeṭ" => "ḥebṭ",
    "ḥebeq" => "ḥebq",
    "ḥeneṭ" => "ḥenṭ",
    "ḥeneq" => "ḥenq",
    "ḥeçeb" => "ḥeçb",
    "ḥereç" => "ḥerç",
    "ḥeret" => "ḥert",
    "tebel" => "tebl",
    "ṭebaˁ" => "ṭeba",
    "ṭaḥab" => "ṭaḥb",
    "ṭaḥan" => "ṭaḥn",
    "ṭeqes" => "ṭeqs",
    "ṭelep" => "ṭelp",
    "ṭepel" => "ṭepl",
    "ṭepep" => "ṭepp",
    "yegaˁ" => "yega",
    "yaḥap" => "yaḥp",
    "kesek" => "kesek",
    "kaˁak" => "kaˁk",
    "kerek" => "kerek",
    "keres" => "kers",
    "lebed" => "lebd",
    "lebeṭ" => "lebṭ",
    "lebes" => "lebs",
    "lekeš" => "lekš",
    "laˁaz" => "laˁz",
    "lepes" => "leps",
    "lepet" => "lept",
    "meder" => "medr",
    "maḥaq" => "maḥq",
    "melel" => "mell",
    "melaˁ" => "melˁ",
    "melaˁ" => "melˁ",
    "meçer" => "meçr",
    "merer" => "merr",
    "neger" => "negr",
    "nemeq" => "nemq",
    "neser" => "nesr",
    "nepaḥ" => "nepḥ",
    "neqaˁ" => "neqˁ",
    "neqep" => "neqp",
    "neqer" => "neqr",
    "nešeb" => "nešb",
    "nešem" => "nešm",
    "sebeq" => "sebq",
    "seger" => "segr",
    "sedeq" => "sedq",
    "semek" => "semek",
    "saˁad" => "saˁd",
    "sepeg" => "sepg",
    "sepaḥ" => "sepḥ",
    "seper" => "sepr",
    "sereṭ" => "serṭ",
    "serek" => "serek",
    "ˁereś" => "ˁerś",
    "ˁeter" => "ˁetr",
    "peleṭ" => "pelṭ",
    "peseq" => "pesq",
    "peqes" => "peqs",
    "peteq" => "petq",
    "çedaˁ" => "çedˁ",
    "çewet" => "çewt",
    "çemel" => "çeml",
    "çemeq" => "çemq",
    "çemeq" => "çemq",
    "çaˁar" => "çaˁr",
    "qebaˁ" => "qebˁ",
    "qebeç" => "qebç",
    "qedaḥ" => "qedḥ",
    "qeṭaˁ" => "qeṭˁ",
    "qelaḥ" => "qelḥ",
    "qelet" => "qelt",
    "qemeṭ" => "qemṭ",
    "qepel" => "qepl",
    "qepeç" => "qepç",
    "qepeš" => "qepš",
    "qeçeç" => "qeçç",
    "regen" => "regn",
    "reded" => "redd",
    "raḥaš" => "raḥš",
    "remez" => "remz",
    "remeç" => "remç",
    "raˁap" => "raˁp",
    "raˁaç" => "raˁç",
    "repeš" => "repš",
    "reqem" => "reqm",
    "rešeb" => "rešb",
    "retet" => "rett",
    "šebaḥ" => "šebḥ",
    "šegem" => "šegm",
    "šeder" => "šedr",
    "šaḥaq" => "šaḥq",
    "šaḥat" => "šaḥt",
    "šeter" => "šetr",
    "šekeb" => "šekb",
    "šeker" => "šekr",
    "šeled" => "šeld",
    "šelep" => "šelp",
    "šeleq" => "šelq",
    "šeleš" => "šelš",
    "šeneç" => "šenç",
    "šaˁam" => "šaˁm",
    "šaˁap" => "šaˁp",
    "šeqaˁ" => "šeqˁ",
    "šetel" => "šetl",
    "šetem" => "šetm",
    "šeten" => "šetn",
    "tebel" => "tebl",
    "tepaḥ" => "tepḥ",
    "teper" => "tepr",
    "teqen" => "teqn",
    "tered" => "terd",
    "ebaḥ" => "eba",
    "ebeq" => "ebq",
    "edeš" => "edš",
    "egep" => "egp",
    "ahab" => "ahb",
    "aḥal" => "aḥl",
    "elah" => "elh",
    "eleç" => "elç",
    "enaḥ" => "enḥ",
    "enen" => "enn",
    "enep" => "enp",
    "eneq" => "enq",
    "eneš" => "enš",
    "ereq" => "erq",
    "erer" => "err",
    "ereš" => "erš",
    "ešem" => "ešm",
    "ešep" => "ešp",
    "bahal" => "bahl",
    "bezaˁ" => "bezˁ",
    "baḥal" => "baḥl",
    "baˁaṭ" => "baˁṭ",
    "baˁat" => "baˁt",
    "berer" => "berr",
    "bešeš" => "bešš",
    "gebaˁ" => "gebˁ",
    "gedep" => "gedp",
    "gahaç" => "gahç",
    "gahar" => "gahr",
    "gewaˁ" => "gewˁ",
    "gezez" => "gezz",
    "gaḥal" => "gaḥa",
    "gaḥan" => "gaḥn",
    "gelaˁ" => "gelˁ",
    "gelep" => "gelp",
    "gemer" => "gemr",
    "genes" => "gens",
    "gaˁal" => "gaˁa",
    "gerem" => "germ",
    "geraˁ" => "gerˁ",
    "daˀab" => "daˀb",
    "daˀag" => "daˀg",
    "debeb" => "debb",
    "deger" => "degr",
    "daham" => "dahm",
    "dahar" => "dahr",
    "daḥas" => "daḥs",
    "daḥaq" => "daḥq",
    "deke" => "deke",
    "deleg" => "delg",
    "depeq" => "depeq",
    "dered" => "derd",
    "hegeg" => "hegg",
    "hegen" => "hegn",
    "helem" => "hele",
    "wekaḥ" => "wekḥ",
    "wekel" => "wekel",
    "waˁat" => "waˁt",
    "weqeš" => "weqš",
    "zaham" => "zahm",
    "zahar" => "zahr",
    "zereq" => "zerq",
    "ḥegeg" => "ḥegg",
    "ḥeṭep" => "ḥeṭp",
    "ḥemel" => "ḥeml",
    "ḥeneq" => "ḥenq",  
    "ḥerek" => "ḥerek",
    "ḥerep" => "ḥerp",
    "ḥereq" => "ḥerq",
    "ḥešel" => "ḥešl",
    "ḥeśep" => "ḥeśp",
    "ḥešer" => "ḥešr",
    "ḥetel" => "ḥetl",
    "ḥeter" => "ḥetr",
    "ṭemen" => "ṭemn",
    "ṭenep" => "ṭenp",
    "ṭaˁan" => "ṭaˁn",
    "ṭepeš" => "ṭepš",
    "yaˀab" => "yaˀb",
    "yahab" => "yahb",
    "yaḥam" => "yaḥm",
    "yelel" => "yell",
    "yeneq" => "yenq",
    "yesed" => "yesd",
    "yaˁad" => "yaˁd",
    "yaˁap" => "yaˁp",
    "yaˁaç" => "yaˁç",
    "yeqer" => "yeqr",
    "yeqeš" => "yeqš",
    "yešer" => "yešr",
    "kaḥad" => "kaḥd",
    "kelel" => "kell",
    "kemes" => "kems",
    "kemeš" => "kemš",
    "kepep" => "kepp",
    "kepeš" => "kepš",
    "kešel" => "kešl",
    "laham" => "lahm",
    "lahaq" => "lahq",
    "leḥek" => "leḥk",
    "laḥam" => "laḥm",
    "laḥan" => "laḥn",
    "lemed" => "lemd",
    "laˁab" => "laˁb",
    "laˁaṭ" => "laˁṭ",
    "laˁan" => "laˁn",
    "lešek" => "lešeh",
    "letaḥ" => "letḥ",
    "letet" => "lett",
    "maˀas" => "maˀs",
    "meded" => "medd",
    "maḥal" => "maḥl",
    "meleg" => "melg",
    "meleç" => "melç",
    "menaḥ" => "menḥ",
    "maˁad" => "maˁd",
    "maˁaṭ" => "maˁṭ",
    "meraḥ" => "merḥ",
    "mereç" => "merç",
    "naˀaç" => "naˀç",
    "naˀaq" => "naˀq",
    "nebeb" => "nebb",
    "nebaḥ" => "nebḥ",
    "nebaˁ" => "nebˁ",
    "negen" => "negn",
    "nedeb" => "nedb",
    "neded" => "nedd",
    "nahaq" => "nahq",
    "nezel" => "nezl",
    "naḥaç" => "naḥç",
    "nemes" => "nems",
    "nemeš" => "nemeš",
    "neqeq" => "neqq",
    "neqeš" => "neqš",
    "nešel" => "nešl",
    "saˀab" => "saˀb",
    "segel" => "segl",
    "segen" => "segn",
    "saḥap	" => "saḥa	",
    "sekek" => "sekek",
    "seled" => "seld",
    "seleq" => "selq",
    "saˁap" => "saˁp",
    "seṭep" => "seṭp",
    "seqer" => "seqr",
    "sereb" => "serb",
    "sereg" => "serg",
    "ˁebeš" => "ˁebš",
    "ˁegeb" => "ˁegb",
    "ˁegem" => "ˁegm",
    "ˁedep" => "ˁedp",
    "ˁezeb" => "ˁezb",
    "ˁezer" => "ˁezr",
    "ˁezez" => "ˁezz",
    "ˁeṭep" => "ˁeṭp",
    "ˁeṭer" => "ˁeṭr",
    "ˁelez" => "ˁelz",
    "ˁeleṭ" => "ˁelṭ",
    "ˁeles" => "ˁels",
    "ˁeleç" => "ˁelç",
    "ˁeleq" => "ˁelq",
    //"ˁemet" => "ˁemt",
    "ˁener" => "ˁenr",
    "ˁepep" => "ˁepp",
    "ˁepeš" => "ˁepš",
    "ˁeqep" => "ˁeqp",
    "ˁereg" => "ˁerg",
    "ˁerep" => "ˁerp",
    "ˁereç" => "ˁerç",
    "pegen" => "pegn",
    "pedaˁ" => "pedˁ",
    "peled" => "peld",
    "pelel" => "pell",
    "peleç" => "pelç",
    "peleš" => "pelš",
    "pesed" => "pesd",
    "paˁar" => "paˁr",
    "peçed" => "peçd",
    "peçaḥ" => "peçḥ",
    "peçel" => "peçl",
    "peçeç" => "peçç",
    "peqed" => "peqd",
    "peqaḥ" => "peqḥ",
    "perem" => "perm",
    "perep" => "perp",
    "pešeṭ" => "pešṭ",
    "petek" => "petek",
    "peter" => "petr",
    "çedep" => "çedp",
    "çahab" => "çahb",
    "çahal" => "çahl",
    "çewaḥ" => "çewḥ",
    "çaḥan" => "çaḥn",
    "çaḥaq" => "çaḥq",
    "çelep" => "çelp",
    "çemeg" => "çemg",
    "çemet" => "çemt",
    "çenep" => "çenp",
    "çaˁaq" => "çaˁq",
    "çeped" => "çepd",
    "çepeq" => "çepq",
    "çeper" => "çepr",
    "çeraḥ" => "çerḥ",
    "çeter" => "çetr",
    "qeṭeṭ" => "qeṭṭ",
    "qelep" => "qelp",
    "qaˁar" => "qaˁr",
    "qepel" => "qepl",  
    "qeçaˁ" => "qeçˁ",
    "qešaḥ" => "qešḥ",
    "rebed" => "rebd",
    "rebek" => "rebeh",
    "regeb" => "regb",
    "redem" => "redm",
    "redaˁ" => "redˁ",
    "rezaḥ" => "rezḥ",
    "reṭen" => "reṭn",
    "rekel" => "rekl",
    "repes" => "reps",
    "remes" => "rems",
    "remeš" => "remš",
    "renen" => "renn",
    "reped" => "repd",
    "repes" => "reps",
    "reçaˁ" => "reçˁ",
    "reqed" => "reqd",
    "rešel" => "rešl",
    "rešem" => "rešm",
    "rešeq" => "rešq",
    "reteq" => "retq",
    "šaˀag" => "šaˀg",
    "šaˀal" => "šaˀl",
    "šaˀap" => "šaˀp",
    "Śegeb" => "Śegb",
    "šegeš" => "šegš",
    "šedem" => "šedm",
    "šedep" => "šedp",
    "šezep" => "šezp",
    "šezer" => "šezr",
    "šaḥan" => "šaḥn",
    "šeṭaḥ" => "šeṭḥ",
    "śeṭem" => "śeṭm",
    "śeṭen" => "śeṭn",
    "šekek" => "šekeh",
    "Śemaḥ" => "Śemḥ",
    "šemeṭ" => "šemṭ",
    "šenen" => "šenn",
    "šesep" => "šesp",
    "šaˁaṭ" => "šaˁṭ",
    "šaˁan" => "šaˁn",
    "šeqed" => "šeqd",
    "šeqeq" => "šeqq",
    "Śereg" => "Śerg",
    "Śeraˁ" => "Śerˁ",
    "šeteq" => "šetq",
    "taˀab" => "taˀb",
    "teder" => "tedr",
    "tekep" => "tekp",
    "telaḥ" => "telḥ",
    "telep" => "telp",
    "taˁab" => "taˁb",
    "terez" => "terz",
    "tereç" => "terç",
    "eḥez" => "eḥz",
    "eṭem" => "eṭm",
    "beles" => "bels",
    "belem" => "belm",
    "bered" => "berd",
    "berez" => "berz",
    "gedem" => "gedm",
    "gedaˁ" => "gedˁ",
    "gahaq" => "gahq",
    "gaḥak" => "gaḥak",
    "gelem" => "gelm",
    "gemel" => "geme",
    "gemeš" => "gemš",
    "gereb" => "gerb",
    "gerez" => "gerz",
    "degem" => "degm",
    "daḥap" => "daḥa",
    "delaḥ" => "delḥ",
    "deme" => "deme",
    "demem" => "demm",
    "dereg" => "derg",
    "herep" => "herp",
    "hedeq" => "hedq",
    "zeneb" => "zenb",
    "zeneq" => "zenq",
    "zerep" => "zerp",
    "ḥesem" => "ḥesm",
    "ḥeçep" => "ḥeçp",
    "ḥereg" => "ḥerg",
    "yedaˁ" => "yedˁ",
    "yeçeq" => "yeçq",
    "kenes" => "kens",
    "kereç" => "kerç",
    "leben" => "lebe",
    "leṭep" => "leṭp",
    "leṭeš" => "leṭš",
    "laˁas" => "laˁs",
    "leped" => "lepd",
    "menaˁ" => "menˁ",
    "meçaˁ" => "meçˁ",
    "mereq" => "merq",
    "meten" => "mete",
    "nebeg" => "nebe",
    "nebeṭ" => "nebṭ",
    "neges" => "negs",
    "nedep" => "nedp",
    "naˁaç" => "naˁç",
    "neqed" => "neqd",
    "netek" => "neteh",
    "saˀan" => "saˀn",
    "segep" => "sege",
    "saḥab" => "saḥb",
    "setem" => "setm",
    "ˁeleg" => "ˁelg",
    "ˁešen" => "ˁešn",
    "pahaq" => "pahq",
    "peṭeṭ" => "peṭṭ",
    "peqer" => "peqr",
    "petel" => "petl",
    "çeleq" => "çelq",
    "çenen" => "çenn",
    "çebaˁ" => "çebˁ",
    "çepep" => "çepp",
    "qeded" => "qedd",
    "qeleṭ" => "qelṭ",
    "qeber" => "qebr",
    "qeçer" => "qeçr",
    "raḥap" => "raḥp",
    "raḥaq" => "raḥq",
    "reses" => "ress",
    "reseq" => "resq",
    "reçed" => "reçd",
    "reçeç" => "reçç",
    "reqaˁ" => "reqˁ",
    "retaˁ" => "retˁ",
    "śene" => "śee",
    "šegaˁ" => "šegˁ",
    "šahaq" => "šahq",
    "šaḥam" => "šaḥm",
    "šemek" => "šemeh",
    "šeseq" => "šesq",
    "šetet" => "šett",
    "teken" => "tekn",
    "temek" => "temek",
    "tepes" => "teps",
    "tepep" => "tepp",
    "teqaˁ" => "teqˁ",
    'qobeç' => 'qobç',
    'ˁeçem' => 'ˁeçm',
    'seder' => 'sedr',
    'noˁada' => 'noˁda',
    'ˀopen' => 'ˀopn',
    'biqoret' => 'biqort',
    'matkonet' => 'matkont',
    'boqer' => 'boqr',
    'ˀeçel' => 'ˀeçl',
    'qodem' => 'qodm', 
    'zohar' => 'zohr',
    'ḥodeš' => 'ḥodš',


   );