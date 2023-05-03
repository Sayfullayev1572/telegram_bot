<?php

     // Functions - Funksiyalar 2 ga bo'linadi parametrli va parametisiz

     // DRY - Don't Repeat  Yourself  
     /*
     $a = 5;
     $b = 6;
     echo $a + $b . "<br/>";

     $d = 5;
     $c = -6;
     echo $d + $c;
     */

     /*
     function funksiya_nomi(){// parametrsiz f-ya
          echo "Hello, Programmer Uz";
     }
     funksiya_nomi();// e'lon qilish kerak
     */

     /*
     function funksiya_nomi($name){// parametrli f-ya
          echo "Hello, $name" . "<br/>";
     }
     funksiya_nomi("Programmer UZ");// e'lon qilish kerak
     funksiya_nomi("Norbek");// e'lon qilish kerak
     funksiya_nomi("Sayfullayev");// e'lon qilish kerak
     */

     /*
     function funksiya_nomi($name = "Programmar Uz"){//f-yaga boshlang'ich qiymat berish f-ya bo'sh bo'lsa oladi
          echo "Hello, $name" . "<br/>";
     }
     funksiya_nomi("Programmer");// e'lon qilish kerak
     funksiya_nomi("Norbek");// e'lon qilish kerak
     funksiya_nomi();// bu bo'sh shuni urniga Programmer Uz chiqaradi
     */

     /*
     add(1,2);
     add(55,6);
     add(158,221564);
     add(5532154,63546);     
     function add($a,$b){
          echo $a + $b . "<br/>";
     }
     */
?>