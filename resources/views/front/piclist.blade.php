<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $city;?><?php echo $title;?>_有榜网</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <meta name="applicable-device" content="pc,mobile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="canonical" href="https://www.youbangkeyi.com/kplist/<?php echo $tenants['id'];?>">
    <link rel="stylesheet" href="https://c.youbangkeyi.com/xinjs/wenda.css">
    <script type="text/javascript" src="//www.youbangkeyi.com/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="//www.youbangkeyi.com/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="//www.youbangkeyi.com/js/leftTime.min.js"></script>
    <script src="https://c.youbangkeyi.com/xinjs/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//www.youbangkeyi.com/js/more.js"></script>
    <script type="text/javascript" src="//www.youbangkeyi.com/js/foot.js"></script>
    <style type="text/css">.case_box .picScroll .bd .img em{z-index: initial;}</style>
</head>
<body class="shop-index view">
@include("front.tijiao")
<div class="main">
<header>
    <div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?><em></em></div>
   <div class="logo"><a href="/<?php echo $pycity;?>/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>排行榜</a></div>
    <a class="zxdh" href="tel:18500905723"></a>
</header>
<div class="shop_box">
    <div class="titdp">店铺信息</div>
    <div class="txt-box">
        <h1><a href="/detail/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php echo $tenants['name'];?></a></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?><div class="pmt1"><span>TOP</span></div>
        </div>
    </div><hr>
<a id="dateShow" class="yuyue">
                <i></i><span><?php echo $tenants['package']?$tenants['package']:'是否有优惠？点击右侧咨询';?><p>距离结束:<em class="date-tiem-span d">00</em>天<em class="date-tiem-span h">00</em>时<em class="date-tiem-span m">00</em>分<em class="date-s-span s">00</em></p></span>
            <button class="discount-btn down liwuclick" href="javascript:"><?php echo $tenants['package']?"领取优惠":'优惠咨询';?></button>
            </a>
                      <script type="text/javascript">
                    $(function(){
                        //日期倒计时
                        $.leftTime("<?php echo date("Y/m/d",$tenants['package_endtime'])." 23:59:59"?>",function(d){
                            if(d.status){
                                var $dateShow1=$("#dateShow");
                                $dateShow1.find(".d").html(d.d);
                                $dateShow1.find(".h").html(d.h);
                                $dateShow1.find(".m").html(d.m);
                                $dateShow1.find(".s").html(d.s);
                            }
                        });
                    });
                </script>
<div class="zysmn"><span class="jiance"><em></em>全网数据监测</span><span class="shishi"><em></em>数据实时更新</span><span class="jiangbei"><em></em>排名客观权威</span></div></div>
    <div id="tocvipGuide">
        <div class="toctitle">找不到合适的商家?</div>
        <input type="hidden" id="pcity" name="pcity" value="<?php echo $city;?>">
        <div class="tocdesc">原价99元VIP大数据推荐，限时免费0元申请推荐！</div>
        <a class="tocbtn down freeclick" href="javascript:">免费申请</a>
    </div>
