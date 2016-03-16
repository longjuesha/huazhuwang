// JavaScript Document
/*JS方法*/
//function getByClass(clsname,parent){
//	var oParent=parent?document.getElementById(parent):document,
//	    eles=[],
//		elements=oParent.getElementsByTagName("*");
//	for(var i=0,l=elements.length;i<l;i++){
//		if(elements[i].className==clsname){
//		eles.push(elements[i]);	
//			}
//		}
//	return eles;
//	}
//	
//window.onload=function(){
////	var shopClass_show=document.getElementsByClassName('shopClass_show')[0];
////    var dl=shopClass_show.getElementsByClassName('shopClass_item');
////	var nav=document.getElementsByClassName('nav')[0];
////	var Lis=nav.getElementsByTagName('li');
////	
////	var banner_big=document.getElementById('banner_big');
////	var imgBox=document.getElementsByClassName('imgBox')[0];
////	var oLi=imgBox.getElementsByTagName('li');
////	var imgNum=document.getElementsByClassName('imgNum')[0];
////	var al=imgNum.getElementsByTagName('a');
////	var timer_banner=null;
////	var num=0;
////	var left_click=document.getElementsByClassName('left_click')[0];
////	var right_click=document.getElementsByClassName('right_click')[0];
//	
//	var shopClass_show=getByClass('shopClass_show','shopClass')[0];
//    var dl=getByClass('shopClass_item','shopClass_show');
//	var nav=document.getElementById('nav');
//	var Lis=nav.getElementsByTagName('li');
//	var banner_big=document.getElementById('banner_big');
//	var imgBox=getByClass('imgBox','banner_big')[0];
//	var oLi=imgBox.getElementsByTagName('li');
//	var imgNum=getByClass('imgNum','banner_big')[0];
//	var al=imgNum.getElementsByTagName('a');
//	var timer_banner=null;
//	var num=0;
//	var left_click=getByClass('left_click','banner_big')[0];
//	var right_click=getByClass('right_click','banner_big')[0];
//    
//	 
//	for(var i=0;i<dl.length;i++){
//		dl[i].onmouseover=function(){
//			this.className='shopClass_active';
//				}
//
//		dl[i].onmouseout=function(){
//			this.className='shopClass_item';	
//			}	
//	}
//	for(var j=0;j<Lis.length;j++){
//		Lis[j].onmouseover=function(){
//			this.className='active';
//			}
//		Lis[j].onmouseout=function(){
//			this.className='';
//			}	
//		
//		}
//		
//	for(var k=0;k<al.length;k++){
//		al[k].index=k;/*非常重要不能漏*/
//		
//		al[k].onmouseover=function(){
//			for(var h=0;h<oLi.length;h++){
//				if ((navigator.userAgent.indexOf('MSIE') >= 0) && (navigator.userAgent.indexOf('Opera') < 0)){
//				oLi[h].style.opacity=0;}else{
//				move(oLi[h],{opacity:0});}
//				al[h].className='';
//				/*oLi[h].style.display='none';*/
//			}
//			this.className='active';
//			move(oLi[this.index],{opacity:100});
//			/*oLi[this.index].style.display='list-item';*/
//			}
//		}
//		
//	function move_auto(){
//		for(var k=0;k<al.length;k++){
//		al[k].className='';
//		}
//		
//		for(var h=0;h<oLi.length;h++){
//				move(oLi[h],{opacity:0});
//				
//				/*oLi[h].style.opacity=0;*/
//				/*oLi[h].style.display='none';*/
//		}
//			if(num==oLi.length-1){
//			num=-1;
//			}
//			al[num+1].className='active';
//			move(oLi[num+1],{opacity:100});
//		    /*oLi[num].style.display='list-item';*/
//		num++;	
//		}
//	
//	timer_banner=setInterval(function(){
//		move_auto();
//		},3000);
//	banner_big.onmouseover=function(){
//		clearInterval(timer_banner);
//		left_click.style.display='inline-block';
//		right_click.style.display='inline-block';
//		}	
//	banner_big.onmouseout=function(){
//		timer_banner=setInterval(function(){
//		move_auto();
//		},3000);
//		left_click.style.display='none';
//		right_click.style.display='none';
//		}
//	left_click.onmousemove=function(){
//		left_click.setAttribute('id','left_click1');
//		
//		}
//	left_click.onmouseleave=function(){
//		left_click.removeAttribute('id','left_click1');
//		}	
//	right_click.onmousemove=function(){
//		right_click.setAttribute('id','right_click1');
//		}	
//	right_click.onmouseleave=function(){
//		right_click.removeAttribute('id','right_click1');
//		}
//	left_click.onclick=function(){
//		
//		for(j=0;j<al.length;j++){
//		al[j].className="";
//		}
//		for(k=0;k<oLi.length;k++){
//		move(oLi[k],{opacity:0});
//				
//		/*oLi[k].style.opacity=0;*/
//		/*oLi[k].style.display='none';*/
//			}
//			if(num==0){
//			num=al.length;
//			}
//		al[num-1].className="active";
//		move(oLi[num-1],{opacity:100});	
//		/*oLi[num-1].style.display='list-item';*/
//		num--;
//	}
//		   
//	right_click.onclick=function(){
//		for(j=0;j<al.length;j++){
//		al[j].className="";
//		}
//		for(k=0;k<oLi.length;k++){
//		move(oLi[k],{opacity:0});
//				
//		/*oLi[k].style.opacity=0;*/
//		/*oLi[k].style.display='none';*/	
//			}
//		if(num==al.length-1){
//			num=-1;
//			}	
//		al[num+1].className="active";
//		move(oLi[num+1],{opacity:100});
//		
//		 /*oLi[num+1].style.display='list-item';*/
//		num++;
//	}		
//	
//}
/*JQuery方法*/
$(document).ready(function(){
	
	var num=$('.imgNum a').length;
	var i_num=0;
	var timer_banner=null;
   	
	
	
	/*商品分类*/
		$('.shopClass').mousemove(function(){
			$('.shopClass_item').show();
			$('.shopClass_show').slideDown('fast');
		
		})
		$('.shopClass').mouseleave(function(){
			$('.shopClass_item').hide(function(){$('.shopClass_show').slideUp('fast');});
			})
		$(".shopClass_item").mousemove(function(){
			$(this).addClass("shopClass_active");
			})
		$('.shopClass_item').mouseleave(function(){
			$(this).removeClass("shopClass_active");
			})
	//购物车按钮
	$(".shopNum").mouseover(function(){
		$(".shopNum_active").show();
		
		
		})
	$(".shopNum").mouseout(function(){
		$(".shopNum_active").hide();
		
		})		
	/*头部导航*/
	$('#nav li').mouseover(function(){
		$(this).addClass('active');
		})
	$('#nav li').mouseout(function(){
		$(this).removeClass('active');
		})	
			
   /*幻灯片*/	
	$('.imgBox li:gt(0)').hide();
	$('.imgNum a').mouseover(function(){
		$(this).addClass('active').siblings('a').removeClass('active');
		var i_num1=$('.imgNum a').index(this);
		$('.imgBox li').eq(i_num1).fadeIn('slow').siblings('li').fadeOut('slow');
		i_num=i_num1;
		});
	//淡入淡出函数	
	function move_auto(){
		if(i_num==num-1){
			i_num=-1
			}
		$('.imgBox li').eq(i_num+1).fadeIn('slow').siblings('li').fadeOut('slow');
		$('.imgNum a').eq(i_num+1).addClass('active').siblings('a').removeClass('active');
		i_num++
		}
	//设置定时器	
	function bannerMove(){	
	timer_banner=setInterval(function(){
		move_auto();
		},3000)}
	bannerMove();	
	$('.banner_big').mousemove(function(){
		$('.left_click').show();
		$('.right_click').show();
		clearInterval(timer_banner);
		
		});
	$('.banner_big').mouseleave(function(){
		$('.left_click').hide();
		$('.right_click').hide();
		bannerMove();
		});
		//左右按钮移入移出
	$('.left_click').mouseover(function(){
		$('.left_click').addClass('left_click1');
		})	
	$('.right_click').mouseover(function(){
		$('.right_click').addClass('right_click1');
		})	
	$('.left_click').mouseout(function(){
		$('.left_click').removeClass('left_click1');
		})	
	$('.right_click').mouseout(function(){
		$('.right_click').removeClass('right_click1');
		})	
		//左右按钮点击向左向右滑动
	$('.left_click').click(function(){
		if(i_num==0){
			i_num=num;
			}
		$('.imgBox li').eq(i_num-1).fadeIn('slow').siblings('li').fadeOut('slow');
		$('.imgNum a').eq(i_num-1).addClass('active').siblings('a').removeClass('active');
		i_num--;	
		})
	$('.right_click').click(function(){
		move_auto();
		})
	/*送货地址选择*/		
	$('.select').click(function(e){
		e=e|| window.event;
		if(e.stopPropagation){
			e.stopPropagation();
			}else{e.cancelBubble=true;}
		$('.show_select').css('display','inline-block');
		
		})
	$('.show_select li').click(function(e){
		
		e=e|| window.event;
		if(e.stopPropagation){
			e.stopPropagation();
			}else{e.cancelBubble=true;}
		$('.select h3').html($(this).html());	
		$('.show_select').css('display','none');
		})	
	$(document).click(function(e){
		e=e|| window.event;
		if(e.stopPropagation){
			e.stopPropagation();
			}else{e.cancelBubble=true;}
		$('.show_select').css('display','none');
		})
		
	//用户退出
	$("#leave").click(function(){
		$.ajax({
			url:"php/clearSession.php",
			type:"POST",
			success:function(){
			window.location.reload([true]);	
				}
			
			});
		
		})
//商品介绍页	
	//商品选择
	$(".des_item_color").click(function(){
		$(this).addClass("des_item_active");
		$(this).siblings(".des_item_color").removeClass("des_item_active");
		$(".des_color_selected").html($(this).html());
		})
	$(".des_item_sm").click(function(){
		$(this).addClass("des_item_active");
		$(this).siblings(".des_item_sm").removeClass("des_item_active");
		$(".des_sm_selected").html($(this).html());
		})	
	//商品数量加减项
	 var shop_string=$(".des_input input").val();
	 var shop_number=parseInt(shop_string);//由于页面取来的值是字符串，所以要转换成整数
	$(".reduction").click(function(){
		if(shop_number>0){
		shop_number-=1;
		}
		var s=shop_number.toString();//同理整数要转换成字符串输出
		$(".des_input input").val(s);
		})	
	$(".plus").click(function(){
		if(shop_number<9){
		shop_number+=1;
		}
		var s=shop_number.toString();
	    $(".des_input input").val(s);
		})
	
	});

	