// JavaScript Document
var request;
function loadXMLDoc(url){
	request=null;
	if(window.XMLHttpRequest){
		request=new XMLHttpRequest();
		}else{
		request=new ActiveXObject("Microsoft.XMLHTTP");	
			}
	if(request!=null){
		request.onreadystatechange=state_Change;
		request.open('post',url,true);
		request.send(null);
		
		}else{
		alert("你的浏览器不支持XMLHTTP");	
			}	
	}
function state_Change(){
	if(request.readyState==4){
		//4=loaded
		if(requset.status==200){
			//200=ok
			
			}
		}else{
			alert("连接服务器失败！");
			
			}
	
	}	