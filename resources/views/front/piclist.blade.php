<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <meta name="applicable-device" content="pc,mobile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="Keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/leftTime.min.js"></script>
    <script src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/more.js"></script>
    <script type="text/javascript" src="http://www.youbangkeyi.com/js/foot.js"></script>
    <style type="text/css">.case_box .picScroll .bd .img em{z-index: initial;}</style>
</head>
<body class="shop-index view">
@include("front.tijiao")
<div class="main">
<header>
    <div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
   <div class="logo"><a href="/<?php echo $pycity;?>/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?>排行榜</a></div>
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
<div class="zysmn">
<span class="jiance">全网数据监测</span>
<span class="shishi">数据实时更新</span>
<span class="jiangbei">排名客观权威</span>
</div></div>
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
                            <?php $v['cover'] = json_decode($v['cover'],true); for($i = 0 ; $i < 9 ;$i ++ ) { if(empty($v['cover'][$i])) { break; }?>
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
                        <?php echo $v['currentPrice']>0?"咨询该案例档期":"获取该案例报价";?>
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
            <span class="gongan">京公网安备 11010802024698号</span>
        </div>
        <div class="lian"><a rel="nofollow" target="_blank" href="http://www.saic.gov.cn/scs/index.html"><img alt="国家工商行政管理总局" src="//c.youbangkeyi.com/images/scs_logo.png"></a></div>
    </div>
</footer>
<!-- 城市弹出 -->
<div class="container">
</div>
<script type="text/javascript" src="/js/city.js"></script>
<?php if($type=="sheying"){?>
<script type="text/javascript" src="/js/sheyingcity.js"></script>
<?php } else {?>
<script type="text/javascript" src="/js/hunlicity.js"></script>
<?php } ?>
<script type="text/javascript" src="/js/layer/layer.js"></script>
<script>
    <?php foreach($pics as $k=>$v) {?>
        var lightbox = GLightbox({selector: 'glightbox<?php echo $k?>'});
    <?php } ?>

</script>
</div>
<script type="text/javascript">
    $('button[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var city = $('#pcity').val();
        var source = $("#source").val();

        if(!phone){
            alert('手机必填');
            return false;
        }
        if(phone){
            if(!(/^1[34578]\d{9}$/.test(phone))){
                alert("亲，手机号码填写的不对哦");
                return false;
            }
        }
        $(this).attr('disabled', true);
        $.ajax({
            url: "/saveview",
            type: "post",
            dataType: "json",
            data: {'tenantsId': tenantsId,"city":city,'phone': phone,'source':source},
            success: function(data){
                console.log(data);
                if(data.result=='00'){
                    $(".ask").css("display","none");
                    $(".tishik").css("display","block");
        }
            }
        });
    });
    $(function(){
    $(".anliclick").click(function(){
        $("#source").val(3);
        $("#titlefield").html("提交信息，快速获取报价");
        $("#tijiao").html("免费获取报价");
        $("#mobile").attr("placeholder","请输入手机号 · 商家3分钟内会联系您！");
    })
    $(".shenqingclick").click(function(){
        $("#source").val(1);
        $("#titlefield").html("提交信息，申请大数据深度推荐");
        $("#tijiao").html("免费申请");
        $("#mobile").attr("placeholder","请输入手机号，分析师根据需求为您推荐！");
    })
    $(".liwuclick").click(function(){
        $("#source").val(2);
        $("#titlefield").html("提交信息，领取优惠并预约");
        $("#tijiao").html("免费领取优惠");
        $("#mobile").attr("placeholder","请输入手机号 · 商家3分钟内会联系您！");
    })

    $(".dangqiclick").click(function(){
        $("#source").val(4);
        $("#titlefield").html("提交信息，预约拍摄档期");
        $("#tijiao").html("免费咨询档期");
        $("#mobile").attr("placeholder","请输入手机号 · 商家3分钟内会联系您！");
    })
        $(".freeclick").click(function(){
            $("#source").val(5);
            $("#titlefield").html("提交信息，预约拍摄档期");
            $("#tijiao").html("免费咨询档期");
            $("#mobile").attr("placeholder","请输入手机号 · 商家3分钟内会联系您！");
        })
    });
</script>
<?php if(isset($tenants['pcount']['count']) &&$tenants['pcount']['count']>0 ) { ?>
<div id="zxsl"></div>
<?php } ?>
<div class="zxyy"><em class="down yuyueclick">免费预约咨询 · 3分钟响应</em></div>
    <?php if(isset($tenants['pcount']['count']) &&$tenants['pcount']['count']>0 ) { ?>
    <script type="text/javascript">
    $('#zxsl').html('今天已有<?php echo $tenants['pcount']['count'];?>人预约该商家').addClass('alert-success').show().delay(2000).fadeOut();
    </script>
    <?php } ?>
</body>
</html>
