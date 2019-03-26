<?php

$aPath="/a/b/c/d/test.php";
$bPath="/a/b/d/c/test.php";
$str=findCommonPath($aPath,$bPath);
var_dump($str);

function findCommonPath($aPath,$bPath)
{
	$res=[];
	$aPath=explode("/",$aPath);
	$bPath=explode("/",$bPath);

	$len=count($aPath)>count($bPath) ? count($bPath):count($aPath);

	for($i=0;$i<$len;$i++)
	{
		if($aPath[$i]==$bPath[$i])
		{
			$res[]=$aPath[$i];
		}else{
			break;
		}
	}
	$str=implode("/",$res);
	return $str;
}

?>