// JavaScript Document
window.onload=function(){
document.getElementById("create").onclick=function(){
	var request=new XMLHttpRequest();
	request.open("POST","../ds/php/login.php");
	var data="username="+document.getElementById("username").value
	        +"&password="+document.getElementById("password").value
			+"&confirm="+document.getElementById("confirm").value
			+"&sex="+document.getElementsByName("sex").value
			+"&email="+document.getElementById("email").value
			+"&face="+document.getElementById("face").value;
	request.setRequestHeader("Content-type","application/x-www-form-urlencoded");	
	request.send(data);
	request.onreadystatechange=function(){
		if(request.readyState===4){
			if(request.status===200){
			alert(request.responseText);
				
				
			}else{
			alert("发生错误："+request.status);	
				}
		
		}
	
	
	}
}
document.getElementById("verify").onclick=function(){
	var request=new XMLHttpRequest();
	request.open("GET","php/login.php?username="+document.getElementById("username").value+
	"&password="+document.getElementById("password").value+
	"&code="+document.getElementById("input").value
	);
	request.send();
	request.onreadystatechange=function(){
		if(request.readyState===4){
			if(request.status===200){
				alert(request.responseText);
				
				}else{
					alert("发生错误："+request.status);
					}
			
			}
		
		}
	
	
	}
}