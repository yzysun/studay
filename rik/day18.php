<?php

$a=10;
echo NumberOf1($a);

function NumberOf1($a){
	$b=0;
	$c=1;
	while($c){
		if($c & $a){
			$b++;
		}
		$c=$c<<1;
	}
	return $b;
}

?>