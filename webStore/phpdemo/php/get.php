<?php
echo $name = $_GET['fname'] . PHP_EOL;
echo $number = $_GET['fnumber'] . PHP_EOL;
echo $email = $_GET['femail'] . PHP_EOL;
echo $sex = $_GET['fsex'] . PHP_EOL;

//htmlspecialchars()将 < > 转化为html实体
//就是转化为 &lt ,&gt;
$name = htmlspecialchars($name);
$number = htmlspecialchars($number);
$email =htmlspecialchars($email);
$sex = htmlspecialchars($sex);
//已经删除这个函数了
// if(!get_magic_quotes_gpc()){
// 	//如果所存变量存在转义字符(逗号等。。），对转义字符进行转义
// 	$name = addcslashes($name);
// 	$number = addcslashes($number);
// 	$email = addcslashes($email);
// 	$sex = addcslashes($sex);

// }




echo '这是第  "'    . __LINE__ . '"行';
echo '<br>';
echo '这是第 “ '  . __LINE__ . ' ” 行';
echo '<br>';
echo  '文件路径' . __FILE__ ."绝对路径";

$servername = "localhost";
$username = "root";
$password = "zcyzf";
$dbname = "phpdemo";
if($sex = $_GET['fsex'] =="0"?"女" :"男");
//创建连接
$connection = new  mysqli($servername,$username,$password,$dbname);
//检测是否连接成功
if($connection->connect_error){
	die("连接失败：" . $connection->connect_error);
}
echo "连接成功";

//防止传入数据库的汉字乱码
$connection->set_charset("utf8");
//插入数据
$sql ="insert into getinfo values('".$number."', '".$name."','".$email."','".$sex."' )";

if($connection->query($sql) === TRUE){
	echo "新纪录插入成功";
}else {
	echo "error :" .$sql."<br>".$connection->error;

}


// 读取数据库的值
$sql= "select name from getinfo";
$result = $connection->query($sql);

if($result ->num_rows >0){
	//如果数据库中有数据的话
	while($row = $result->fetch_assoc()){
		//读取result的结果集
		echo " " .$row['name'];
	}
}else{
	echo "数据库为空";
}



//创建数据库
// $sql = "create database  get";
// if($connection->query($sql) === TRUE){
// 	echo "数据库创建成功";
// }else{
// 	echo "error" . $connection->error;
// }





//关闭连接
$connection->close();


?>