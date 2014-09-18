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

<!-- 内容开始 -->

<!-- 个人中心头部 -->
<div class="user_gz">
  <div class="tx">
    <a href="#"><img src="../Public/img/user_02.jpg"></a>
  </div>
  <div class="user_name">
    <a href="#">186****3532</a>
  </div>
</div>
<!-- 个人中心头部结束 -->
<div class="user_list mt10 border-t border-b">
  <div class="container border-b">
    <a href="#"><span>姓名</span><span class="time"><?php echo ($info["name"]); ?></span><img src="../Public/img/jt_r.png"></a>
  </div>
  <div class="container border-b">
    <a href="#"><span>联系方式</span><span class="time"><?php echo ($info["tel"]); ?></span><img src="../Public/img/jt_r.png"></a>
  </div>
  <div class="container border-b">
    <a href="#"><span>邮箱地址</span><span><?php echo ($info["email"]); ?></span><img src="../Public/img/jt_r.png"></a>
  </div>
  <div class="container">
    <a href="#"><span>登录时间</span><span class="time">2014-08-03 9:50 济南</span></a>
  </div>
</div>

<!-- 内容结束 -->

</div>
</body>
</html>