<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="//m1.youbangkeyi.cn/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/more.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/foot.js"></script>
    <style type="text/css">body{background: #f0f0f0}</style>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1211ad93505007e7eb6df7f6f05c4e8d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body class="shop-index view">

<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">套系大全</div>
    <div class="share"></div>
</header>
<div class="shop_box">
    <?php if($tenants['isVip'] == 2) {?>
    <div class="huiyuan"></div>
    <?php } ?>
    <div class="titdp">店铺信息</div>
    <div class="txt-box">
        <h1><?php echo $tenants['name']?></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?><div class="pmt1"><span>TOP</span></div>
        </div>
    </div>
</div>



<div class="jxtc_box">
    <div class="tittx">全部套餐（<?php echo count($sets);?>）</div>
    <ul>
        <?php foreach($sets as $k => $v) { ?>
        <li>
            <a href="/detail/<?php echo $tenants['id'].'/'.$v['id'];?>">
               <div class="suolvt">
                <span>
                    <?php if(strpos($v['cover'][0],'http') === false) {?>
                        <img src="http://img2.youbangkeyi.cn<?php echo $v['cover'][0];?>?imageView2/1/w/640/h/370/q/75|imageslim">
                    <?php } else {?>
                        <img src="http://img2.youbangkeyi.cn<?php echo $v['cover'][0];?>?imageView2/1/w/640/h/370/q/75|imageslim">
                    <?php } ?>

                </span></div>
                <div class="txt">
                    <h3><?php echo $v['setName'];?></h3>
                    <div class="price fa">
                        <span class="red">¥<?php echo $v['currentPrice']?></span>
                        <del>¥<?php echo $v['price']?></del>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
<div></div>
<div class="more txtCtr">点击加载更多套系</div>

<div class="tel-box txtCtr">
<a href="javascript:" class="ask rgt down">咨询套系<em>(已有80人咨询)</em></a>
</div>
<div class="bgDiv"></div>
<div class="downNav" style="background: #FFF;border-radius: 0.3rem 0.3rem 0 0;height:19rem;">
    <div class="ask">
        <h4>有榜网独家优惠,预约即可领取：</h4>
        <dl class="vip">
                <dt><i class="vipcon"></i></dt>
                <dd>获得有榜网一对一VIP服务，全程免费</dd>
            </dl>
        <dl class="vip">
                <dt><i class="youhuicon"></i></dt>
                <dd><?php echo $tenants['package']?$tenants['package']:'预约到店免费赠送超值结婚大礼包';?></dd>
            </dl>
        <div class="tip">
            <span>7天内选片</span><span>15天出精修</span><span>不满意重拍</span><span>无隐形消费</span>
        </div>
        <p>留下您的联系方式以便商户尽快联系你</p>
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="text" name="mobile" id="mobile" class="input" placeholder="输入手机号，享受以上福利">
        <input type="submit" name="wapsubmit" class="btn" value="预约看店">
    </div>

</div>

</body>
</html>