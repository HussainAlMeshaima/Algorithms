<?php


function binary_search(array $array, int $begin, int $end, int $value)
{
     if ($begin > $end)  return -1;

     // $middle = ($end + $begin) / 2;
     $middle = $begin + ($end - $begin) / 2;
     $middle = ceil($middle);

     if ($array[$middle] == $value) {
          return $middle;
     }


     if ($array[$middle] < $value) {
          return binary_search($array, $middle + 1, $end, $value);
     } else {
          return binary_search($array, $begin, $middle - 1, $value);
     }
}

function binary_search2(array $array, int $begin, int $end, int $value)
{
     while ($begin < $end) {
          $middle = $begin + ($end - $begin) / 2;
          $middle = ceil($middle);

          if ($array[$middle] == $value) {
               return $middle;
          }


          if ($array[$middle] < $value) {
               $begin = $middle + 1;
          } else {
               $end = $middle - 1;
          }
     }

     return -1;
}


$arr = array(10, 20, 30, 50, 60, 80, 110, 130, 140, 170);
$firstIndex = 0;
$lastIndex = count($arr) - 1;

echo "\n" . binary_search($arr, $firstIndex, $lastIndex, 110);
// echo "\n" . binary_search2($arr, $firstIndex, $lastIndex, 110);
