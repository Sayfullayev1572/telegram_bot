<?php
     // https://api.telegram.org/bot5704580208:AAF6L4eWtW1YnXTXpKr2szFOqsWxJXfWkPU/getUpdates

     $boy = $_POST['yigit'];

     $girl = $_POST['qiz'];

     $love = $_POST['sevgi'];

     $token = "5704580208:AAF6L4eWtW1YnXTXpKr2szFOqsWxJXfWkPU";

     $chat_id = 1585277374; // uzimni 

     $chat_2 = -1001273254975; // juralar 

     $id_sodiq = 5375196079; //Sodiq

     $name = rand(0,100);
     
     if($name>50){
          $message = "❤️ Love $name%";
     }
     elseif($name<50){
          $message = "💔 Not love $name%";
     }
     else{
          $message = "🖤 Doslik $name%";
     } 

     $massiv = [
          'Yigit🤵🏻:  ' => $boy,
          'qiz👰🏻‍♀️:  ' => $girl,
          'foiz💋:  ' => $message,
     ]; 


     foreach($massiv as $key => $value){
          $text.="<b>".$key."</b>".$value."%0A";
     }

     $sendTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}","r");

     if($sendTelegram){
          echo "Malumot yuborildi";
     }
     
?>