<?php
	require_once('conn.php');

	$mysqli_result = $db->query("SELECT * FROM activity");
						$rows = array();
						while ($row = $mysqli_result->fetch_array()) {	 		
							$rows[]=$row;
						}

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<mata name="viewport" content="width=device-width,
 								initial-scale=1.0
 								
                           		 ">
    <title></title>

    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid"> 
		<div class="navbar-header">
			<a class="navbar-brand" href="#"> </a>
		</div>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">搜索</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
      		<li><a href="#"><span class="glyphicon glyphicon-search"></span>查看</a></li>
      		<li><a href="plus.php"><span class="glyphicon glyphicon-plus"></span> 添加</a></li>
    	</ul>
	</div>
</nav>

<ul class="nav nav-tabs">
	<li class="active"><a href="#all" data-toggle="tab">全部活动</a></li>
	<li><a href="#putong" data-toggle="tab">普通活动</a></li>
	<li><a href="#shetuan" data-toggle="tab">社团活动</a></li>
	<li><a href="#fenlei" data-toggle="tab">分类</a></li>
</ul>

<br>
<br>

<div class="tab-content" style="margin-left: 20%; margin-right: 20%;">
		<div class="tab-pane fade in active" id="all">
		<?php
			foreach ($rows as $row) {
		?>
			<div class="panel panel-default">
					<div class="panel-heading">

		<?php
			echo $row['name'];
		?>
					</div>
					<div class="panel-body">
		<?php
			echo "举办方： ";  echo $row['publisher']; echo "<br>"; 
			echo "截止日期： "; echo date($row['dateline']);  echo "<br>"; 
			echo "开始日期： "; echo date($row['uptime']); 
		  ?>

					</div>
			</div>
		<?php
			}
		  ?>				
		</div>
		<div class="tab-pane fade" id="putong">
				<div class="panel panel-default">
					<div class="panel-heading">
						
					</div>
					<div class="panel-body">
						
					</div>
				</div>
		</div>
		<div class="tab-pane fade" id="shetuan">
				<div class="panel panel-default">
					<div class="panel-heading">
						
					</div>
					<div class="panel-body">
						
					</div>
				</div>
		</div>
		<div class="tab-pane fade" id="fenlei"> 
				<div class="panel panel-default">
					<div class="panel-heading">
						
					</div>
					<div class="panel-body">
						
					</div>
				</div>
		</div>
</div>

	






</body>
</html>
