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

$answer=maximum($array1);
echo $answer;
?>