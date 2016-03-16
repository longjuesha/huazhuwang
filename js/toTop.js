window.onload=function(){
	var toTop=document.getElementById("toTop");
	var clientHeight=document.documentElement.clientHeight;
	var timer=null;
	var isTop=true;
	window.onscroll=function(){
		//获取滚动条距离顶部的高度
		var osTop=document.documentElement.scrollTop || document.body.scrollTop;
		if(osTop>=clientHeight){
			toTop.style.display="block";
			
			}else{
			toTop.style.display="none";	
				}
		if(!isTop){
			clearInterval(timer);
			}
		isTop=false;	
		}
	toTop.onclick=function(){
		//设置定时器
		timer=setInterval(function(){
			var osTop=document.documentElement.scrollTop || document.body.scrollTop;
			var ispeed=Math.floor(-osTop/3);
			document.documentElement.scrollTop= document.body.scrollTop= osTop+ispeed;
			isTop=true;
			
			if(osTop==0){
				clearInterval(timer);
				
				}
			},30);
		
		
		
		}
	}
