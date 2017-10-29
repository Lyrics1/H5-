window.onload=function(){
	
	var name = $("#name");
	var num = $("#num");
	console.log(name,num);
	var t=document.getElementById("submit");
	
	t.onclick = function(){
		console.log(name.val(),num.val());
		$.ajax({
			async : true,
			url:  "../php/kuayu.php",
			type : "GET",
			data:{
				name : name.val(),
				num :num.val()
			},
			dataType:"json",
			success :function(data){
				console.log("success",data.name);
				
				name.val(data.name)  ;
				num.val(data.num) ;
				 setCookie("username",name.val(),1);
				 setCookie("number",num.val(),1);

			},
			error:function(jqxhr,statetext,state){
				console.log("error");
				console.log(jqxhr,statetext,state);
			}


		})
	}

	//设置cookie
	function setCookie(cookieName,cookieValue,Time){
		var today = new Date();//设置当前时间
		var expire = new Date();//声明一个date 类型变量存储过期时间
		if(Time==null ||Time==0){
			Time=1;//days
		}
		//计算过期时间(毫秒)
		expire.setTime(today.getTime()+Time *24*60*60*1000);
		document.cookie = cookieName+"="+escape(cookieValue) +";expires="+expire.toGMTString();


	}
}
