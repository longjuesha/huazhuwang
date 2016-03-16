<!doctype html>
<html>
<head>
<meta  http-equiv="content-type" charset="utf-8">
<title>注册</title>
<link type="text/css" rel="stylesheet" href="style/reset.css">
<link type="text/css" rel="stylesheet" href="style/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->


</head>

<body>
<div class="headerBar">
	<div class="logoBar red_logo">
		<div class="comWidth">
			<div class="logo fl">
				<a href="index.php"><img src="images/logo.jpg" alt="华柱网"></a>
			</div>
			<h3 class="welcome_title">欢迎注册</h3>
		</div>
	</div>
</div>

<div class="regBox">
	<div class="login_cont">
		<ul class="login">
			<li><span class="reg_item"><i>*</i>用户名/手机号：</span><div class="input_item"><input type="text" class="login_input user_icon" id="username"></div></li>
			<li><span class="reg_item"><i>*</i>密码：</span><div class="input_item"><input type="password" class="login_input user_icon" id="password"></div></li>
            <li><span class="reg_item"><i>*</i>重复输入密码：</span><div class="input_item"><input type="password" class="login_input user_icon" id="confirm"></div></li>
			<li><span class="reg_item"><i>*</i>性别：</span><form class="radio_item"><input type="radio" name="sex" value="男"checked="checked">男<input type="radio" name="sex" value="女">女<input type="radio" name="sex" value="保密">保密</form></li>
			<li><span class="reg_item"><i>*</i>邮箱：</span><div class="input_item"><input type="text" class="login_input user_icon" id="email"></div></li>
            <li><span class="reg_item"><i>*</i>头像：</span><div class="radio_item"><input type="file" id="face"></div></li>
            
			<li class="autoLogin"><span class="reg_item">&nbsp;</span><input type="checkbox" id="t1" class="checked"><label for="t1">我已阅读并同意华柱网条款</label></li>
			<li><span class="reg_item">&nbsp;</span><input type="submit" value="" class="login_btn1" id="create"></li>
            <li><p id="createResult"></p></li>
		</ul>
		
	</div>
</div>

<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">华柱简介</a><i>|</i><a href="#">华柱公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：18025186558</p>
	<p>Copyright &copy; 2006 - 2016 华柱版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a></p>
</div>
<script>
document.getElementById("create").onclick=function(){
	//获取性别选项的值
	var sex=document.getElementsByName("sex");
	var sexValue=null;
	for(var i=0;i<sex.length;i++){
		if(sex[i].checked){
			sexValue=sex[i].value;
			}
		
		}
		//把注册信息以POST方式传到login.php
	var request=new XMLHttpRequest();
	request.open("POST","../ds/php/com.php");
	var data="username="+document.getElementById("username").value
	        +"&password="+document.getElementById("password").value
			+"&confirm="+document.getElementById("confirm").value
			+"&sex="+sexValue
			+"&email="+document.getElementById("email").value
			+"&face="+document.getElementById("face").value;
	request.setRequestHeader("Content-type","application/x-www-form-urlencoded;charset=utf-8");	
	request.send(data);
	request.onreadystatechange=function(){
		if(request.readyState===4){
			if(request.status===200){
			alert(request.responseText);
			if(request.responseText=="用户注册成功")	{
				window.location.href="index.php";
				
				}
				
			}else{
			alert("发生错误："+request.status);	
				}
		
		}
	
	
	}
		
		
		
	
	
}
</script>
</body>
</html>
