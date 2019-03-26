<?php

echo LastRemaining_Solution(10,4);

function LastRemaining_Solution($n, $m)
{
	for($i=$n;$i<=$m;$i++)
	{
		$a=$m-1;
		$b=$i-$a;

		if($b==1)
		{
			echo $b;die;
		}
	}

}

?>