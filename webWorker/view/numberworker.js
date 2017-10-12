
//同时工作线程的 onmessage 事件处理器用以接收从主页
// 面中传递过来的数值，然后把这两个数值传递到 function 
// calculate 用以计算。当计算完成后
// ，调用事件处理器 postMessage，把计算结果发送到主页面。
onmessage =(event)=>{
	// console.log(event.data.name);
	var first = event.data.first;
	var second = event.data.second;
		console.log(first,second)
	calculate(first,second);


};


calculate=(first,second)=>{
	console.log(first,second)
	var common_divisor = divisor(first,second);
	 var common_multiple=multiple(first,second);

	 postMessage("Work done! " + 
"The least common multiple is "+common_divisor 
 +" and the greatest common divisor is "+common_multiple); 
 }  
 // function divisor：用以计算最大公约数，
 divisor=(a, b)=> { 
	 if (a % b == 0) { 
	 return b; 
	 } else { 
	 return divisor(b, a % b); 
	 } 
 } 

//一个是 function multiple：用以计算最小公倍数。
 function multiple( a,  b) { 
 var multiple = 0; 
 multiple = a * b / divisor(a, b); 
 return multiple; 
 }