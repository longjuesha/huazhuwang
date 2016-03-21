$(document).ready(function() {
	var timer=null;
	window.onscroll=function(){
	var osTop=document.documentElement.scrollTop || document.body.scrollTop;
	var topH=$(".header").height();
	if(osTop>=topH){
		$(".back-top").show();
		}else{
		$(".back-top").hide();	
			
			}
  
	}
	$(".back-top").tap(function(){
		timer=setInterval(function(){
			var osTop=document.documentElement.scrollTop || document.body.scrollTop;
			var ispeed=Math.floor(-osTop/3);
			document.documentElement.scrollTop= document.body.scrollTop= osTop+ispeed;
			
			if(osTop==0){
				clearInterval(timer);
				
				}
			},30);
		
		});
	$(".menu-item").tap(function(){
	
		$(this).css("background-color","#FFF");
		$(this).css("border-left","#1D7AD9 2px solid");
		$(this).siblings(".menu-item").css("background-color","#f5f5f5");
		$(this).siblings(".menu-item").css("border","none");
		})	
		
});
