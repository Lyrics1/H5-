<?php
	$name =$_GET['name'];
	$num = $_GET['num'];
	$a ="zf";
	$b=222;
	$result = array("name"=>$a,"num"=>$b);
	// echo "lll";
	// if(name =="张帆"){
		echo json_encode($result);
	// }

?>