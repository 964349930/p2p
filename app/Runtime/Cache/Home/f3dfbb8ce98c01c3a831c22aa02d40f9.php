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
  <div class="box4"><a href="#"><span>登录</span></a></div>
</div>
<!-- 头部结束 -->


<!-- 内容开始 -->
<form method="post" action="<?php echo U('Public/doOrganicreg');?>">
<div class="zc">
  <div class="zc01 border-b">
    <input type="text" id="tel" name="name" class="txt">
    <span>手机号</span>
    
  </div>
  <div class="zc01 border-b">
    <input type="password" id="password" name="password" class="txt">
    <span>密码</span>
  </div>
  <div class="zc01 border-b">
    <input type="password" id="password" name="password" class="txt">
    <span>确认密码</span>
  </div>
  <div class="zc01">
    <input type="text" id="tel" name="name" class="txt">
    <span>机构名称</span>
  </div>
</div>
<input type="submit" class="zc_btn" value="机构注册">
</form>


<!-- 内容结束 -->

</div>
</body>
</html>