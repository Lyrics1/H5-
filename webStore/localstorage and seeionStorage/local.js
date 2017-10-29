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
			storage.num= num.val();
			console.log(storage.name);
			console.log(storage.num);
		}
	}

	//关闭页面清除localstorage
window.onbeforeunload=function(){
		clear(storage);
	}
	
}

