<?php
	include 'DBUtil.php';
	$text = $_GET['text'];
	$search = $_GET['search'];
	
	
	$con = mysqli_connect($severname,$username ,$password,$dbname);
	if(!$con){
		echo 'Can not connect database';
	}
	// 修改数据库为 "test"
	// mysqli_select_db($con,"test");
	$sql = "insert into first values('".$text."')";
	mysqli_query($con,$sql);
	// $error = mysql_error();

//mysql_affected_rows() 最近一次执行sql 语句是否不成功则返回-1，当执行了一次 INSERT 返回的值会是 1；如果是对已经存在的记录执行一次 UPDATE 将返回 2。
	if(mysql_affected_rows()){
		echo "success";
	}else{
		echo  "error";
	}
	// echo "hahhah";
	$sql = "select *  from first where opotions='".$text."'   ";

	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)){
		echo  $row['opotions'];
	}


	// $con->close();
	mysqli_close($con);


?>