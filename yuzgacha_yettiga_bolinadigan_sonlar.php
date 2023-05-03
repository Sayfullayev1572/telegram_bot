<?php

     // 100 gacha 7 ga bo'linadigan sonlarni chiqaramiz
     
    $a = 0;
    $n = 100;
    while($a < $n){
          if($a % 7 == 0){
               echo $a . " , ";
          }
          $a++;
     }
    

?>