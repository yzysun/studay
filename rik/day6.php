<?php

echo calFn(1,13);

function calFn($n,$m)
{
	$sum='';
	for($i=$n;$i<=$m;$i++)
	{
		$sum.=$i;
	}
	return substr_count($sum,"1");
}

?>