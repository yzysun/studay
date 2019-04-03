<?php

var_dump(a([1,2,3,4,5,6],2));

function a($arr,$n){	
	$len=count($arr);
	for($i=0;$i<=$len;$i++){
		if($n==$i){
			return $i-1;
		}
	}
	
}

echo "<br>";
var_dump(b([1,2,3,4,5,6],2));
function b($arr,$n){

	$arr=implode(",",$arr);
	$c=str_replace($arr,$n);
	return $c;

}

?>