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
  <div class="box0 ml20"><a href="#">济南<img src="../Public/img/jt_01.png"></a></div>
  <div class="box2"><h1><?php echo ($title); ?></h1></div>
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
           <li><img src="../Public/ img/banner_02.jpg"/></li>  
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

<!-- 导航开始 -->
<div class="sub_nav mt10 clearfix">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="25%"><a href="<?php echo U('Tpl/productList', array('type'=>'银行理财'));?>"><img src="../Public/img/nav_01.png"><span>银行理财</span></a></td>
      <td width="25%"><a href="<?php echo U('Tpl/productList', array('type'=>'信托产品'));?>"><img src="../Public/img/nav_02.png"><span>信托产品</span></a></td>
      <td width="25%"><a href="<?php echo U('Tpl/productList', array('type'=>'资产管理产品'));?>"><img src="../Public/img/nav_03.png"><span>资产管理产品</span></a></td>
      <td width="25%"><a href="<?php echo U('Tpl/productList', array('type'=>'基金'));?>"><img src="../Public/img/nav_04.png"><span>基金</span></a></td>
    </tr>
  </table>
</div>
<!-- 导航结束 -->

<!-- 列表开始 -->
<div class="product_top mt10 clearfix">
  <img src="../Public/img/zs.jpg">
  <h1>产品推荐</h1>
</div>

<div class="product_tj fl clearfix">
  <ul>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Tpl/product',array('id'=>$vo['id']));?>">
      <div class="photo">
        <img src="../Public/img/img01.jpg">
      </div>
      <div class="wb">
        <h3><?php echo ($vo["name"]); ?></h3>
        <p><?php echo ($vo["desc"]); ?></p>
      </div>
      <div class="jt_r">
        <img src="../Public/img/jt_r.png">
      </div>
    </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>


<!-- 列表结束 -->

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
</div>

</body>
</html>