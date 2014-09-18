<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="format-detection" Content-Type="telephone=no">
<link rel="stylesheet" href="../Public/css/base.css">
<link rel="stylesheet" href="../Public/css/page.css">
<script type="text/javascript" src="../Public/js/jquery-1.8.3.min.js"></script>
<title><?php echo ($title); ?></title>
</head>

<body>
<div data-role="page" id="main">

<!-- 头部开始 -->
<div class="header">
  <div class="box1"><a href="javascript:window.history.go(-1);"><img src="../Public/img/jt_02.png"></a></div>
  <div class="box2"><h1><?php echo ($title); ?></h1></div>
  <div class="box3"><a href="#"><img src="../Public/img/top.png"></a></div>
</div>
<!-- 头部结束 -->

<!-- 导航开始 -->
<div class="form1_nav">
  <ul>
    <li><a href="#" class="active">新订单</a></li>
    <li><a href="#">处理中订单</a></li>
    <li><a href="#">已完成订单</a></li>
    <li><a href="#">无效订单</a></li>
  </ul>  
</div>
<!-- 导航结束 -->

<!-- 内容开始 -->
<div class="form_content mt10 clearfix border-t">
  <div class="form_top">
    <h3>客户信息：</h3>
    <span class="red">张山，18652321234</span>
    <span class="time">2014-08-02 11:01</span>
  </div>
</div>
<div class="product_list clearfix">
  <a href="#">
    <table width="94%">
      <tr>
        <td width="40%"><h1>合盈优选SA465号</h1></td>
        <td><span>已申购10235 人</span></td>
        <td><img src="../Public/img/tag01.png"></td>
      </tr>
      <tr>
        <td width="30%">预期年化</td>
        <td>万份收益</td>
        <td>限12个月</td>
      </tr>
      <tr>
        <td width="30%">6.80%+0.2%</td>
        <td>1.8500 元</td>
        <td>50 元起购</td>
      </tr>
    </table>  
  </a>
</div>
<div class="form_btn fr border-b">
  <button type="button">处理订单</button>
</div>

<div class="form_content mt10 clearfix border-t">
  <div class="form_top">
    <h3>客户信息：</h3>
    <span class="red">张山，18652321234</span>
    <span class="time">2014-08-02 11:01</span>
  </div>
</div>
<div class="product_list clearfix">
  <a href="#">
    <table width="94%">
      <tr>
        <td width="40%"><h1>合盈优选SA465号</h1></td>
        <td><span>已申购10235 人</span></td>
        <td><img src="../Public/img/tag01.png"></td>
      </tr>
      <tr>
        <td width="30%">预期年化</td>
        <td>万份收益</td>
        <td>限12个月</td>
      </tr>
      <tr>
        <td width="30%">6.80%+0.2%</td>
        <td>1.8500 元</td>
        <td>50 元起购</td>
      </tr>
    </table>  
  </a>
</div>
<div class="form_btn fr border-b">
  <button type="button">处理订单</button>
</div>
<!-- 内容结束 -->

<!-- 底部开始 -->
<div class="bottom" style="">
  <ul>
    <li><a href="<?php echo U('Index/index');?>">
      <dl>
        <dt><img src="../Public/img/bottom1_01.png"></dt>
        <dd>百宝箱</dd>
      </dl>
    </a></li>
    <li><a href="<?php echo U('Community/index');?>">
      <dl>
        <dt><img src="../Public/img/bottom_02.png"></dt>
        <dd>圈子</dd>
      </dl>
    </a></li>
    <li><a href="<?php echo U('Public/login');?>">
      <dl>
        <dt><img src="../Public/img/bottom_03.png"></dt>
        <dd>我的元宝</dd>
      </dl>
    </a></li>
  </ul>
</div>
<!-- 底部结束 -->
<!-- 底部结束 -->
</div>
</body>
</html>