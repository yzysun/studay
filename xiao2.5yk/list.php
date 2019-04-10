<?php

include('db.php');

$model=new Db();

$data=$model->select();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap 实例 - 条纹表格</title>
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<table class="table table-striped">
		<tr>
			<td>ID</td>
			<td>编号</td>
			<td>客户姓名</td>
			<td>负责人</td>
			<td>公司电话</td>
			<td>描述</td>
			<td>操作</td>
		</tr>
		<?php foreach ($data as $k => $v) {?>
			<tr>
				<td><?php echo $v['id'];?></td>
				<td><?php echo $v['cod'];?></td>
				<td><?php echo $v['name'];?></td>
				<td><?php echo $v['theman'];?></td>
				<td><?php echo $v['phone'];?></td>
				<td><?php echo $v['ms'];?></td>
				<td><a href="">删除</a></td>
			</tr>
		<?php }?>
	</table>
</body>
</html>