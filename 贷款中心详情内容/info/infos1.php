<?php
	header("Content-type:text/html;charset=utf-8");
	var_dump($_POST);exit();
	set_time_limit(0);
	$con = mysql_connect("127.0.0.1","root","root");
	if (!$con) {  die('Could not connect: ' . mysql_error());  }
	mysql_select_db("hc", $con);
	mysql_set_charset("utf8");
	$sql="insert into ims_recommended_relationship VALUES ('','".$_POST['recommender_id']."','".$_POST['names']."','".$_POST['phone']."','".$_POST['products']."')";
	$result = mysql_query($sql);
	if($result){
		echo "插入成功";
	}else{
		echo "插入失败";
	}
	mysql_close($con);
 ?>