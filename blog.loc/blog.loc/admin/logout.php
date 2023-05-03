<?php
session_start();

echo "Logout Successfully ";
session_destroy();// Sessiyalarni o'chirish funksiyasi, yani chiqishni amalga oshirish
header("Location: login.php");
exit();

?>