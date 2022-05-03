<?php

function linear_search(array $array, int  $value)
{
     if (!$array || !$value) {
          return -1;
     }

     foreach ($array as $i => $v) {
          if ($v == $value) {
               return $i;
          }
     }

     return -1;
}


$arr = array(2, 3, 4, 10, 40);
$x = 10;


echo linear_search($arr, $x); // 3
