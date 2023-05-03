<?php

     // N sonini raqamlar yog'indisini aniqlash?
     
     $sum = 0;
     $n = 1546; // 1+5+4+6=16
     while($n !=0){
          $digit = $n % 10;
          $sum += $digit;
          $n = floor($n/10);
     }
     echo $sum;
     

?>