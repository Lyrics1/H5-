window.onload=function(){
	var select = document.getElementById('num');
	var temp = document.getElementById('temp');
	var  search = document.getElementById('search');

	select.onchange = function(){
		var index =select.selectedIndex;
		var value = select.options[index].value;//option 的value属性的值
		var text = select.options[index].text;
		console.log(index,value,text);
		console.log(index)
		console.log(text)
		post(text);
	}


}

function post(text){
	if(window.XMLHttpRequest){
		xml = new  XMLHttpRequest();
		//IE7，Firefox,chrom,opera,safair
	}else{
		xml = new ActiveObject("Microsoft.XMLHTTP");
	}
	xml.onreadystatechange = function(){
		if(xml.readyState ==4 && xml.status ==200){
			temp.innerHTML=xml.responseText;
		}
	}

	xml.open("get","../php/Ajax.php?text="+text +'&search='+search ,true);
	xml.send();
}