<?php

//задание 1

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


//задание 2

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


//задание 4


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

echo '<br/>';


//задание 3

// CREATE TABLE if not exists relations
// (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     product_id INT,
//     tag_id INT,
//     FOREIGN KEY (product_id) REFERENCES products(id) ON delete cascade ON update cascade,
//     FOREIGN KEY(tag_id) REFERENCES tags(id) ON delete cascade ON update cascade 
// );

// select products.name as product_name, product_id, count(*)
// from relations
//     left join products on products.id = relations.product_id
//     left join tags on tags.id = relations.tag_id
// GROUP BY products.name,product_id
// having count(tag_id)>10;

echo '<br/>';


//задание 5

class Vector2d {
    private $coordx ;
    private $coordy ;

    public function __construct($array){
        $this->coordx = $array[0];
        $this->coordy = $array[1];
    }
        
    public function summ_vector($vector){
        $this->coordx=$this->coordx+$vector->coordx;
        $this->coordy=$this->coordy+$vector->coordy;
        return [$this->coordx,$this->coordy];
    }
    
    public function diff_vector($vector){
        $this->coordx=$this->coordx-$vector->coordx;
        $this->coordy=$this->coordy-$vector->coordy;
        return [$this->coordx,$this->coordy];
    }     
    
    public function multiply_on_number($number){
        $this->coordx=$this->coordx*$number;
        $this->coordy=$this->coordy*$number;
        return [$this->coordx,$this->coordy];
    } 

    public function __toString(){
        return "coords :$this->coordx,$this->coordy";
    }
}
$vector= new Vector2d([5,20]);
$vector1= new Vector2d([12,6]);

$vector->multiply_on_number(5);
echo $vector;




echo '<br/>';


//задание 6

function revers_string($string)
{
    $b = '';
    $l  = strlen($string)-1;
    for ($i = 0; $i < $l/2; $i++) {
        $b = $string[$i];
        $string[$i] = $string[$l-$i];
        $string[$l-$i] = $b;
    }
    return $string;
}



function is_polidrom($string){
    $string=mb_strtolower(str_replace(" ","",$string));
    // if ($string==strrev($string)){
    //     echo ' это строка полиндром';}
    // else {
    //     echo ' это строка не полиндром';
    //}
    if ($string==revers_string($string)){
        echo ' это строка полиндром';}
    else {
        echo ' это строка не полиндром';
    }
}

is_polidrom('Step on no pets');


?>