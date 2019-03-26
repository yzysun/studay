<?php

class Db{

	//私有的静态属性
	private static $_instance=null;


	//私有的构造方法
	private function __construct()
	{

	}

	//私有的克隆方法
	private function __clone()
	{

	}

	//公共的静态方法
	public function getInstance()
	{
		if(!(self::$_instance instanceof Db))
		{
			self::$_instance=new Db();
		}else{
			return self::$_instance;
		}
	}


}

?>