<?php 


$names = array(
    "zeˁeb" => "zˁeb",
    'teman' => 'teiman',
    'yamenu' => 'yameinu',
    'ršit' => 'reˀšit',
    'yeˀr' => 'yˀor',
    'ḥeqq' => 'ḥeiq',
    'ˀaw-' => 'ˀab-', //very special case when meaning to word father but still with nismach macap.
    'rišonim' => 'riˀšonim',
    'ˀašer' => 'ˀšer',
    'ˀani' => 'ˀni',
    'haki' => 'hki',
    'reˀi' => 'rˀi',
    "ˀaḥḥrim" => 'ˀaḥerim',
    'kuleiˀi' => 'kulei',
    'ˀašer' => 'ˀšer',
    'bayit' => 'bayt',
    'ˁaśot' => 'ˁśot',
    'ˀek' => 'ˀeik',
    'yiśreˀel' => 'yiśrˀel',
    'hinom' => 'hinnom',
    'mošeh' => 'moše'

);

function convertNames( $arrayOfWords , $inputText , $suffix)
{
    foreach ($arrayOfWords as $key => $value)
    {

        $pattern = "/\\b($key)($suffix)\\b/ui";
        $replace = "$value";
        $inputText = preg_replace($pattern, "$replace\\2", $inputText);
    }
    return $inputText;
}





