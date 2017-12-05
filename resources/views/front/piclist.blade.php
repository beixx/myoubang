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
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/more.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/foot.js"></script>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c803a020b6c4205813b9d1558a2f7ef4";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <style type="text/css">body{/*padding-top: 2.5rem;*/}.case_box{position:initial;float: left;margin-bottom: 2.5rem;}.case_box .picScroll .bd .img em{z-index: initial;}</style>
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
    <div class="txt-box">
        <h1><?php echo $tenants['name'];?></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?><span>TOP</span>
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
                    <a class="suolvl" href="/kpdetail/<?php echo $v['id'];?>">
                        <span class="img">
                            <?php $v['cover'] = json_decode($v['cover'],true); for($i = 0 ; $i < 9 ;$i ++ ) { if(empty($v['cover'][$i])) { break; }?>
                            <img src="//img2.youbangkeyi.com<?php echo $v['cover'][$i];?>?imageView2/1/w/640/h/370/q/75|imageslim" />
                            <?php } ?>
                        </span>
                    </a>
                    <p><?php echo $v['picName'];?></p>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="tel-box txtCtr">
    <a href="tel:13588886666" class="tel lft"><em></em>打电话</a>
    <a href="javascript:" class="ask rgt down"><em></em>咨询套餐</a>
</div>
<div class="bgDiv"></div>
<div class="downNav" style="background: #FFF;border-radius: 0.3rem 0.3rem 0 0;height:280px">
    <div class="ask">
        <h4>有榜评选商家优质服务，预约即可享受</h4>
        <div class="tip">
            <span>7天内选片</span><span>15天出精修</span><span>不满意重拍</span><span>无隐形消费</span>
        </div>
        <p>留下您的联系方式以便商户尽快联系你</p>
        <input type="text" name="" class="input" placeholder="请输入手机号">
        <input type="submit" name="" class="btn" value="预约看店">
    </div>

</div>

</body>
</html>