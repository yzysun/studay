<?php

class Db{

	private $_pdo;

	//连接数据库
	public function __construct(){
		$this->_pdo=new PDO("mysql:host=127.0.0.1;dbname=xiao2.5","root","root");
	}

	//添加方法
	public function add($cod,$name,$theman,$phone,$ms){
		
		$sql="insert into yk (cod,name,theman,phone,ms) values('$cod','$name','$theman','$phone','$ms')";
		return $this->_pdo->exec($sql);

	}

	//修改方法
	public function update($zt,$id){
		$sql="update yk set zt='$zt' where id='$id'";
		return $this->_pdo->exec($sql);
	}

	//查询方法
	public function select(){
		$sql="select * from yk";
		return $data=$this->_pdo->query($sql)->fetchAll();
	}

	//删除方法
	public function delete(){
		$id=$_GET['id'];
		$sql="delete from yk where id='$id'";
		$res=$this->_pdo->exec($sql);
		if($res){
			echo "删除成功";die;
		}
	}

}

?>