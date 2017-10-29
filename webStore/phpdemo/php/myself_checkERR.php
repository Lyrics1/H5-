<?php
//自定义处理错误程序
	function customerError($error,$errstr){
		echo "<b>ERROR</b> [$error] $errstr "

	}
	//设置错误处理函数set_error_handler() 函数设置用户自定义的错误处理程序，然后触发错误（通过 trigger_error()）:如果使用该函数，会绕过标准 PHP 错误处理程序，同时如果必要，用户定义错误程序通过 die() 终止脚本。
	set_error_handler("customError");

?>