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
    'hayinu' => 'hainu',
    'yiśrˀlim' => 'yiśrˀelim',
    'hinom' => 'hinnom'
);

function convertNames( $arrayOfWords , $inputText )
{
    foreach ($arrayOfWords as $key => $value)
    {
        $pattern = "/\\b($key)\\b/ui";
        $replace = "$value";
        $inputText = preg_replace($pattern, "$replace\\2", $inputText);
    }
    return $inputText;
}





