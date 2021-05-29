<?php


$pattern = array("/(\\b$C)[e]($C$V)(($C*$V$C*)+)\\b/u"/*,"/(($C|$V){2,})($C)[e]($C$V)\\b/ui"*/);
$pattern_rep = array('\1\2\3','\1\3\4');
$exceptions = array(
    "geˀograp",// geˀograpit
    'heˁarot',
    'heˁara',
    'teˀurim',
    'rešit',
    'šelomo',
    'šelanu',
    'maḥreša',
    'hemulin',
    'ḥemar',
    'lebab',
    'ˁenab',
    'çela',
    'shegal',
    'šekar',
    'geˀe',
    'ˀeineni',
    'qedar',
    'ˀeinenu',
    'šehuˀ',
    'çaˁrenu',
    'megapon',
    'ˀenergiya',
    'deqadens',
    'beduˀim',
    'menašes',
    'demoqraṭyah',
    'meḥewah',
    'neˁerkah',
    'ˀelie',
    
);

$CeCV_words = array (
    //uzzi mail Oct 11, 2018, 12:31 PM
    'zeˀeb'   => 'zˀeb', 
    'ˀeper' =>  'ˀper',
    'beˀer'  =>  'bˀer',
    'zeˁeir'  =>  'zˁeir',
    'ṭeˁem'  =>  'ṭˁem',
    'yelel' =>  'ylel',
    'keˀeb'  =>  'kˀeb',
    'sene' =>  'sne',
    'mekal' =>  'mkal',
    'beḥinah' => 'bḥinah',
    'peˀer' => 'pˀer',  
    'çeˀel' => 'çˀel',  
    'reˀem' => 'rˀem',  
    'retet' => 'rtet',  
    'šeˀer' => 'šˀer',  
    'deˀeb' => 'dˀeb',  
    'šeˀel' => 'šˀel',  
    'pegam' => 'pgam',  
    'pelag' => 'plag',

    'penaˀy'  =>  'pnaˀy', 
    'pesaq'  =>  'psaq',
    'peqaq'   =>  'pqaq',  
    'peraṭ'  =>  'praṭ',
    'pešaṭ'   =>  'pšaṭ', 
    'çeˀel'   =>  'çˀel',
    'çebi '  =>  'çbi',
    'çebat'   =>  'çbat',
    'śelaw'   =>  'ślaw',
    'mekal'  =>  'mkal',


'ˀewil' => 'ˀwil',    
'ˀelil' => 'ˀlil', 
'bedil' => 'bdil', 
'belil' => 'blil', 
'beˁir' => 'bˁir',
'beqiˁ' => 'bqiˁ',
'debir' => 'dbir',
'yegiˁ' => 'ygiˁ',
'yedid' => 'ydid',
'meziḥ' => 'mziḥ',
'meḥir' => 'mḥir',
'meṭil' => 'mṭil',
'neḥir' => 'nḥir', 
'neçib' => 'nçib', 
'seˁip' => 'sˁip', 
'petil' => 'ptil', 
'çelil' => 'çlil', 
'çeriḥ' => 'çriḥ',
'rebib' => 'rbib', 
'resis' => 'rsis',
'peliz' => 'pliz',
'pesig' => 'psig',
'pesiq' => 'psiq',  
'petil' => 'ptil',  
'çeḥiḥ' => 'çḥiḥ',  
'çepi' => 'çpi',
'çeror' => 'çror',  
'çepat' => 'çpat',  
'çerip' => 'çrip',   
'çeriḥ' => 'çriḥ',  
'reçip' => 'rçip',
'šeḥil' => 'šḥil',
'šeliš' => 'šliš',
'šeti' => 'šti',
'teris' => 'tris',
'helik' => 'hlik', 
'kebil' => 'kbil', 
'seˁip' => 'sˁip',
    
'gebul' => 'gbul',   
'gedud' => 'gdud', 
'gemul' => 'gmul', 
'yebul' => 'ybul', 
'yeçur' => 'yçur', 
'lebuš' => 'lbuš', 
'neˀum' => 'nˀum', 
'rekuš' => 'rkuš', 
'rešut' => 'ršut',
'teḥum' => 'tḥum',
'gelip' => 'glip',
'pesul' => 'psul',  
'çeḥoq' => 'çḥoq',  
'reˀut' => 'rˀut',    
'śeˀor' => 'śˀor',  
'šeˀaṭ' => 'šˀaṭ',  
'šeˀol' => 'šˀol',  
'šeyar' => 'šyar', 
'śerok' => 'śrok',  
'teluš' => 'tluš', 
'temol' => 'tmol',  
'tenuk' => 'tnuk',  
'yeçuˀ' => 'yçuˀ', 
'bekor' => 'bkor', 
'beroš' => 'broš', 
'hedom' => 'hdom', 
'ḥegor' => 'ḥgor',  
'ḥelom' => 'ḥlom', 
'ḥemor' => 'ḥmor', 
'yeˀor' => 'yˀor', 
'yesod' => 'ysod', 
'kepor' => 'kpor',
'meˀod' => 'mˀod', 
'ˁeboṭ' => 'ˁboṭ', 
'reḥob' => 'rḥob', 
'šeˀol' => 'šˀol',  
'teˀom' => 'tˀom',  
'tehom' => 'thom',  
'nedod' => 'ndod',  
'çenon' => 'çnon',  
'çenim' => 'çnim',  
'teḥum' => 'tḥum',
'reçe' => 'rçe',
'kemo' => 'kmo',
'ˀedama' => 'ˀdama',
'ˀewaz' => 'ˀwaz',
'ˀewiron' => 'ˀwiron',
'ˀexuzza' => 'ˀxuzza',
'ˀeyal' => 'ˀyal',
'ˀelohim' => 'ˀlohim',
'çelab' => 'çlab',
'ˀelumma' => 'ˀlumma',
'ˀelunqa' => 'ˀlunqa',
'ˀemuna' => 'ˀmuna',
'ˀemana' => 'ˀmana',
'ˀemargan' => 'ˀmargan',
'ˀenoš' => 'ˀnoš',
'ˀeniya' => 'ˀniya',
'ˀenak' => 'ˀnak',
'ˀesepa' => 'ˀsepa',
'ˀesapsup' => 'ˀsapsup',
'ˀepudda' => 'ˀpudda',
'ˀepela' => 'ˀpela',
'ˀepar' => 'ˀpar',
'ˀerubba' => 'ˀrubba',
'ˀeruḥa' => 'ˀruḥa',
'ˀeriˀel' => 'ˀriˀel',
'ˀeraˁi' => 'ˀraˁi',
'ˀeśera' => 'ˀśera',
'ˀetar' => 'ˀtar',
'reˀut' => 'rˀut',
'beaˁbuˁ' => 'baˁbuˁ',
'beaˁṭan' => 'baˁṭan',
'betula' => 'btula',
'geˀula' => 'gˀula',
'gehiqa' => 'ghiqa',
'gehira' => 'ghira',
'deror' => 'dror',
'depus' => 'dpus',
'deḥaq' => 'dḥaq',
'gebul' => 'gbul',
'gemul' => 'gmul',
'genaˀy' => 'gnaˀy',
'geruš' => 'gruš',
'gerar' => 'grar',
'deway' => 'dway',
'deḥiq' => 'dḥiq',
'ṭelaˀy' => 'ṭlaˀy',
'ṭebaḥ' => 'ṭbaḥ',
'derruš' => 'druš',
'deraš' => 'draš',
'hebaˀy' => 'hbaˀy',
'hedass' => 'hdass',
'heway' => 'hway',
'qelap' => 'qlap',
'qepiç' => 'qpiç',
'qerab' => 'qrab',
'qerum' => 'qrum',
'bet' => 'beit',

    //2
    "ˀemuna" => "ˀmuna",
"ˀaruḥa" => "ˀruḥa",
"ˀaruka" => "ˀruka",
"ˀari" => "ˀri",
"ˀewil" => "ˀwil",
"ˀelil" => "ˀlil",
"beˁir" => "bˁir",
"beki" => "bki",
"beli" => "bli",
"gedi" => "gdi",
"ḥaçi" => "ḥçi",
"ḥaziz" => "ḥziz",
"ḥazir" => "ḥzir",
"yegiˁ" => "ygiˁ",
"ˀeyal" => "ˀyal",
"ˀanak" => "ˀnak",
"halak" => "hlak",
"ḥabal" => "ḥbal",
"ḥagaw" => "ḥgaw",
"yehab" => "yhab",
"yeqar" => "yqar",
"nedan" => "ndan",
"ˁanaq" => "ˁnaq",
"šeˀaṭ" => "šˀaṭ",
"šeˀar" => "šˀar",
"ˀapar" => "ˀpar",
"ḥaṭuba" => "ḥṭuba",
"ḥamuda" => "ḥmuda",
"ḥaṭaṭ" => "ḥṭaṭ",
"ḥašad" => "ḥšad",
"ḥatak" => "ḥtak",
"neyar" => "nyar",
"ˁarar" => "ˁrar",
"peṭal" => "pṭal",
"rebab" => "rbab",
"reqaq" => "rqaq",
"ḥaṭap" => "ḥṭap",
"degam" => "dgam",
"haway" => "hway",
"yebab" => "ybab",
"ˀagam" => "ˀgamm",
"ˀagap" => "ˀgapp",
"ˀatar" => "ˀtar",
"hadas" => "hdass",
"ḥaak" => "ḥrakk",
"ḥašaš" => "ḥšaš",
"ḥatat" => "ḥtat",
"lešad" => "lšadd",
"meˁaṭ" => "mˁaṭ",
"ˀagas" => "ˀgass",
"ˀaṭab" => "ˀṭab",
"habay" => "hbaˀy",
"ḥašay" => "ḥšaˀy",
"yedid" => "ydid",
"leway" => "lwaˀy",
"meḥir" => "mḥir",
"meṭil" => "mṭil",
"meˁil" => "mˁil",
"meluka" => "mluka",
"nebuˀa" => "nbuˀa",
"neḥuša" => "nḥuša",
"neçura" => "neura",
"neśuˀa" => "nśuˀa",
"meçay" => "mçaˀy",
"neḥir" => "nḥir",
"seˁip" => "sˁip",
"ˁazuba" => "ˁzuba",
"ˁaluqa" => "ˁluqa",
"rebib" => "rbib",
"ˁaçuma" => "ˁçuma",
"ˁaruga" => "ˁruga",
"ˁatuda" => "ˁtuda",
"repuˀa" => "rpuˀa",
"retuqa" => "rtuqa",
"ˀabuqa" => "ˀbuqa",
"ˀanusa" => "ˀnusa",
"ˀarusa" => "ˀrusa",
"ˀarura" => "ˀrura",
"hadura" => "hdura",
"ḥaluça" => "ḥluça",
"ḥamura" => "ḥmura",
"ḥaçuba" => "ḥçuba",
"ḥatula" => "ḥatula",
"meruṭa" => "mruṭa",
"neḥuta" => "nḥuta",
"ˁaguna" => "ˁguna",
"reçuˁa" => "rçuˁa",
"šeˀuba" => "šˀuba",
"šesuˁa" => "šsuˁa",
"ḥaluqa" => "ḥluqa",
"yeˁuda" => "yˁuda",
"ˁamuma" => "ˁmuma",
"reguˁa" => "rguˁa",
"reguˁa" => "rguˁa",
"rehuṭa" => "rehuṭa",
"ˀabuda" => "ˀbuda",
"ˀapuna" => "ˀpuna",
"yeluda" => "yluda",
"ˀagudda" => "ˀgudda",
"ˀaḥuzza" => "ˀḥuzza",
"ˀalumma" => "ˀlumma",
"ˀasuppa" => "ˀsuppa",
"ˀarubba" => "ˀrubba",
"geˀulla" => "gˀulla",
"ḥanuppa" => "ḥnuppa",
"ḥanukka" => "ḥnukka",
"ˀarukka" => "ˀrukka",
"ketubba" => "ktubba",
"nequdda" => "nqudda",
"ˀadama" => "ˀdama",
"halika" => "hlika",
"harisa" => "hrisa",
"ˀawir" => "ˀwir",
"ˀaḥiza" => "ˀḥiza",
"ˀakila" => "ˀkila",
"ˀamira" => "ˀmira",
"ˀalumma" => "ˀlumma",
"ˀalunqa" => "ˀlunqa",
"ˀamana" => "ˀmana",
"ˀanaḥa" => "ˀnaḥa",
"ˀanapa" => "ˀnapa",
"ˀanak" => "ˀnak",
"ˀanaqa" => "ˀnaqa",
"ˀaniya" => "ˀniya",
"ˀapar" => "ˀpar",
"ˀapela" => "ˀpela",
"ˀaper" => "ˀper",
"ˀapudda" => "ˀpudda",
"ˀaraˁi" => "ˀraˁi",
"ˀariˀel" => "ˀriˀel",
"ˀariga" => "ˀriga",
"ˀarubba" => "ˀrubba",
"ˀaruḥa" => "ˀruḥa",
"ˀasapsup" => "ˀsapsup",
"ˀasepa" => "ˀsepa",
"ˀašera" => "ˀšera",
"ˀatar" => "ˀtar",
"ˀawaz" => "ˀwaz",
"ˀawiron" => "ˀwiron",
"ˀaḥuzza" => "ˀḥuzza",
"ˀelil" => "ˀlil",
"ˀelohim" => "ˀlohim",
"ˀemuna" => "ˀmuna",
"ˀenoš" => "ˀnoš",
"ˀewil" => "ˀwil",
"ˀeyal" => "ˀyal",
"ˀmargan" => "ˀmargan",
"ˁaboṭ" => "ˁboṭ",
"baˁabuˁ" => "baˁbuˁ",
"baˁaṭan" => "baˁṭa",
"bedil" => "bdil",
"beer" => "bˀer",
"beˁata" => "bˁata",
"beˁir" => "bˁir",
"bekor" => "bkor",
"belil" => "blil",
"beˁata" => "bˁata",
"beˁiṭa" => "bˁiṭa",
"beˁila" => "bˁila",
"beˁila" => "bˁila",
"hapika" => "hpika",
"beroš" => "broš",
"betula" => "btula",
"çeˀel" => "çˀel",
"çelil" => "çlil",
"çeriḥ" => "çriḥ",
"dˀeb" => "dˀeb",
"debir" => "dbir",
"deḥaq" => "dḥaq",
"deḥiq" => "dḥiq",
"depus" => "dpus",
"deraš" => "draš",
"deror" => "dror",
"deruš" => "druš",
"deway" => "dway",
"edid" => "ydid",
"geˀula" => "gˀula",
"gebul" => "gbul",
"gebul" => "gbul",
"gedud" => "gdud",
"gehiqa" => "ghiqa",
"gehara" => "ghara",
"gehira" => "ghira",
"gemul" => "gmul",
"gemul" => "gmul",
"genaˀy" => "gnaˀy",
"geˁara" => "gˁara",
"gerar" => "grar",
"geruš" => "gruš",
"deˀaga" => "dˀaga",
"dehara" => "dhara",
"habaˀy" => "hbaˀy",
"habara" => "hbara",
"hawaya" => "hwaya",
"hadass" => "hdass",
"hadassa" => "hdassa",
"hadom" => "hdom",
"halaka" => "hlaka",
"ḥalom" => "ḥlom",
"ḥamor" => "ḥmor",
"hanaˀa" => "hnaˀa",
"haway" => "hway",
"hazaya" => "hzaya",
"weˁida" => "wˁida",
"ḥabˁila" => "ḥbila",
"ḥagiga" => "ḥgiga",
"ḥaṭiba" => "ḥṭiba",
"ḥaṭipa" => "ḥṭipa",
"ḥakira" => "ḥkira",
"ḥasima" => "ḥsima",
"ḥaniqa" => "ḥniqa",
"zeˁaqa" => "zˁaqa",
"ḥabaṭa" => "ḥbaṭa",
"ḥazaqa" => "ḥzaqa",
"ḥazara" => "ḥzara",
"ḥadaša" => "ḥdaša",
"hawaya" => "hwaya",
"ḥakama" => "ḥkama",
"ḥalipa" => "ḥlipa",
"ḥaliça" => "ḥliça",
"ḥamama" => "ḥmama",
"ḥanaṭa" => "ḥnaṭa",
"ḥanaya" => "ḥanaya",
"ḥanina" => "ḥnina",
"ḥaçaya" => "ḥçaya",
"ḥarada" => "ḥrada",
"ḥaraṭa" => "ḥraṭa",
"ḥarir" => "ḥrir",
"ḥaṭip" => "ḥṭip",
"yebaba" => "ybaba",
"yebama" => "ybama",
"yegiˁa" => "ygiˁa",
"yehira" => "yhira",
"yelala" => "ylala",
"yemama" => "ymama",
"yeniqa" => "yniqa",
"yeriˁa" => "yriˁa",
"yešara" => "yšara",
"keˀeb" => "kˀeb",
"kepor" => "kpor",
"lewaya" => "lwaya",
"lebana" => "lbana",
"lebiba" => "lbiba",
"leṭaˀa" => "lṭaˀa",
"lebuš" => "lbuš",
"meˀod" => "mˀod",
"meḥir" => "mḥir",
"meziḥ" => "mziḥ",
"mṭil" => "mṭil",
"neˀaça" => "nˀaça",
"neˀaqa" => "nˀaqa",
"neˀum" => "nˀum",
"nebala" => "nbala",
"nebiˀa" => "nbiˀa",
"negina" => "ngina",
"nediba" => "ndiba",
"neḥil" => "nḥil",
"neṭipa" => "nṭipa",
"neṭipa" => "nṭipa",
"neçib" => "nçib",
"nedaba" => "ndaba",
"nedod" => "ndod",
"nehaqa" => "nhaqa",
"nehara" => "nhara",
"nemala" => "nmala",
"neqama" => "nqama",
"nešama" => "nšama",
"neḥir" => "nḥir",
"neṭiša" => "nṭiša",
"neˁima" => "nˁima",
"ne neˁima" => "nˁima",
"ˁaṭiša" => "ˁṭiša",
"nešiqa" => "nšiqa",
"neˁima" => "nˁima",
"ˁalila" => "ˁlila",
"ˁarisa" => "ˁrisa",
"rebiˁ" => "rbiˁ",
"rekib" => "rkib",
"seˁara" => "sˁara",
"ˁagala" => "ˁgala",
"ˁadaša" => "ˁdaša",
"ˁaṭara" => "ˁṭara",
"ˁalaṭa" => "ˁlaṭa",
"ˁanaba" => "ˁnaba",
"ˁawaya" => "ˁwaya",
"ˁayara" => "ˁyara",
"ˁanana" => "ˁnana",
"ˁanaqa" => "ˀnaqa",
"ˁaqara" => "ˁaqara",
"ˁaraba" => "ˁraba",
"peˀer" => "pˀer",
"petil" => "pti",
"çeˁada" => "çˁada",
"çeˁaqa" => "çˁaqa",
"çeˁira" => "çˁira",
"qeˁara" => "qˁara",
"reˀem" => "rˀe",
"reˀaya" => "rˀaya",
"rebib" => "rbib",
"rebaba" => "rbaba",
"rewaḥa" => "rwaḥa",
"rewaya" => "rwaya",
"renana" => "rnana",
"repida" => "rpida",
"reḥob" => "rḥob",
"rekuš" => "rkuš",
"resis" => "rsis",
"reˁada" => "rˁada",
"reˁala" => "rˁala",
"rešut" => "ršut",
"retet" => "rtet",
"retata" => "rtata",
"šeˀaga" => "šˀaga",
"šeˁaṭa" => "šˁaṭa",
"šeˀel" => "šˀel",
"šeˀer" => "šˀer",
"šeˀol" => "šˀol",
"śeˁira" => "śˁira",
"śeˁara" => "śˁara",
"seˁip" => "sˁip",
"sene" => "sne",
"ṭeˀem" => "ṭˁem",
"teˀom" => "tˀom",
"ṭebaḥ" => "ṭbaḥ",
"tehom" => "thom",
"teḥum" => "tḥum",
"ṭelaˀy" => "ṭlaˀy",
"yeˀor" => "yˀor",
"yebul" => "bul",
"yeçuˀ" => "yçuˀ",
"yeçur" => "çur",
"yegiˁ" => "ygiˁ",
"yelel" => "ylel",
"yesod" => "ysod",
"zeˀir" => "zˀir",
"zeeb" => "zˀeb",
"leˀom" => "lˀomm",
"teˀo" => "tˀo",
"enoš" => "ˀnoš",
"epod" => "ˀepod",
" egoz" => "ˀgoz",
"ezob" => "ˀzob",
" ezor" => "ˀzor",
"eloh" => "ˀloh",
" meˀod" => "mˀod",
"Šeˀol" => "šˀol",
" meloˀ" => "mloˀ",
"teˀom" => "tˀom",
"yeˀor" => "yˀor",
"yesod" => "ysod",
"yeqod" => "yqod",
"reḥob" => "rḥob",
"ḥamor" => "ḥmor",
"ˁaboṭ" => "ˁboṭ",
"hadom" => "hdom",
"ḥagor" => "ḥgor",
"ḥalom" => "ḥlom",
"bekor" => "bkor",
"beroš" => "broš",
"deror" => "dror",
"weˁod" => "w-ˁod",
"agora" => "ˀgora",
"ḥagora" => "ḥgora",
"nekoḥa" => "nkoḥa",
"ˁaboda" => "ˁboda",
"ḥamora" => "ḥmora",
"yetoma" => "ytoma",
"teˀoma" => "tˀoma",
"ḥarošet" => "ḥrošt",
"yebošet" => "ybošt",
"yekolet" => "ykolt",
"neḥošet" => "nḥošt",
"ḥaroset" => "ḥrost",
"nesoret" => "nsort",
"nešoret" => "nšort",
"abeda" => "ˀbeda",
"asepa" => "ˀsepa",
"apela" => "ˀpela",
"ašera" => "ˀšera",
"behema" => "bhema",
"beˁera" => "bˁera",
"ḥabera" => "ḥbera",
"ḥašeka" => "ḥšeka",
"lebena" => "lbena",
"nebela" => "nbela",
"neqeba" => "nqeba",
"ˁayepa" => "ˁyepa",
"ˁarema" => "ˁrema",
"š eˀela" => "šˀela",
"zeˀeba" => "zˀeba",
"ˁabera" => "ˁbera",
"ḥasera" => "ḥsera",
"yeraqraq" => "yraqraq",
"ḥataltul" => "ḥtaltul",
"adamdam" => "ˀadamdamm",
"ḥaparperet" => "ḥparpert",
"ḥaçoçra" => "ḥçoçra",

//26.11.18 new words to totax list
"leˀumiyut" => "lˀummiyut",
"leumanut" => "lˀummanut",
"lebuš" => "lbuš",
"leḥika" => "lḥika",
"leḥima" => "lḥima",
"leḥiça" => "leḥiça",
"leḥiša" => "leḥiša",              
"lešad" => "lšadd",
"leṭaˀa" => "lṭaˀa ",
"lebana" => "lbana",
"lebena" => "lbena",
"lebabi" => "lbabi",
"lebona" => "lbona",
"leway" => "lwaˀy",
"lewaya" => "lwaya",
"lebena" => "lbena",
"lebiˀa" => "lbiˀa",
"lebiba" => "lbiba",
"lebiša" => "lbiša",
"legima" => "lgima",
"lehiṭa" => "lhiṭa",
"lehiṭut" => "lhiṭut",
"leṭaˀa" => "lṭaˀa",
"leṭipa" => "lṭipa",
"leṭiša" => "lṭiša",
"lekida" => "lkida",
"lemida" => "lmida",
"lekida" => "lkida",
"leˁiga" => "lˁiga",
"leˁisa" => "lˁisa",
"lepipa" => "lpipa",
"lepita" => "lpita",
"lepipa" => "lpipa",
"leqiḥa" => "lqiḥa",
"leqiqa" => "lqiqa", 
"reˀut" => "rˀut",
"reˀi" => "rˀi",
"reˀinoaˁ" => "rˀinoˁ",
"reˀiya" => "rˀiya",
"reˀaya" => "rˀaya",
"rebiya" => "rbiya",
"rebiˁiya" => "rbiˁiya",
"regila" => "rgila",
"regiˁa" => "rgiˁa",
"regiša" => "regiša",
"redipa" => "rdipa",
"rehiṭut" => "rhiṭut",
"rehiṭim" => "rhiṭim",
"rewaḥa" => "rwaḥa",
"rewaya" => "rwaya",
"reḥaba" => "rḥaba",
"reṭibut" => "rṭibut",
"reṭiya" => "rṭiya",
"reṭibut" => "rṭibut",
"reṭuba" => "rṭuba",
"reṭina" => "reṭina",
"rekuba" => "rkuba",
"rekuš" => "rkuš",
"rekilut" => "rkilut",
"rekiša" => "rkiša",
"neqiym" => "nqiym",
'boqer' => 'boqr',


//27.11.
"ḥapira" => "ḥpira", 
"ḥaparperet" => "ḥparpert",
"ḥaçuba" => "ḥçuba",
"ḥaçoçra" => "ḥçoçra",
"ḥaçiya" => "ḥçiya",
"ḥaçiça" => "ḥçiça",
"ḥaqiqa" => "ḥaqiqa",
"ḥaqira" => "ḥaqira",
"ḥarada" => "ḥrada",
"ḥaruka" => "ḥruka",
"ḥaruça" => "ḥruça",
"ḥarika" => "ḥrika",
"ḥariqa" => "ḥriqa",
"ḥarara" => "ḥrara",
"ḥaraštan" => "ḥraštan",
"ḥašaˀy" => "ḥšaˀy",
"ḥašad" => "ḥšad",
"ḥašiba" => "ḥšiba",
"ḥašeka" => "ḥšeka",
"ḥašaš" => "ḥšaš",
"ḥatima" => "ḥtima",
"ḥatira" => "ḥtira",
"ḥatuna" => "ḥtuna",
"ḥatart" => "ḥtat",
"ˀabeda" => "ˀbeda",
"ˀabadon" => "ˀbaddon",
"ˀabaṭṭiḥ" => "ˀbaṭṭiḥ",
"ˀabibi" => "ˀbibi",
"ˀabizar" => "ˀbizar",
"ˀakila" => "ˀkila",
"ˀabaˁbuˁa" => "ˀbaˁbuˁa",
"ˀaguda" => "ˀguda",
"ˀagarṭal" => "ˀgarṭal",
"ˀadonut" => "ˀdonut",
"ˀadama" => "ˀdama",
"ˀadibut" => "ˀdibut", 
"ˀadiqut" => "ˀdiqut", 
"ˀasura" => "ˀsura",
"ˀapiya" => "ˀpiya",
"ˀaçilut" => "ˀçilut",
"ˀaçula" => "ˀçula",
"ˀaruba" => "ˀrubba",
"ˀaruḥa" => "ˀruḥa", 
"ˀaronit" => "ˀronit",
"ˀariˀel" => "ˀriˀel", 
"ˀariga" => "ˀriga",
"ˀariza" => "ˀriza",
"ˀaruka" => "ˀrukka",
"ˀaraˁi" => "ˀraˁi",
"ˀenoš" => "ˀenoš",
"ˀašeda" => "ˀšeda",
"ˀatar" => "ˀtar",
"habana" => "hbana",
"habara" => "hbara",
"hagaba" => "hgaba",
"hadadi" => "hdadi",
"hadom" => "hdom",
"hadipa" => "hdipa",
"haway" => "hwai",
"hazaya" => "hzaya",
"haṭasa" => "hṭasa",
"hakala" => "hkala",
"halima" => "hlima",
"halika" => "hlika",
"halak" => "hlak",
"halaça" => "hlaça",
"hamara" => "hmara",
"hamata" => "hmata",
"hanaˀa" => "hnaˀa",
"hanaḥa" => "hnaḥa",
"hanaˁa" => "hnaˁa",
"hanapa" => "hnapa",
"hanaqa" => "hnaqa",
"hasaṭa" => "hsaṭa",
"hasara" => "hsara",
"hapuga" => "hpuga",
"hapika" => "hpika",
    


//28.11


"hapaça" => "hpaça",
"hapaqa" => "hpaqa",
"hapara" => "hpara",
"haçapa" => "hçapa",
"haqaˀa" => "hqaˀa",
"haqaša" => "hqaša",
"haqapa" => "hqapa",
"harega" => "hrega",
"haraḥa" => "hraḥa",
"hariga" => "hriga",
"haraça" => "hraça",
"haraqa" => "hraqa",
'pene' => 'pne',


//
"tekelt" => "tkelt",
"yeme" => "yme",



);


for($i = 0; $i< sizeof($pattern) ; $i++)
{
    $text = preg_match_with_pattern_exception_on_matches($pattern[$i], $pattern_rep[$i], "/NOPATTERN/u" ,$exceptions, $text);
}
   

