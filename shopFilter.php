<?php 
require_once'php/com.php';
error_reporting(E_ALL || ~E_NOTICE);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>筛选页</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="keywords" content="华柱网，华柱，购物，数码，家电，电商网站">
<meta name="description" content="华柱网是一个由华柱开发的电商网站，主营家电和数码">
<link type="text/css" rel="stylesheet" href="style/reset.css">
<link type="text/css" rel="stylesheet" href="style/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
<!--[if lt IE 10]>
<script type="text/javascript" src="js/PIE.js"></script>
<![endif]-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/toTop.js"></script>
</head>

<body>
<div class="headerBar">
	<div class="topBar">
		<div class="comWidth">
			<div class="leftArea">
				<a href="#" class="collection">收藏华柱</a>
			</div>
			  <div class="rightArea"><a href="#"><?php echo $_SESSION["username"];?></a> 欢迎您,来到华柱网！<a href="denglu.php" <?php if($_SESSION["username"]){ echo "style='display:none'";} ?> >[登录]</a><a href="zhuce.php" <?php if($_SESSION["username"]){ echo "style='display:none'";} ?>>[免费注册]</a><a href="#" <?php if($_SESSION["username"]){ echo "style='display:inline'";}else{ echo "style='display:none'";}?> id="leave">[退出]</a> </div>
    </div>
		</div>
	</div>
	<div class="logoBar">
		<div class="comWidth">
			<div class="logo fl">
				<a href="index.php"><img src="images/logo.jpg" alt="华柱网"></a>
			</div>
			<div class="search_box fl">
				<input type="text" class="search_text fl">
				<input type="button" value="搜 索" class="search_btn fr">
			</div>
			<div class="shopCar fr">
				<span class="shopText fl">购物车</span>
				<span class="shopNum fl">0<span class="shopNum_icon"></span><span class="shopNum_active hide">购物车为空</span></span>
			</div>
		</div>
	</div>
	<div class="navBox">
		<div class="comWidth clearfix">
			<div class="shopClass fl">
				<h3>全部商品分类<i class="shopClass_icon"></i></h3>
				<div class="shopClass_show hide">
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
                        <div class="shopClass_list hide">
					<div class="shopClass_cont">
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<div class="shopList_links">
							<a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a>
						</div>
					</div>
				</div>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
                        <div class="shopClass_list hide">
					<div class="shopClass_cont">
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<div class="shopList_links">
							<a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a>
						</div>
					</div>
				</div>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
                        <div class="shopClass_list hide">
					<div class="shopClass_cont">
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<div class="shopList_links">
							<a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a>
						</div>
					</div>
				</div>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
                        <div class="shopClass_list hide">
					<div class="shopClass_cont">
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<div class="shopList_links">
							<a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a>
						</div>
					</div>
				</div>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
                        <div class="shopClass_list hide">
					<div class="shopClass_cont">
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<div class="shopList_links">
							<a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a>
						</div>
					</div>
				</div>
					</dl>
				</div>
				
			</div>
			<ul class="nav fl">
				<li><a href="#" class="active">数码城</a></li>
				<li><a href="#">天黑黑</a></li>
				<li><a href="#">团购</a></li>
				<li><a href="#">发现</a></li>
				<li><a href="#">二手特卖</a></li>
				<li><a href="#">名品会</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="hr_15"></div>
