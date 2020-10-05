<?php
$array1=array(1,2,4,412,32,142,231,2341,23,32,41);
function maximum($some_array){
    $max_v=0;
    for ($i = 0;$i<count($some_array);$i++){
        if($some_array[$i]>$max_v){
            $max_v=$some_array[$i];
        }
    }
    return $max_v;
}

echo maximum($array1).'<br/>';

$len = count($array1);

for ($i = 0; $i < $len ; $i++){
    $len--;
    for ($i2 = 0; $i2 < $len ; $i2++){
        if($array1[$i2]>$array1[$i2+1]){
            $bufer = $array1[$i2];
            $array1[$i2] = $array1[$i2+1];
            $array1[$i2+1] = $bufer;
        }
    }
}

foreach ($array1 as $varib){
    echo $varib.',';
}
?>