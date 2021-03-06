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
  <div class="box3"><a href="#"><img src="../Public/img/sc.png"></a></div>
</div>
<!-- 头部结束 -->

<!--  内容开始 -->

<div class="cp_top border-b cp clearfix">
 
  <div class="cp_l">
    <p>预期年化收益</p>
    <span><?php echo ($info["income"]); ?></span>
  </div>
  <div class="cp_r">
    <p>投资期限1年</p>
    <p>投资起点（元）</p>
      <p><?php echo ($info["origin"]); ?></p>
  </div>
</div>


<!-- 列表开始 -->
<div class="product_top fl mt10 clearfix">
  <img src="../Public/img/zs.jpg">
  <h1>申购情况</h1>
</div>
<div class="sg_list border-t border-b mt10 clearfix">
  <div class="sg_list1 border-d">
    <a href="#"><span>销售结束日</span>
      <div class="right"><?php echo ($info["time_create"]); ?></div></a>
  </div>
  <div class="sg_list1 border-d">
    <a href="#"><span>投资到期日</span>
        <div class="right"><?php echo ($info["time_modify"]); ?></div></a>
  </div>
  <div class="sg_list1 border-d">
    <a href="#"><span>风险等级</span>
    <div class="right">有一定风险  3R</div></a>
  </div>
  <div class="sg_list1 border-d">
    <a href="#"><span>已申购人数</span>
    <div class="right"><?php echo ($info["number"]); ?></div></a>
  </div>
  <div class="sg_list1">
    <a href="#"><span>购买笔数</span>
    <div class="right"><?php echo ($info["number"]); ?></div></a>
  </div>
</div>

<div class="product_top fl mt10 clearfix">
  <img src="../Public/img/zs.jpg">
  <h1>安全保护</h1>
</div>
<div class="safe_list border-t border-b mt10 clearfix">
  <div class="safe_list1 border-d">
    <img src="../Public/img/safe01.png">
    <span>监管安全</span>
    <div class="safe_wb">
      <p>放心购买，每单进行责任金备付、</p>
      <p>安全无忧，每单缴纳保障基金</p>
    </div>
  </div>
  <div class="safe_list1">
    <img src="../Public/img/safe02.png">
    <span>公司安全</span>
    <div class="safe_wb">
      <p>实力雄厚，五亿注册资本金</p>
      <p>信誉保证，国家特许金融经营牌照</p>
    </div>
  </div>
</div>

<div class="product_top fl mt10 clearfix">
  <img src="../Public/img/zs.jpg">
  <h1>机构名称</h1>
</div>
<div class="lc_list fl mt10 border-t clearfix">
  <div class="list_l">
    <a href="<?php echo U('Article/details', array('id'=>$info['id']));?>">
      <div class="photo">
        <img src="../Public/img/bank02.jpg">
      </div>
      <div class="wb">
        <h3><?php echo ($info["name"]); ?></h3>
        <p><?php echo ($info["desc"]); ?></p>
      </div>
    </a>
  </div>
  
</div>

<!-- 列表结束 -->
<!--  内容结束 -->

<!-- 浮窗开始 -->
<div class="button_sq border-t" style="display:none;">
  <button type="button">申请</button>
</div>
<!-- 浮窗结束 -->

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