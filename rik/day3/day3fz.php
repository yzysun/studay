<?php
class Db{


	//非递归
	public static function fdg($n)
	{
		$i=1;
		$j=1;

		for($a=0;$a<$n;$a++)
		{
			$j=$j+$i;
			$i=$j-$i;
		}
		return $i;
	}


	//递归
	public static function dg($n)
	{
		if($n==0||$n==1)
		{
			return 1;die;
		}else{
			return self::dg($n-1) + self::dg($n-2);
		}
	}
}
?>