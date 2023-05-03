<?php
    
    /*
    $a=18; // a - pul.

    $b=18; // b - yosh. 

    if($a>=18 and $b>=15){
        echo "yosh ham pul ham yetadi";
    }
    elseif($a<18 and $b>15){
        echo "pul bor, yosh yetmaydi ";
    }
    elseif($a>18 and $b<15){
        echo "yosh yetadi pul yetmaydi";
    }
    */
    /*
    $a=5; //a o'zgaruvchiga son beramiz.

    echo $a%2==0 ? "juft" : "toq";
    */
/*
    $a=1;
    $b=-5;
    $c=15;

    $d= $b*$b-4*$a*$c;

    $x1=(-$b-sqrt($d))/(2*$a);

    $x2=(-$b+sqrt($d))/(2*$a);

    $x=(-$b)/(2*$a);

    //echo $d>0 ? "$x1  -birinchi ildiz, $x2 -ikkinchi ildiz, 2 ta ildizga ega!" : $d==0 ? "$x -bitta ildizga ega!" : $d<0 ? "ildizga ega emas!" : " ";

    if($d>0){
        echo "x1 - $x1 , x2 - $x2.<br> 2 ta ildizga ega!";
    }
    elseif($d<0){
        echo "ildizga ega emas!";
    }
    else{
        echo "x - $x. <br>bitta ildizga ega!";
    }
    */
       /* 
    $api = "5721060721:AAFsZ46QVBbykQdkaTE3gAd-Bko6NxeqLak";

    $sent ="Pragrammer uz";

    $chat_id= -1001273254975;

    $url="https://api.telegram.org/bot$api/sendMessage";

    //Json
    $update= json_decode(file_get_contents("php://input"));

    $text = $update->message->text;
    $chat_id = $update->message->chat->id;
    

    $data = [
        //"chat_id" => $chat_id,
        "chat_id" => $chat_id,
        "text" => $text . json_encode($update, JSON_PRETTY_PRINT),
    ];

    name($url, $data);


    function name($link, $params){

        $ch= curl_init();

        curl_setopt($ch, CURLOPT_URL, $link);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $response = curl_exec($ch);

        if(curl_error($ch)){
            echo var_dump(curl_error($ch));
        }
        else {
            echo $response;
        }
    

    }
    */

    // $name = $_POST['sonlar'];

    // $k=0;

    // for($i=$name; $i!= 0;){

    //     $i=floor($i/10);
    //     $k++;

    // }

    // echo $k ." shuncha xonali son";

    // $n=20;

    // $a = 0;

    // $b = 1;
    
    // while($n > $b){
    //     if()
    //     $n++;
    // }

    $massiv = [11,0,6,1,3,7,8,5,2,9];

    for($i=0; $i<count($massiv)-1; $i++){
        for($j=$i+1; $j<count($massiv); $j++){
            if($massiv[$i]>$massiv[$j]){
                $a = $massiv[$i];
                $massiv[$i]=$massiv[$j];
                $massiv[$j]=$a;

            }
        }
    }
    print_r($massiv);
    
    
?>

