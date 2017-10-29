<?php
	$name = $number = $email = $sex ="";
	$nameerr = $numbererr = $emailerr = $sexerr = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST['fname'])){
			$nameerr = "姓名不可为空";
		}else{
			$name= test_input($_POST['fname']);
			//正则 检测名字是否只是包含字母和空格
			if(!preg_match("/^[a-zA-Z ]*$/",$name)){
				$nameerr="格式有误，只允许空格和字母"；
			}
		}


		if(empty($_POST['fnumber'])){
			$numbererr ="学号不可为空";
		}else{
			$number=test_input['fnumber'];
			if(!preg_match("/^[0-9]{8}"/, $number)){
				$numbererr="格式有误，只允许空格和字母"；
			}
		}


		if(empty($_POST['femail'])){
			$emailerr ="邮箱不可为空";
		}else{
			$email = test_input['femail'];
			if(!preg_match("/^([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
				$emailerr ="格式有误";
			}
		}

		if(empty($_POST('sex'))){
			$sexerr ="性别不可为空";
		}else{
			$sex =test_input('sex');

		}
		//防止恶意攻击插入代码
		function test_input($data){
			$data = trim($data);
			//trim()移除$data两边的空白字符
			$data = stripslashes($data)
			//除字符串中的反斜线字符,如果有两个反斜线则去掉一个
			$data =htmlspecialchars($data)
			//将html转化为实体；就是不会成为html 标签，而是普通的字符
			return $data;
		}
	}


?>