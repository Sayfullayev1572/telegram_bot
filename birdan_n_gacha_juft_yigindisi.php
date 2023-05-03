<?php

     // 1 dan n sonigacha bo'lgan juft sonlarni yig'indsi toping
     
    $a = 1; 
    $n = 500;
    $sum = 0;
    while($a <= $n){
          if($a % 2 == 0){
               $sum = $sum + $a;
          }
          $a++;
     }
     echo $sum;
     

?>