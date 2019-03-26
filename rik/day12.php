<?php


var_dump(Sum_Solution(5));

function Sum_Solution($n)
{
	$arr=range(1,$n);
	$str=array_sum($arr);
	return $str;
}

?>