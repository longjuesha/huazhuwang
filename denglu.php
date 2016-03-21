<!doctype html>
<html>
<head>
<meta  http-equiv="content-type" charset="utf-8">
<title>登陆</title>
<link type="text/css" rel="stylesheet" href="style/reset.css">
<link type="text/css" rel="stylesheet" href="style/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
<!--<script type = "text/javascript" src="js/checkCode.js"></script>--> 
 
</head>

<body>
<div class="headerBar">
	<div class="logoBar login_logo">
		<div class="comWidth">
			<div class="logo fl">
				<a href="index.php"><img src="images/logo.jpg" alt="华柱网"></a>
			</div>
			<h3 class="welcomelogin_title">欢迎登录</h3>
		</div>
	</div>
</div>

<div class="loginBox">
	<div class="login_cont"> 
		<ul class="login">
			<li class="l_tit">邮箱/用户名/手机号</li>
			<li class="mb_10"><input type="text" class="login_input user_icon" id="username"></li>
			<li class="l_tit">密码</li>
			<li class="mb_10"><input type="text" class="login_input user_icon" id="password"></li>
           <!-- <li class="l_tit">验证码</li>
            <li> <input type = "text" id = "input"/>  <input title="看不清，换一张" type = "button" id="code"/> </li>
            <li id="codeResult"><p></p></li>-->
			<li class="autoLogin"><input type="checkbox" id="a1" class="checked"><label for="a1">自动登陆</label></li>
			<li><input type="button" name="button" class="login_btn" id="verify" ></li>
            
		</ul>
		<div class="login_partners">
			<p class="l_tit">使用合作方账号登陆网站</p>
			<ul class="login_list clearfix">
				<li><a href="#" rel="nofollow">QQ</a></li>
				<li><span>|</span></li>
				<li><a href="#" rel="nofollow">网易</a></li>
				<li><span>|</span></li>
				<li><a href="#" rel="nofollow">新浪微博</a></li>
				<li><span>|</span></li>
				<li><a href="#" rel="nofollow">腾讯微博</a></li>
				<li><span>|</span></li>
				<li><a href="#" rel="nofollow">人人网</a></li>
				<li><span>|</span></li>
				<li><a href="#" rel="nofollow">百度贴吧</a></li>
			</ul>
		</div>
	</div>
	<a class="reg_link" href="zhuce.php"></a>
</div>

<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">华柱简介</a><i>|</i><a href="#">华柱公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：18025186558</p>
	<p>Copyright &copy; 2006 - 2016 华柱版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a></p>
</div>
<script type="text/javascript">
document.getElementById("verify").onclick=function(){
	//创建一个新的XMLHttp请求
	var request=new XMLHttpRequest();
	var username=document.getElementById("username").value;
	var password=document.getElementById("password").value;
	//因为IE默认使用iso-8859-1编码，而我们常用的编码格式是utf8，所以要对字符串进行编码处理，这里用到函数encodeURI();
	var username_encode=encodeURI(username);
	var password_encode=encodeURI(password);
	request.open("GET","php/com.php?username="+username_encode+"&password="+password_encode
	
	);
	request.setRequestHeader("Content-type","application/x-www-form-urlencoded;charset=utf-8");
	request.send();
	request.onreadystatechange=function(){
		if(request.readyState===4){
			if(request.status===200){
				alert(request.responseText);
				if(request.responseText=="登录成功"){
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
