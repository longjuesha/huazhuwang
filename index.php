<?php 
require_once'php/com.php';
error_reporting(E_ALL || ~E_NOTICE);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>华柱网首页</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="keywords" content="华柱网，华柱，购物，数码，家电，电商网站">
<meta name="description" content="华柱网是一个由华柱开发的电商网站，主营家电和数码">
<link type="text/css" rel="stylesheet" href="style/reset.css">
<link type="text/css" rel="stylesheet" href="style/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/PIE.js"></script>
<![endif]-->
<script type="text/javascript" src="js/isPC.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/toTop.js"></script>

</head>

<body>
<div class="headerBar">  
  <div class="topBar">
    <div class="comWidth">
      <div class="leftArea"> <a class="collection" href="#">收藏网站</a> </div>
      <div class="rightArea"><a href="#"><?php echo $_SESSION["username"];?></a> 欢迎您,来到华柱网！<a href="denglu.php" <?php if($_SESSION["username"]){ echo "style='display:none'";} ?> >[登录]</a><a href="zhuce.php" <?php if($_SESSION["username"]){ echo "style='display:none'";} ?>>[免费注册]</a><a href="#" <?php if($_SESSION["username"]){ echo "style='display:inline'";}else{ echo "style='display:none'";}?> id="leave">[退出]</a> </div>
    </div>
  </div>
  <div class="logoBar">
    <div class="comWidth">
      <div class="logo fl"> <a href="index.php"><img src="images/logo.jpg" alt="慕课网"></a> </div>
      <div class="search_box fl">
        <input type="text" class="search_text fl">
        <input type="button" value="搜 索" class="search_btn fr">
      </div>
      <div class="shopCar fr"> <span class="shopText fl">购物车</span> <span class="shopNum fl">0<span class="shopNum_icon"></span><span class="shopNum_active hide">购物车为空</span></span></div>
    </div>
  </div>
  <div class="navBox comWidth clearfix" id="navBox">
      <div class="shopClass fl" id="shopClass">
        <h3>全部商品分类<i class="shopClass_icon"></i></h3>
        <div class="shopClass_show hide" id="shopClass_show">
          <dl class="shopClass_item">
            <dt><a href="shopClass.php" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
            <dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="shopIntroduce.php">平板电脑</a></dd>
            <div class="shopClass_list hide">
              <div class="shopClass_cont">
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <div class="shopList_links"> <a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a> </div>
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
                  <dd> <a href="#">文</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊啊啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <div class="shopList_links"> <a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a> </div>
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
                  <dd> <a href="#">文字啊啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊啊啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <div class="shopList_links"> <a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a> </div>
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
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊啊啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <div class="shopList_links"> <a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a> </div>
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
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <dl class="shopList_item">
                  <dt>电脑装机</dt>
                  <dd> <a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a> </dd>
                </dl>
                <div class="shopList_links"> <a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a> </div>
              </div>
            </div>
          </dl>
        </div>
      </div>
      <ul class="nav fl" id="nav">
        <li class="active"><a href="产品分类.html">数码城</a></li>
        <li><a href="#">天黑黑</a></li>
        <li><a href="#">团购</a></li>
        <li><a href="#">发现</a></li>
        <li><a href="#">二手特卖</a></li>
        <li><a href="#">名品会</a></li>
      </ul>
   
  </div>
</div>
<div class="banner comWidth clearfix">
  <div class="banner_bar banner_big">
    <ul class="imgBox">
      <li><a href="#"><img src="images/banner/banner_01.jpg" alt="banner"></a></li>
      <li><a href="#"><img src="images/banner/banner_02.jpg" alt="banner"></a></li>
      <li><a href="#"><img src="images/banner/banner_03.jpg" alt="banner"></a></li>
      <li><a href="#"><img src="images/banner/banner_04.jpg" alt="banner"></a></li>
    </ul>
     <p class="left_click"></p>
     <p class="right_click"></p>
    <div class="imgNum"> <a href="#"></a><a href="#"></a><a href="#"></a><a href="#"  class="active"></a> </div>
    
  </div>
</div>
<div class="shopTit comWidth"> <span class="icon"></span>
  <h3>家用电脑</h3>
  <a href="#" class="more">更多&gt;&gt;</a> </div>
