<?php

$arr=[1,2,3,4];
$list=a($arr);

var_dump(a($arr));

function a($arr)
{
	$res=[];
	$len=count($arr);

	for($i=0;$i<$len;$i++)
	{
		for($j=0;$j<$len;$j++)
		{
			for($k=0;$k<$len;$k++)
			{
				if($arr[$i]!=$arr[$j] && $arr[$k]!=$arr[$j] && $arr[$i]!=$arr[$k])
				{
					$res[]=$arr[$i].$arr[$j].$arr[$k];
				}
			}
		}
	}
	return $res;
}


?>