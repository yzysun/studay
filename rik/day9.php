<?php

$numbers=array(3,32,321);
echo PrintMinNumber($numbers);

function PrintMinNumber($numbers)
{
	$a=count($numbers);
	for($i=0;$i<$a;$i++)
	{
		for($j=$i+1;$j<$a;$i++)
		{
			if($numbers[$i].$numbers[$j]>$numbers[$j].$numbers[$i])
			{
				$b=$numbers[$i];
				$numbers[$i]=$numbers[$j];
				$numbers[$j]=$b;
			}
		}
	}
	return implode('',$numbers);
}

?>