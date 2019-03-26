<?php

	$arr="Have you ever gone shopping and";
	$arr=str_split($arr);//将字符串分割成数组
	$arr_count=array_count_values($arr);//统计数组中的值
	// var_dump($arr_count);die;
	echo "重复出现三次以上的字符：";

	foreach ($arr_count as $key => $value) {
		if($value>3)
		{
			echo $key.",";
		}
	}

?>