<div class="comWidth clearfix products">
	<div class="leftArea">
		<div class="leftNav vertical">
			<h3 class="nav_title">手机、数码</h3>
			<div class="nav_cont">
				<h3>手机通讯</h3>
				<ul class="navCont_list clearfix">
					<li><a href="#">全部手机</a></li>
					<li><a href="#">拍照神器</a></li>
				</ul>
			</div>
			<div class="nav_cont">
				<h3>手机通讯</h3>
				<ul class="navCont_list clearfix">
					<li><a href="#">全部手机</a></li>
					<li><a href="#">拍照神器</a></li>
					<li><a href="#">全部手机</a></li>
				</ul>
			</div>
			<div class="nav_cont">
				<h3>手机通讯</h3>
				<ul class="navCont_list clearfix">
					<li><a href="#">全部手机</a></li>
					<li><a href="#">拍照神器</a></li>
					<li><a href="#">全部手机</a></li>
					<li><a href="#">拍照神器</a></li>
					<li><a href="#">全部手机</a></li>
					<li><a href="#">拍照神器</a></li>
					<li><a href="#">全部手机</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="rightArea">
		<div class="screening_box">
			<dl class="screening clearfix">
				<dt>手机</dt>
				<dd class="limit"><a href="#" class="active">不限</a></dd>
				<dd class="screening_list">
					<ul class="clearfix">
						<li><a href="#">Samsung/三星</a></li>
						<li><a href="#">Apple/苹果</a></li>
						<li><a href="#">Huawei/华为</a></li>
						<li><a href="#">Apple/苹果</a></li>
						<li><a href="#">Huawei/华为</a></li>
					</ul>
				</dd>
			</dl>
			<dl class="screening clearfix">
				<dt>手机</dt>
				<dd class="limit"><a href="#" class="active">不限</a></dd>
				<dd class="screening_list">
					<ul class="clearfix">
						<li><a href="#">Samsung/三星</a></li>
						<li><a href="#">Apple/苹果</a></li>
						<li><a href="#">Huawei/华为</a></li>
						<li><a href="#">Apple/苹果</a></li>
						<li><a href="#">Huawei/华为</a></li>
					</ul>
				</dd>
			</dl>
			<dl class="screening clearfix">
				<dt>手机</dt>
				<dd class="limit"><a href="#" class="active">不限</a></dd>
				<dd class="screening_list">
					<ul class="clearfix">
						<li><a href="#">Samsung/三星</a></li>
						<li><a href="#">Apple/苹果</a></li>
						<li><a href="#">Huawei/华为</a></li>
						<li><a href="#">Apple/苹果</a></li>
						<li><a href="#">Huawei/华为</a></li>
						<li><a href="#">Samsung/三星</a></li>
						<li><a href="#">Apple/苹果</a></li>
						<li><a href="#">Huawei/华为</a></li>
						<li><a href="#">Apple/苹果</a></li>
						<li><a href="#">Huawei/华为</a></li>
					</ul>
				</dd>
			</dl>
			<dl class="screening clearfix">
				<dt>更多选项</dt>
				<dd class="screening_list">
					<div class="screen_more">
						<div class="border1">CPU核心数<i class="screen_more_icon"></i></div>
                     <div class="border2">
                        <p>不限</p>
                        <a href="#">双核</a>
                        <a href="#">四核</a>
                    </div>
					</div>
                    
					<div class="screen_more">
						<div class="border1">主摄像头分辨率<i class="screen_more_icon"></i></div>
                       <div class="border2">
                        <p>不限</p>
                        <a href="#">1200-1999万</a>
                        <a href="#">800-1199万</a>
                     </div>
					</div>
                    <div class="screen_more">
						<div class="border1">主屏分辨率<i class="screen_more_icon"></i></div>
                       <div class="border2">
                        <p>不限</p>
                        <a href="#">FHD</a>
                        <a href="#">QHD</a>
                     </div>
					</div>
                    <div class="screen_more">
						<div class="border1">运行内存RAM<i class="screen_more_icon"></i></div>
                       <div class="border2">
                        <p>不限</p>
                        <a href="#">512M</a>
                        <a href="#">1G</a>
                     </div>
					</div>
				</dd>
			</dl>
		</div>
		<div class="hr_15"></div>
		<div class="addInfo">
			<div class="address">
				<span class="add_text">送至</span>
				<div class="select">
					<h3>海淀区五环内</h3><span></span>
					<ul class="show_select">
						<li>天堂</li>
						<li>地狱</li>
						<li>化州</li>
					</ul>
				</div>
			</div>
			<div class="fr screen_text">
				<span class="check">
					<input type="checkbox" id="check"><label for="check">仅显示有货</label>
				</span>
				<span class="shop_number">
					共<em>11123</em>件
				</span>
			</div>
		</div>
		<div class="products_list screening_list_more clearfix">
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
			</div>
			<div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="shopIntroduce.php"><img src="images/shopImg.jpg" alt=""></a>
					</div>
					<p><a href="shopIntroduce.php">文字介绍文字介绍文字介绍文字介绍文字介绍文字介绍</a></p>
					<p class="money">￥888</p>
					<p><a href="shopCar.php" class="addCar">加入购物车</a></p>
				</div>
				<div class="hot"></div>
			</div>
		</div>
		<div class="hr_25"></div>
		<div class="page">
			<a href="#">上一页</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><span class="hl">...</span><a href="#">200</a><a href="#">下一页</a><span class="morePage">共200页，到第</span><input type="text" class="pageNum"><span class="ye">页</span><input type="button" value="确定" class="page_btn">
		</div>
	</div>
</div>
<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">华柱简介</a><i>|</i><a href="#">华柱公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：18025186558</p>
	<p>Copyright &copy; 2006 - 2016 华柱版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a></p>
</div>
<div id="logoBarS">
    <div class="comWidth">
      <div class="logo fl"> <a href="index.php"><img src="images/logo.jpg" alt="慕课网"></a> </div>
      <div class="search_box fl">
        <input type="text" class="search_text fl">
        <input type="button" value="搜 索" class="search_btn fr">
      </div>
      <div class="shopCar fr"> <span class="shopText fl">购物车</span> <span class="shopNum fl">0<span class="shopNum_icon"></span><span class="shopNum_active hide">购物车为空</span></span></div>
    </div>
</div>
<div class="toolbar">
 <a href="#" class="toolbar_item toolbar_item_feedback"></a>
 <a href="#" class="toolbar_item toolbar_item_app">
 <span class="toolbar_layer"></span>
 </a>
 <a class="toolbar_item toolbar_item_top" id="toTop"></a>
 <a href="#" class="toolbar_item toolbar_item_weixin">
 <span class="toolbar_layer"></span>
 </a>
</div>
</body>
</html>
