<?php

     // 2 lik sanoq sestemasidan 10 lik sanoq sestemasiga o'tish
     // echo bindec(111);  // php funksiyasida
     
     $n = 111011011; 
     $i = 0;
     $sum = 0;
     echo bindec($n) . "<br/>"; // shu bilan while bir-xil ishlasa xato qilmagan bo'lamiz.
     while($n != 0){
          $digit = $n % 10;
          $sum = $sum + $digit * 2**$i;
          $i++;
          $n = floor($n / 10);
     }
     echo $sum;


?>