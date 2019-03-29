<?php

$str="aabbqccbbddafanfa";

var_dump(FirstNotRepeatingChar($str));

function FirstNotRepeatingChar($str)
{
	$len=strlen($str);
	for($i=0;$i<$len;$i++)
	{
		$arr=substr_count($str,$str[$i]);
		if($arr==1)
		{
			return $i+1;
		}
	}
}

?>