<?php
     // inheritanc - meros olish
     // extends - bog'lash ( class bolasini(nomi) extends otasini (nomi))
     // overriding - ustidan to'g'ridan to'g'ri yozish
     // __construct - boshlang'ch qiymat berish __construct($model,$year)

     class Car 
     {
          public $model;
          public $year;

          public function __construct($model,$year)
          {
               $this->model = $model;
               $this->year = $year;
          }

          // methods
          public function drive()
          {
               return 'salom';
          }

          public function setModeli($model)
          {
               $this->model = $model;
          }
     }

     class ElectricCar extends Car
     {
          public $batarya;

          public function charge()
          {
               return "charging";
          }
     }

     $tesla = new ElectricCar('tesla',2022);

     var_dump($tesla);

?>
