<?php

     /*
		5.
		100 va 200 oralig'idan n (mislo uchun=9) soniga bo'linadiganlarni ro'yhati va
		ularni yig'indisini hisoblaydigan dastur tuzing.
		108 117 126 135 144 153 162 171 180 189 198.
		The sum: 1683.
	*/
	
	$n = 9;
	$sum = 0;
	for($i=100; $i<200; $i++){
		if($i % $n == 0){
			echo $i . ",";
			$sum = $sum + $i;
		}
	}
	echo "<br/> The sum: $sum.";
	

?>