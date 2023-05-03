<?php

     //	teskarisini chiqaruvchi darstur!
	
	$n = 1546665;
	$natija = 0;
	for($i=0; 0 < $n; $i++){
		$result = $n%10;
		$n = floor($n/10);
		$natija = $natija * 10 + $result;
	}
	echo $natija; //5666451
	

?>