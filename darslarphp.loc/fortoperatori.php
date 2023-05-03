<?php

	// 1.
	// for loop => takrorlash operatori
     /*
	     for($i = 0; $i < 10; $i++){
		     echo "$i <br/>"
	     }
     */

     // 2. 
	// kiritilgan songacha karra jadvali 
	// 1*1=1
	// 1*2=2 ...
	/*
	for($i=1; $i<=9; $i++){
		for($j=1; $j<=10; $j++){
			echo $i ." * $j =" . $i * $j ."<br/>";
		}
	} 
	*/

	//	3.
	//	n sonigacha bo'lgan fibanachi sonlar ketma-ket chiqarish 
	// 	0 1 1 2 3 5 8 13 21 ...
	/*
	$f1=0;
	$f2=1;
	print($f1) . "<br/>";
	print($f2) . "<br/>";
	$n=20;
	for($i=0; $i<$n; $i++){
		$temp = $f1; // 0
		$f1=$f2;	// 1
		$f2 = $temp + $f1;	// 1
		if($f2>$n){
			break;
		}
		else{
			print($f2)."<br/>";
		}
	}
	*/

	//	4.
	// n sonini faktorialini  aniqlash 
	// n! = 1*2*3*4*5*6....*n
	// 5! = 1*2*3*4*5=120
	/*
	$n = 6;
	$result = 1;
	for($i=1; $i<=$n; $i++){
		$result = $result*$i;
	}
	echo $result;
	*/
	
	/*
		5.
		100 va 200 oralig'idan n soniga bo'linadiganlarni ro'yhati va
		ularni yig'indisini hisoblaydigan dastur tuzing.
		108 117 126 135 144 153 162 171 180 189 198.
		The sum: 1683.
	*/
	/*
	$n = 9;
	$sum = 0;
	for($i=100; $i<200; $i++){
		if($i % $n == 0){
			echo $i . ",";
			$sum = $sum + $i;
		}
	}
	echo "<br/> The sum: $sum.";
	*/

	// 6.
	// kiritilgan sonni teskari tartibda chiqaruvchi darstur tuzing
	// 1234=4321 , 154511=115451 
	//  strrev funksiya orqali qilsak bo'ladi oson yuli 
	// $n =1556
	// echo strrrev($n); (PHP funksiyasi)
	/*
	// necha xona ekanligini chiqarib olamiz n sonini uzimiz uchun!
	// floor(1.99)=1, ceil(1.01)=2 
	$n = 516464;
	$b=0;
	for($i=0; 0<$n; $i++){
		$n = floor($n/10);
		echo $n. "<br/>";
		$b++;
	}
	echo $b . "  xonali son";
	*/
	//	teskarisini chiqaruvchi darstur!
	/*
	$n = 1546665;
	$natija = 0;
	for($i=0; 0 < $n; $i++){
		$result = $n%10;
		$n = floor($n/10);
		$natija = $natija * 10 + $result;
	}
	echo $natija;
	*/
?>