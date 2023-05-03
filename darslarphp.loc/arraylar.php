<?php
     // katta sondan kichigiga qarab chiqaradi (kichkinasidan kattasiga o'tish uchun $arr[$j]<$arr[$i])
     /*
     $arr = [1,20,-40,50,-2,100,8,9,78];
     for($i = 0; $i < count($arr)-1; $i++ ){
          for($j = $i+1; $j < count($arr); $j++){
               if($arr[$j] > $arr[$i]){
                    $a = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $a; 
               }
          }
     }
     print_r($arr);
     */

     //bir xil sondagilarni chiqarmaslik
     /*
     $numbers = [1,2,1,4,3,6,7,5,5,5,-2,6];
     $duplicates = [];
     $removes = [];
     for($i = 0; $i<count($numbers); $i++){
          if(!in_array($numbers[$i], $duplicates)){
               $duplicates[] = $numbers[$i];
          }
          else{
               $removes[] = $numbers[$i];
          }
     }
     print_r(array_diff($numbers,$removes));
     */

     /*
     // array search 
     $numbers = [10,-2,3,4,5,6,7];
     $target = 5;
     for($i = 0; $i<count($numbers); $i++){
          if($numbers[$i] == $target){
               echo $i;
               break;
               // $result = $i; // nechinchi indexda 5 bor ekanligini topadi
          }
     }
     // print_r($result);
     */

     /*
     $numbers = [10,-2,3,4,5,6,7];
     //1.
     // qator qilib chiqarish
     for($i=0; $i<count($numbers); $i++){
          echo $numbers[$i]."<br/>";
     }
     */

    /*
    $numbers = [10,-2,3,4,5,6,7];
     //2.
     //min va max topishi arrayda 
     $min = $max = $numbers[0];
     for($i=0; $i < count($numbers); $i++){
          if($numbers[$i] > $max){
               $max = $numbers[$i];
          }
          if($numbers[$i] < $min){
               $min = $numbers[$i];
          }
     }
     echo "min: $min, max: $max";
     */

     // e'lon qilish
     // $array =  array(1,2,2,3,5,8);
     // print_r($array). "<br/>"; //1.

     /*
     $cars = [
          "Malibo", "Spark", "Tiko","Nexia","Matiz",
     ];
     $outsideCars = [
          "Prado","BMW","Mercedez Benz",
     ];
     */
     // print_r(array_merge($cars,$outsideCars)); // massivlarni qo'shib chiqaradi
     // echo var_dump(in_array("BMW", $cars)); // izlayotgan element bor yueligini tekshiradi (ture) (folse)
     // $cars[] = "Spark"; // yangi indexdan ma'lumot qushish
     // print_r($cars). "<br/>";//2.
     // array_splice($cars, 1, 2);  // array_splice(qaysi arraydanligi, ush va undan keyingi, nechta element) uchirib tashlidi
     // print_r($cars). "<br/>"; //3.
     // echo count($cars). "<br/>"; //4. // elementlar sonini topish
     // echo array_search("Spark", $cars). "<br/>"; //5. // izlayotgan spark nechinchi indexda ekanligini chiqarib beradi
     // echo $cars[5]. "<br/>"; // indexdan chaqirib olish
     // echo var_dump(isset($cars)). "<br/>"; // o'zgaruvchi bor yur ekanligini aytadi. bool(true)
     // unset($cars); // o'rgaruvchini yuq qilib yurboradi
     // echo var_dump(isset($cars)). "<br/>"; // endi bool(folse) chiqadi
     // const PI = 3.14156; // o'zgarmas
     // echo PI . "<br/>";
     // define("SAYT_URL","https://sayfullayevnorbek.uz"); // define("nomi","nima ekanligi") o'zgarmas
     // echo SAYT_URL;

     /*
     // associative array, key-value pair
    $user = [
          "name" => "Norbek",
          "surname" => "Sayfullayev",
          "company" => "Pogrammer Uz",
          "job" => "Dasturchi",
          "experienaci"  => 3,
          "is_active" => true,
     ];
     $user["University"] = "TATU"; // index qo'shdik
     echo $user["job"] . "<br/>";
     print_r($user);
     */
?>