window.onload=function(){
	
	var name = $("#name");
	var num = $("#num");
	console.log(name,num);
	var t=document.getElementById("submit");
	t.onclick=function(){
		if(!window.localStorage){
		console.log("不支持localStorage");

		}else{
			var storage = window.localStorage;
			storage.name =name.val();
			//storage.setItem("key",value);
			//storage["key"]=value;
			storage.num= num.val();
			//storage.getItem["key"];
			console.log(storage.name);
			console.log(storage.num);
			// window.onunload=function(){
			// storage.clear();	
			// //如果关闭页面则清除localStorage
				
			// };
			//如果刷新页面也会清除上面这种方法：
			//所以必须判断是关闭网页还是刷新页面
			

			
			
		}
	}
}
// 	window.onunload = function(){        
// 				 console.log("close");
// 			        var a_n = window.event.screenX - window.screenLeft;        
// 			        var a_b = a_n > document.documentElement.scrollWidth-20;        
// 			        if(a_b && window.event.clientY< 0 || window.event.altKey){        
// 			                 storage.clear();
// 			                 alert("close");
// 			        }else{ 
// 			                  console.log('跳转或者刷新页面行为');      
// 			            } 
	
// }

