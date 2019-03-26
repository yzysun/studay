<?php

echo GetUglyNumber_Solution(25);

function GetUglyNumber_Solution($index)
{
	$a=$index/2;
	if($a==intval($a))
	{
		echo $index;die;
	}else{
		$b=$index/3;
		if($b==intval($b))
		{
			echo $index;die;
		}else{
			$c=$index/5;
			if($c==intval($c))
			{
				echo $index;die;
			}else{
				echo $index.'不是丑数';
			}
		}
	}
}

?>