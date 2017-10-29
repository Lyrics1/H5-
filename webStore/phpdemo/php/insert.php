<?php
	$severname ="localhost";
	
	$username ="root";
	$password ="zcyzf";
	 $dbname= "bookstor";
	 $con = mysqli_connect($severname,$username,$password,$dbname);
	 if(!$con){
	 	echo 'Can not connect database';
	 }$con->set_charset("utf8");
	$i =1;
	while($i<100){
		$sql="insert into book (book_name,book_image,book_writer,book_introduction,book_price) values('天马行空','images/".$i.".jpg','Lyrics','南方姑娘你是否适应北方的秋凉',23)";

	 mysqli_query($con,$sql);
	$i++;
	}

	// mysql_close($con);
	

?>