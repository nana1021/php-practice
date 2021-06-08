<?php
function nibai($i){
    return $i = $i * 2;
}
$sum = nibai(55);
echo $sum;
echo"\n";



function add($a, $b){
    $result = $a + $b;
    return $result;
}
$value = add(15,12); //足したい数値入れる
echo $value;
echo"\n";



function kakeru($arr){
    $result = 1;
    foreach($arr as $ar)
    $result *= $ar;  //$result = $result *$arと同じ
    return $result;
}
$arr = [1,3,5,7,9];
echo kakeru($arr);
echo"\n";



function max_array($arr){
$max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }
 return $max_number;
 }
 $arr = [999,222,111,888];
 echo max_array($arr);
 echo "\n";
 
?>