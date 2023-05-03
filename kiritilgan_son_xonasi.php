<?php
	
	// necha xona ekanligini chiqarib olamiz n sonini!
	// floor(1.99)=1, ceil(1.01)=2 
	$n = 516464;
	$b=0;
	for($i=0; 0<$n; $i++){
		$n = floor($n/10);
		echo $n. "<br/>";
		$b++;
	}
	echo $b . "  xonali son"; // 6 xonali son

?>