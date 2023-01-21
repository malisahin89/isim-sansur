<?php

// https://www.linkedin.com/in/muhammetalisahin/
// bilisimarsivi.com

function censorName(string $name) :string
{
    $nameArray = explode(' ', $name);
    $censoredName = '';
    foreach ($nameArray as $word) {
        $censoredName .= mb_substr($word, 0, 2) . str_repeat('*', mb_strlen($word) - 2) . ' ';
    }
    return trim($censoredName);
}

$name = 'Muhammet Ali ŞAHİN';
echo censorName($name);
?>
