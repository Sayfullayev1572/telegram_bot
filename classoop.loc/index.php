<?php

     class Worker {
          public $name;
          public $age;
          public $oylik;
          
          public function name($name){
               return $this->name = $name;
          }
          public function age(){
              return $this->age = $age;
          }
          public function oylik(){
              return $this->oylik = $oylik;
          }
     }
     $daromad = new Worker();

     $daromad->name = "Xurshid";

     $daromad->age = 22;

     $daromad->oylik = "200$";

     //echo $daromad->name("Og'abek"). "<br/>". $daromad->name("23")."<br/>".$daromad->name("bir tinga ishlaydi");

     //echo "ismi - " . $daromad->name . "<br/>" . "yoshi - " . $daromad->age . "<br/>" . "oylik - " . $daromad->oylik;

?>