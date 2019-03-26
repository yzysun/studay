<?php
include("Person.php");

$a1=new Person("yzy1",18);
$a2=new Person("yzy2",15);
$a3=new Person("yzy3",26);
$a4=new Person("yzy4",17);
$a5=new Person("yzy5",24);
$a6=new Person("yzy6",13);
$a7=new Person("yzy7",19);
$a8=new Person("yzy8",11);


echo obj(8);

function obj($n)
{
	for($i=1;$i<=$n;$i++)
	{
		$c="a".$i;
		global $$c;
	}

	$max=1;
	for($i=1;$i<=$n;$i++)
	{
		$a="a".$i;
		$b="a".$max;

		if($$a->_age > $$b->_age)
		{
			$max=$i;
		}
	}
	$c="a".$max;

	return $$c->_name.",".$$c->_age;
}


?>