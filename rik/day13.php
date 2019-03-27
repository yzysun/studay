<?php

$num1=2;
$num2=8;
var_dump(Add($num1, $num2));

function Add($num1, $num2)
{
	$res=[$num1,$num2];
	$str=array_sum($res);
	return $str;
}

?>