<div class="case_box">
    <div class="tittx">客片欣赏 (<?php echo count($pics);?>)</div>
    <div id="picScroll" class="picScroll txtCtr">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php foreach($pics as $k=>$v) {?>
                <li>
                    <div class="anli_touxiang"><img src="//img2.youbangkeyi.com<?php echo $tenants['cover'];?>?imageView2/1/w/150/h/150/q/75|imageslim"></div>
                    <p> <a href="/kpdetail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $v['picName'];?></a></p>
                    <span class="anli_month"><em class="fl">发布于<?php echo date("m-d H:i",$v['created_at']);?></em><em class="fr">浏览342次</em></span>
                    <?php if($v['explain']) { ?>
                    <div class="anli_p"><?php echo $v['explain'];?></div>
                    <?php } ?>
                    <span class="img">
                            <?php $v['cover'] = json_decode($v['cover'],true); for($i = 0 ; $i < ($ismobile?9:8) ;$i ++ ) { if(empty($v['cover'][$i])) { break; }?>
                        <?php if(strpos($v['cover'][$i],'http') === false) {?>
                        <a class="yulan glightbox<?php echo $k;?>" href="//img2.youbangkeyi.com<?php echo $v['cover'][$i];?>">
                            <img src="//img2.youbangkeyi.com<?php echo $v['cover'][$i];?>?<?php echo  $ismobile?"imageView2/1/w/250/h/250/q/75":'imageView2/1/w/500/h/500/q/75';?>|imageslim" alt="<?php echo $v['picName'];?>"/></a>
                        <?php } else {?>
                        <img src="<?php echo $v['cover'][$i];?>?imageView2/1/w/200/h/200/q/75|imageslim" alt="<?php echo $v['picName'];?>"/>
                        <?php } ?>

                        <?php } ?>
                        <?php if($v['currentPrice']>0) {?>
                        <div class="txprice">该案例优惠价格：<em class="red">￥<?php echo $v['currentPrice'];?></em><em class="txyj">原价:￥<?php echo $v['price'];?></em></div>
                        <?php }?>
                    </span>
                    <div href="javascript:" class="anlibj down <?php echo $v['currentPrice']>0?"dangqiclick":"anliclick";?>">
                        <?php echo $v['currentPrice']>0?"咨询档期":"获取报价";?>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/css/glightbox.css">
<script src="/js/glightbox.min.js"></script>
<div class="unit-footer"><div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">版权归:<?php echo $city;?><?php echo $tenants['name'];?>所有</span></div></div>
<footer class="txtCtr">
    <div class="tuijian"><h3><b>其他相关问答</b></h3>
        <ul>
            <?php foreach($other as $v) { ?>
            <li id="sansan">
                <a target="_blank" href="/wenda/<?php echo $v['id'];?>"><?php echo $v['title'];?></a></li>
            <?php } ?>
            <?php foreach($askcity as $v) { ?>
            <li id="sansan">
                <a target="_blank" href="/i/<?php echo $v['id'];?>"><?php echo $v['title'];?></a></li>
            <?php } ?>
        </ul></div>
    @include("front.hotTenants") <div class="foot">
        <div class="foots">
            <span><a href="/about.html">关于有榜</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html" target="_blank">服务说明</a>|<a target="_blank" href="//c.youbangkeyi.com/images/yingyezhizhao.jpeg">营业执照</a></span>
            京ICP备18024234号-2 北京有榜信息科技有限公司
            <span class="gongan"><img src="https://img2.youbangkeyi.com/xinjs/police_record.png" width="15" style="margin:0 4px 4px 0;">京公网安备 11010802024698号</span>
        </div>
        <div class="lian">Copyright © 2018 有榜网</div>
    </div>
</footer>
<!-- 城市弹出 -->
<div class="container">
</div>
<script type="text/javascript" src="//www.youbangkeyi.com/js/city.js"></script>
<?php if($type=="sheying"){?>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/sheyingcity.js"></script>
<?php } else {?>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/hunlicity.js"></script>
<?php } ?>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/layer.js?1"></script>
<script>
    <?php foreach($pics as $k=>$v) {?>
        var lightbox = GLightbox({selector: 'glightbox<?php echo $k?>'});
    <?php } ?>

</script>
</div>
@include("front.tijiaojs")
</body>
<script type="application/ld+json">
{
    "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
    "@id": "https://www.youbangkeyi.com/kplist/<?php echo $tenants['id'];?>",
    "appid": "1605753876149174",
    "title": "{{$title}}",
    "images": [
        <?php $i = 0 ;  foreach($pics[0]['cover'] as $v) { if($i ++ >2 ) break;?>
    "https://img2.youbangkeyi.com<?php echo $v;?>"<?php echo $i >2 ?"":",";?>
        <?php }?>
    ],
    "pubDate": "<?php echo date("Y-m-d",$pics[0]['created_at']).'T'.date("H:i:s",$pics[0]['created_at'])?>"
}
</script>
</html>
