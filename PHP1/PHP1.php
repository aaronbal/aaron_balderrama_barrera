
<?php
///Quitar cada k elemento php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$k= 3;

function extractEachKth($arr,$k){

///Para quitar el elemento k
$x = $k-1;

for($i = $x; $i < sizeOf($arr); $i+=$x){
  
  ///Eliminamos elemento
  array_splice($arr, $i ,1);
    
}

return $arr;

}


print_r(extractEachKth($arr, $k));


