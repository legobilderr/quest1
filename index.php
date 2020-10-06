<?php
$array1=array(1,2,4,412,32,142,231,2341,23,32);
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

echo '<br/>';



function b_serch ($some_array, $serch_obj){
    $len = count($some_array);
    $meedle = floor($len / 2);
    $step = $meedle/2;
    for ($i = 0; $i < $len; $i++){
        if ($serch_obj == $some_array[$meedle]){
            $answer = $meedle+1;
            echo  'его номер в списке : ';
            echo $answer;
            return ;            
        }
        elseif ($serch_obj < $some_array[$meedle] || $meedle >= $len ){
            $meedle = floor($meedle - $step);
            $step = $step / 2;
            // echo $meedle;
            // echo ' шаг назат </br>';
        }
        else {
            $meedle = ceil($meedle + $step);
            $step = $step / 2;
            // echo $meedle;
            // echo ' шаг вперёд </br>';
        }
    }
    echo 'этого элемента нет в списке ';
}
b_serch($array1,23);



?>