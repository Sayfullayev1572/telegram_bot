<?php

    //1.
    // index.phpdan code textareasidan kelayapti
    $code = $_POST["code"];

    //2. 
    // fayl yasash uchun nom berdik
    $filename = "natija.php";

    //3. 
    // fileni yasab, ichiga kelgan kodni o'rnatdik
    file_put_contents($filename, $code);
    
    //4.
    // shell_exec orqali faylni ishga tushirdik
    $output =  shell_exec("php $filename");

    //5. 
    // natijani chiqardik
    echo $output;

?>