<?php

    $update= json_decode(file_get_contents("php://input"));

    $message = $update->message;

    $text = $message->text;

    $chat_id = $message->chat->id;

    function bot($method, $params=[])
    {
        $token = "5704580208:AAF6L4eWtW1YnXTXpKr2szFOqsWxJXfWkPU";

        $url = "https://api.telegram.org/bot$token/$method";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $response = curl_exec($ch);

        if(curl_error($ch)){
            echo var_dump(curl_error($ch));
        }
        else {
            echo $response;
        };

    };
    
    if($text == $text){
        bot('senMessage', [
            'chat_id' => $chat_id,
            'text' => $text,
        ]);
    }    
     
?>