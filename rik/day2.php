<?php

	$n=156;
	echo flower($n);

	function flower($n)
	{
		$b=$n/100%10;
		$c=$n/10%10;
		$d=$n/1%10;

		if($b*$b*$b + $c*$c*$c + $d*$d*$d==$n)
		{
			return "true";die;
		}else{
			return "false";die;
		}

	}

?>