<div class="shopList comWidth clearfix">
  <div class="leftArea">
    <!--<div class="banner_bar banner_sm">
      <ul class="imgBox">
        <li><a href="#"><img src="images/banner/banner_sm_01.jpg" alt="banner"></a></li>
        <li><a href="#"><img src="images/banner/banner_sm_02.jpg" alt="banner"></a></li>
      </ul>
      <div class="imgNum"> <a href="#" class="active"></a><a href="#"></a><a href="#"></a><a href="#"></a> </div>
    </div>-->
  </div>
  <div class="rightArea">
    <div class="shopList_top clearfix">
      <div class="shop_item">
        <div class="shop_img"> <a href="#"><img src="images/shopImg2.jpg" alt=""></a> </div>
        <h3>极限矩阵X8-H7</h3>
        <p>9499元</p>
      </div>
      <div class="shop_item">
        <div class="shop_img"> <a href="#"><img src="images/shopImg2.jpg" alt=""></a> </div>
        <h3>极限矩阵X8-H7</h3>
        <p>9499元</p>
      </div>
      <div class="shop_item">
        <div class="shop_img"> <a href="#"><img src="images/shopImg2.jpg" alt=""></a> </div>
        <h3>极限矩阵X8-H7</h3>
        <p>9499元</p>
      </div>
      <div class="shop_item">
        <div class="shop_img"> <a href="#"><img src="images/shopImg2.jpg" alt=""></a> </div>
        <h3>极限矩阵X8-H7</h3>
        <p>9499元</p>
      </div>
    </div>
    <div class="shopList_sm clearfix">
      <div class="shopItem_sm">
        <div class="shopItem_smImg"> <a href="#"><img src="images/shopImg2.jpg" alt=""></a> </div>
        <div class="shopItem_text">
          <p>NFC技术一碰轻松配对！接触屏幕</p>
          <h3>￥149.00 </h3>
        </div>
      </div>
      <div class="shopItem_sm">
        <div class="shopItem_smImg"> <a href="#"><img src="images/shopImg2.jpg" alt=""></a> </div>
        <div class="shopItem_text">
          <p>NFC技术一碰轻松配对！接触屏幕</p>
          <h3>￥149.00 </h3>
        </div>
      </div>
      <div class="shopItem_sm">
        <div class="shopItem_smImg"> <a href="#"><img src="images/shopImg2.jpg" alt=""></a> </div>
        <div class="shopItem_text">
          <p>NFC技术一碰轻松配对！接触屏幕</p>
          <h3>￥149.00 </h3>
        </div>
      </div>
      <div class="shopItem_sm">
        <div class="shopItem_smImg"> <a href="#"><img src="images/shopImg2.jpg" alt=""></a> </div>
        <div class="shopItem_text">
          <p>NFC技术一碰轻松配对！接触屏幕</p>
          <h3>￥149.00 </h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="shopTit comWidth"> <span class="icon"></span>
  <h3>手机</h3>
  <a href="#" class="more">更多&gt;&gt;</a> </div>
<div class="shopList comWidth clearfix">
  <div class="leftArea">
    <!--<div class="banner_bar banner_sm">
      <ul class="imgBox">
        <li><a href="#"><img src="images/banner/banner_sm_01.jpg" alt="banner"></a></li>
        <li><a href="#"><img src="images/banner/banner_sm_02.jpg" alt="banner"></a></li>
      </ul>
      <div class="imgNum"> <a href="#" class="active"></a><a href="#"></a><a href="#"></a><a href="#"></a> </div>
    </div>-->
  </div>
  <div class="rightArea">
    <div class="shopList_top clearfix">
      <div class="shop_item">
        <div class="shop_img"> <a href="#"><img src="images/shopImg.jpg" alt=""></a> </div>
        <h3>HTC新渴望8系列</h3>
        <p>1899元</p>
      </div>
      <div class="shop_item">
        <div class="shop_img"> <a href="#"><img src="images/shopImg.jpg" alt=""></a> </div>
        <h3>HTC新渴望8系列</h3>
        <p>1899元</p>
      </div>
      <div class="shop_item">
        <div class="shop_img"> <a href="#"><img src="images/shopImg.jpg" alt=""></a> </div>
        <h3>HTC新渴望8系列</h3>
        <p>1899元</p>
      </div>
      <div class="shop_item">
        <div class="shop_img"> <a href="#"><img src="images/shopImg.jpg" alt=""></a> </div>
        <h3>HTC新渴望8系列</h3>
        <p>1899元</p>
      </div>
    </div>
    <div class="shopList_sm clearfix">
      <div class="shopItem_sm">
        <div class="shopItem_smImg"> <a href="#"><img src="images/shopImg.jpg" alt=""></a> </div>
        <div class="shopItem_text">
          <p>NFC技术一碰轻松配对！接触屏幕</p>
          <h3>￥149.00 </h3>
        </div>
      </div>
      <div class="shopItem_sm">
        <div class="shopItem_smImg"> <a href="#"><img src="images/shopImg.jpg" alt=""></a> </div>
        <div class="shopItem_text">
          <p>NFC技术一碰轻松配对！接触屏幕</p>
          <h3>￥149.00 </h3>
        </div>
      </div>
      <div class="shopItem_sm">
        <div class="shopItem_smImg"> <a href="#"><img src="images/shopImg.jpg" alt=""></a> </div>
        <div class="shopItem_text">
          <p>NFC技术一碰轻松配对！接触屏幕</p>
          <h3>￥149.00 </h3>
        </div>
      </div>
      <div class="shopItem_sm">
        <div class="shopItem_smImg"> <a href="#"><img src="images/shopImg.jpg" alt=""></a> </div>
        <div class="shopItem_text">
          <p>NFC技术一碰轻松配对！接触屏幕</p>
          <h3>￥149.00 </h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="hr_25"></div>
<div class="footer">
  <p><a href="#">网站简介</a><i>|</i><a href="#">华柱公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：18025186558</p>
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
