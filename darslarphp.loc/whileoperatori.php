<?php

     //1.
     // While takrorlash operatori
     /*
     $a=1;
     while($a < 10){
          echo $a." ". "<br/>";
          $a++;
     }
     */

    //2.
    // 100 gacha 7 ga bo'linadigan sonlarni chiqaramiz
     /*
    $a = 0;
    $n = 100;
    while($a < $n){
          if($a % 7 == 0){
               echo $a . " , ";
          }
          $a++;
     }
    */

    //3.
    // 1 dan n sonigacha bo'lgan juft sonlarni yig'indsi toping
     /*
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
     */

     //4.
     // N sonini raqamlar yog'indisini aniqlash?
     /*
     $sum = 0;
     $n = 1546; // 1+5+4+6=16
     while($n !=0){
          $digit = $n % 10;
          $sum += $digit;
          $n = floor($n/10);
     }
     echo $sum;
     */

     //5.
     // 2 lik sanoq sestemasidan 10 lik sanoq sestemasiga o'tish
     // echo bindec(111);  // php funksiyasida
     /*
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
     */

     //6.
     // 10 likdan 2 lik sanoq sestemasiga utish
     /*
     $n = 13;
     $sum = 0;
     echo decbin($n) . "<br/>";
     $i = 0;
     while($n!=0){ // 13
          $digit = $n%2; // 1 
          $sum = $digit * (10**$i)+$sum; // 
          $n = floor($n / 2);
          $i++;
     }
     echo $sum;
     
?>