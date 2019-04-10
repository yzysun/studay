<?php 

include('db.php');

$model=new Db();

$cod=$_POST['cod'];
$name=$_POST['name'];
$theman=$_POST['theman'];
$phone=$_POST['phone'];
$ms=$_POST['ms'];

$model->add($cod,$name,$theman,$phone,$ms);

echo json_encode(['code'=>1]);die;

?>