<?php

// echo sum1();
// echo sum2();
// echo sum3();

function sum1()
{
	$sum='';
	for($i=1;$i<=100;$i++)
	{
		$sum=$sum+$i;
	}
	echo $sum;
}

function sum2()
{
	$sum='';
	$i=1;
	while($i<=100)
	{
		$sum=$sum+$i;
		$i++;
	}
	echo $sum;
}

function sum3()
{
	$sum='';
	$i=1;
	do{
		$sum=$sum+$i;
		$i++;
	}while($i<=100);
	echo $sum;
}


// echo jc1(6);
// echo jc2(5);

function jc1($n)
{
	$sum=1;
	for($i=1;$i<=$n;$i++)
	{
		$sum=$sum*$i;
	}
	echo $sum;
}

function jc2($n)
{
	if($n==1)
	{
		return 1;
	}else{
		return $n*jc2($n-1);
	}
}

echo str("abbac");
function str($n)
{
	$str=strrev($n);
	if($str==$n)
	{
		return $str."是回文";
	}else{
		return "NO";
	}
}
?>