<?php
	require_once('conn.php');
?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>

  	<meta charset="utf-8">
	<mata name="viewport" content="width=device-width,
 								initial-scale=1.0
 								
                           		 ">

    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  	<br>
  	<br>
	<form class="form-horizontal" role="form" action="plus.php" method="post">
		<div class="form-group">
			<label for="firstname" class="col-sm-3 control-label">活动名称</label>
			<div class="col-sm-6">
      			<input type="text" class="form-control" id="firstname" placeholder="请输入名称" name="firstname">
    		</div>
		</div>
		<div class="form-group">
			<label for="texts" class="col-sm-3 control-label">活动介绍</label>
			<div class="col-sm-6">
				<textarea class="form-control" rows="8" id="texts" placeholder="请输入活动介绍" name="texts"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="time" class=" col-sm-offset-1 col-sm-2 control-label">截止日期</label>
			<div class="col-sm-2">
				<input type="date" class="form-control" id="time" name="times">
			</div>	
		</div>
		<div class="form-group">
			<label for="select" class="col-sm-offset-1 col-sm-2 control-label">活动分类</label>
			<div class="col-sm-2">
				<select class="form-control" name="select">
			      <option>体育竞技</option>
			      <option>文化艺术</option>
			      <option>科技学术</option>
			      <option>爱心公益</option>
			      <option>志愿活动</option>
			      <option>找队友</option>
			      <option>其他</option>
			    </select>
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="col-sm-3 control-label">举办方</label>
			<div class="col-sm-6">
      			<input type="text" class="form-control" id="name" placeholder="请输入名称" name="name">
    		</div>
		</div>
		<div class="form-group">
			<label for="weixin" class="col-sm-3 control-label">微信号</label>
			<div class="col-sm-6">
      			<input type="text" class="form-control" id="weixin" placeholder="请输入微信号" name="weixin">
    		</div>
		</div>
		<br>
		<br>
		<div class="form-group">
			<div class="col-sm-offset-5 col-sm-7">
				<button type="submit" class="btn btn-default">提交</button>
			</div>
		</div>
	</form>


  </body>
  </html>


<?php
	if (isset($_POST['firstname']) &&isset($_POST['texts']) &&isset($_POST['times'])&&isset($_POST['select']) &&isset($_POST['name']) &&isset($_POST['weixin'])) {

		$firstname = $_POST['firstname'];
	$texts = $_POST['texts'];
	$times = $_POST['times'];
	$select = $_POST['select'];
	$name = $_POST['name'];
	$weixin = $_POST['weixin'];
	$uptime = date('Y-m-d',time());

	//var_dump($uptime);
	
	if ($firstname=='' || $texts=='' || $times=='' ||  $select=='' || $name=='' || $weixin=='')  {
		echo "<script> {window.alert('所填内容不能为空');} </script>";
	}
	else
	{
		$sql = "INSERT INTO activity (name,texts,publisher,weixin,classify, dateline, uptime)
VALUES ('$firstname', '$texts', '$name','$weixin','$select','$times','$uptime')";
		if ($db->query($sql) == TRUE) {
			echo "<script> {window.alert('提交成功');location.href='index.php'} </script>";
		}
		else 
		{
			echo "<script> {window.alert('提交失败请重新提交');} </script>";
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	}


	
}
	


  ?>
