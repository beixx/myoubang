<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
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
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1211ad93505007e7eb6df7f6f05c4e8d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <style type="text/css">body{/*padding-top: 2.5rem;*/}.case_box{position:initial;}.case_box .picScroll .bd .img em{z-index: initial;}</style>
</head>
<body class="shop-index view">

<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">客片大全</div>
    <div class="share"></div>
</header>
<div class="shop_box">
    <?php if($tenants['isVip'] ==2) { ?>
        <div class="huiyuan"></div>
    <?php } ?>
    <div class="titdp">店铺信息</div>
    <div class="zysm">排名权威有保障，由有榜网对商家全网大数据分析得出！</div>
    <div class="txt-box">
        <h1><a href="/detail/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $tenants['name'];?></a></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?><div class="pmt1"><span>TOP</span></div>
        </div>
    </div>
</div>

<div class="case_box">
    <div class="tittx">客片欣赏 (<?php echo count($pics);?>)</div>
    <div id="picScroll" class="picScroll txtCtr">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php foreach($pics as $v) {?>
                <li>
                <div class="anli_touxiang"><img src="//img2.youbangkeyi.cn/uploads/cover/2fac75dc3ee53c59b9b2dca6c02cea33.jpg?imageView2/1/w/150/h/150/q/75|imageslim"></div>
                <p><?php echo $v['picName'];?></p>
                 <span class="anli_month">发表于5月05日 09:44</span>
                    <?php if($v['explain']) { ?>
                    <div class="anli_p"><?php echo $v['explain'];?></div>
                    <?php } ?>
                    <a class="suolvl" href="/kpdetail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                        <span class="img">
                            <?php $v['cover'] = json_decode($v['cover'],true); for($i = 0 ; $i < 9 ;$i ++ ) { if(empty($v['cover'][$i])) { break; }?>
                            <?php if(strpos($v['cover'][$i],'http') === false) {?>
                                <img src="//img2.youbangkeyi.cn<?php echo $v['cover'][$i];?>?imageView2/1/w/200/h/200/q/75|imageslim" />
                            <?php } else {?>
                                <img src="<?php echo $v['cover'][$i];?>?imageView2/1/w/200/h/200/q/75|imageslim" />
                            <?php } ?>

                            <?php } ?>
                        </span>
                    </a>
            <div href="javascript:" class="anlibj down">获取该案例报价</div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="unit-footer"><div class="peace-live"><p class="txt-cont">大数据实时分析 | 排名权威有保障</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">商家编号:<?php echo $tenants['id'];?></span></div></div>
<div class="tel-box txtCtr">
<a href="javascript:" class="ask rgt down">预约咨询<em>(已有110人获取)</em></a>
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