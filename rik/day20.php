<?php

echo CountSteps(5,5);

function CountSteps($x,$y){
	for($i=1;$i<=$x;$i++){
		for($j=$i;$j<=$y;$j++){
			$sum=$x*$y;
			return $sum;
		}
	}

}

?>