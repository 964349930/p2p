<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="../Public/css/base.css">
<link rel="stylesheet" href="../Public/css/page.css">
<script type="text/javascript" src="../Public/js/jquery-1.8.3.min.js"></script>
<title>进宝圈</title>
</head>

<body>
<div data-role="page" id="main">

<!-- 头部开始 -->
<div class="header">
  <div class="box1"><a href="#"><img src="../Public/img/top.png"></a></div>
  <div class="box2"><h1>进宝圈</h1></div>
  <div class="box3"><a href="#"><img src="../Public/img/top.png"></a></div>
</div>
<!-- 头部结束 -->

<!-- 幻灯开始 -->
<div data-role="page" id="menu">
 
<!-- /navbar -->
<!-- start 幻灯片 --> 
<div class="container" style="padding:0; position:relative;">
  <div class="banner">
  <link rel="stylesheet" href="../Public/css/index.css">
  <script type="text/javascript" src="../Public/js/common/iscroll.js"></script>
  <script>
  var myScroll;
      function loaded() {
          myScroll = new iScroll('wrapper', {
              snap: true,
              momentum: false,
              hScrollbar: false,
              onScrollEnd: function() {
                  document.querySelector('#indicator > li.active').className = '';
                  document.querySelector('#indicator > li:nth-child(' + (this.currPageX + 1) + ')').className = 'active';
              }
          });
      }
      document.addEventListener('DOMContentLoaded', loaded, false);
  </script> 
    <div id="wrapper" style="overflow: hidden; ">
       <div id="scroller">
         <ul id="thelist">
           <li><img src="../Public/img/banner_01.jpg"/></li>
           <li><img src="../Public/img/banner_02.jpg"/></li>  
        </ul>
      </div>
    </div>
  </div>
  <div id="nav" >
    <div id="prev" onClick="javascript:myScroll.scrollToPage('prev', 0);"></div>
      <ul id="indicator" class="fr pr20">
      </ul>
    <div id="next" onClick="javascript:myScroll.scrollToPage('next', 0, 400, 2);">
    </div>
  </div>
  <div class="clr"></div>
</div>
<script type="text/javascript" src="../Public/js/banner.js"></script>
<!-- 幻灯结束 -->

<!-- 列表开始 -->
<div class="product_tj fl clearfix">
  <ul>
    <li><a href="#">
      <div class="photo">
        <img src="../Public/img/qz01.jpg">
      </div>
      <span>公共版区</span>
      <div class="jt_r">
        <img src="../Public/img/jt_r.png">
      </div>
    </a></li>
    <li><a href="#">
      <div class="photo">
        <img src="../Public/img/qz02.jpg">
      </div>
      <span>黄金论坛</span>
      <div class="jt_r">
        <img src="../Public/img/jt_r.png">
      </div>
    </a></li>
    <li><a href="#">
      <div class="photo">
        <img src="../Public/img/qz03.jpg">
      </div>
      <span>银行论坛</span>
      <div class="jt_r">
        <img src="../Public/img/jt_r.png">
      </div>
    </a></li>
    <li><a href="#">
      <div class="photo">
        <img src="../Public/img/qz04.jpg">
      </div>
      <span>基金论坛</span>
      <div class="jt_r">
        <img src="../Public/img/jt_r.png">
      </div>
    </a></li>
  </ul>
</div>
<!-- 列表结束 -->

<!-- 底部开始 -->
<div class="bottom">
  <ul>
    <li><a href="#">
      <dl>
        <dt><img src="../Public/img/bottom_01.png"></dt>
        <dd>百宝箱</dd>
      </dl>
    </a></li>
    <li><a href="#">
      <dl>
        <dt><img src="../Public/img/bottom1_02.png"></dt>
        <dd>圈子</dd>
      </dl>
    </a></li>
    <li><a href="#">
      <dl>
        <dt><img src="../Public/img/bottom_03.png"></dt>
        <dd>我的元宝</dd>
      </dl>
    </a></li>
  </ul>
</div>
<!-- 底部结束 -->
</div>
</body>
</html>