<?php 
//判断连接服务器的方法是GET还是POST
if($_SERVER["REQUEST_METHOD"]=="GET"){
	
	search();
	
	}else if($_SERVER["REQUEST_METHOD"]=="POST"){
		create();
		}				
function search(){
if(isset($_GET["username"]) || !empty($_GET["username"])){	
$username=$_GET["username"];
$password=$_GET["password"];
if($username=="" || $password==""){
	echo "用户名或密码不能为空！";
	
	
	}else{
	mysql_connect("localhost","root","");
	mysql_select_db("huazhu");
	mysql_query("set names utf8");
	$sql="select username from huazhu_user where username='$_GET[username]'";	
	$result=mysql_query($sql);
	$num=mysql_num_rows($result);
	if($num){
		$sql="select username,password from huazhu_user where username='$_GET[username]' and password='$_GET[password]'";
		$result_login=mysql_query($sql);
		$row=mysql_fetch_array($result_login);
		if($row[0]){
			echo '登录成功';
			$_SESSION["username"]=$_GET["username"];
			
			}else{
				echo '登录失败！用户名或密码不正确！';
				}
		}else{
			echo '该用户未注册,请注册后登录。';
			
			}
			
		}	
 
      }
	
}
function create(){		
$username=$_POST["username"];
$password=$_POST["password"];
$psw_confirm=$_POST["confirm"];
$sex=$_POST["sex"];
$email=$_POST["email"];
$face=$_POST["face"];

if($username=="" || $password=="" || $psw_confirm=="" || $sex=="" || $email ==""){
		//判断主要信息是否有空
		echo "请输入完整信息!";
		
		
		}else{
		if($password==$psw_confirm){
			//连接数据库
			mysql_connect("localhost","root","");
			mysql_select_db("huazhu");
			mysql_query("set names utf8");
			$sql="select username from huazhu_user where username='$_POST[username]'";//判断用户是否存在
			$result=mysql_query($sql);
			$num=mysql_num_rows($result);
			if($num){
				echo '该用户已存在!';
				
				
				}else{
				$sql="insert into huazhu_user(username,password,sex,email,face) values('$username','$password','$sex','$email','$face')";//插入数据库记录
				$res_insert=mysql_query($sql);
				if($res_insert){
					echo '用户注册成功';
					$_SESSION["username"]=$_POST["username"];
					}else {
						echo '系统繁忙，请稍后再试!';
					
					}
			
			    }	
			
			}else{
				echo '密码输入不一致!';
				}
			
	
      }

}
	

?>