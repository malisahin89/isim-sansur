<?php

// https://www.linkedin.com/in/muhammetalisahin/
// bilisimarsivi.com

echo $gelen='Muhammet Ali ŞAHİN';
echo '<br/>';
echo sansur($gelen);

function sansur($isim){
    $tam=[];
    $dizi=explode(' ',$isim);
    foreach ($dizi as $key => $value) {
        $yildiz=mb_strlen($value)-2;
        $yildizlar=[];
        for ($i=1; $i <=$yildiz ; $i++) { 
            array_push($yildizlar,'*');
        }
        $yildiz=implode('',$yildizlar);
        $ilk =mb_substr($value , 0 , 2);
        array_push($tam, $ilk.$yildiz);
    }
    return implode(' ',$tam);
}


?>