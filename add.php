<?php
	
	function Sum($n){
		
		$sum = 0;

		for ($i = 1; $i <= $n ; $i++) { 

			$previousSum = $sum;

			$sum += $i;
			
			echo $previousSum ." + ". $i ." => ". $sum ." <br> ";;

		}


	}

	Sum(10);



?>