<?php

     //	n sonigacha bo'lgan fibanachi sonlar ketma-ket chiqarish 
	// 	0 1 1 2 3 5 8 13 21 ...
	
	$f1=0;
	$f2=1;
	print($f1) . "<br/>";
	print($f2) . "<br/>";
	$n=100;
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
	

?>