<?php
  class Odam {
    public $name; // bu
    public $age; // bu


    public function name($name/**bu bilan teng emas adashtirmaslik kk */){
      return "ismi - " . $name; // ismi - Alisher chiqadi.
    }

    public function age($age/**bu bilan teng emas adashtirmaslik kk  */){
      return "yosh - ".$age;
    }
     
  }

  $person = new Odam();
  $person->name = "Odil";
  $person->age = 25;

  //echo $person->name; // Odil chiqadi.

  $person1 = new Odam();
  $person1->name = "Ilxom";
  $person1->age = 29;



  //echo $person1->age = 35; // 35 birdan tamilab chiqarish

  //echo $person1->name; // Ilxom chiqadi.

  //echo $person->age + $person1->age; // qo'shsam- 54 ko'paytirsam- 725 ayirsam- (-4) bolsam- 0.86206896551724 daraja(**)- 3.4694469519536E+40

  //echo $person->name.' '.$person1->name; // Odil Ilxom chiqadi.

  //echo 'ismi - '.$person->name.'<br/>'.'yoshi - '.$person->age; // ismi - Odil    yoshi - 25 chiqadi.

  //echo $person->name("Alisher"); // ismi - Alisher chiqadi.

  //echo $person->age(27); // yoshi - 27 chiqadi.

  //echo $person1->name("Alisher"); // ismi - Alisher chiqadi.

  //echo $person1->age(27); // yoshi - 27 chiqadi.

  //echo $person->name("Ruslan").'<br/>'.$person->age(18); // ismi - Ruslan   yosh - 18 chiqadi.
  
  //echo $person1->name("Ruslan").'<br/>'.$person1->age(18); // ismi - Ruslan   yosh - 18 chiqadi.

  //echo $person1->name("Ruslan").'<br/>'.$person->name; // ismi - Ruslan  Odil chiqadi.

  //echo $person1->name("Ruslan").'<br/>'.$person->name("Alisher"); //ismi - Ruslan ismi - Alisher chiqadi.
?>