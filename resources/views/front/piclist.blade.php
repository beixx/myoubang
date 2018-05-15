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
    <style type="text/css">body{/*padding-top: 2.5rem;*/}.case_box{position:initial;display: grid;}.case_box .picScroll .bd .img em{z-index: initial;}</style>
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
                <div class="anli_touxiang"><img src="//img2.youbangkeyi.cn<?php echo $tenants['cover'];?>?imageView2/1/w/150/h/150/q/75|imageslim"></div>
                <p><?php echo $v['picName'];?></p>
                 <span class="anli_month"><em class="fl">发布于5月05日 13:44</em><em class="fr">浏览342次</em></span>
                    <?php if($v['explain']) { ?>
                    <div class="anli_p"><?php echo $v['explain'];?></div>
                    <?php } ?>
                    <a class="suolvl" href="/kpdetail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                        <span class="img">
                            <?php $v['cover'] = json_decode($v['cover'],true); for($i = 0 ; $i < 9 ;$i ++ ) { if(empty($v['cover'][$i])) { break; }?>
                            <?php if(strpos($v['cover'][$i],'http') === false) {?>
                               <img src="//img2.youbangkeyi.cn<?php echo $v['cover'][$i];?>?<?php echo  $ismobile?"imageView2/1/w/250/h/250/q/75":'imageView2/1/w/500/h/500/q/75';?>|imageslim"/>
                            <?php } else {?>
                                <img src="<?php echo $v['cover'][$i];?>?imageView2/1/w/200/h/200/q/75|imageslim" />
                            <?php } ?>

                            <?php } ?>
                        </span>
                    </a>
            <div href="javascript:" class="anlibj down anliclick">获取该案例报价</div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="unit-footer"><div class="peace-live"><p class="txt-cont">大数据实时分析 | 排名权威有保障</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">商家编号:<?php echo $tenants['id'];?></span></div></div>
<footer class="txtCtr">
  @include("front.hotTenants") <div class="foot">
        <div class="foots">
            <span><a href="/about.html">关于有榜</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html" target="_blank">服务说明</a>|<a target="_blank" href="//c.youbangkeyi.cn/images/yingyezhizhao.jpeg">营业执照</a></span>
            京ICP备17036862号-1 北京有榜信息科技有限公司 
            <span class="gongan">京公网安备 11010802024698号</span>
        </div>
        <div class="lian"><a rel="nofollow" target="_blank" href="http://www.saic.gov.cn/scs/index.html"><img alt="国家工商行政管理总局" src="//c.youbangkeyi.cn/images/scs_logo.png"></a></div>
    </div>
</footer>
<div class="bgDiv"></div>
<div class="downNav bt00">
    <div class="ask">
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="text" name="mobile" id="mobile" class="input" placeholder="请输入手机号，(<?php echo $tenants['count1'];?>人预约)">
        <input type="submit" name="wapsubmit" class="btn" value="预约看店·3分钟响应">
    </div>
</div>
<script>
    
    $('input[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = 12;

        if(!phone){
            alert('手机必填');
            return false;
        }
        if(phone){
            if(!(/^1[34578]\d{9}$/.test(phone))){
                alert("手机号码有误，请重填");
                return false;
            }
        }
        $.ajax({
            url: "/saveview",
            type: "post",
            dataType: "json",
            data: {'tenantsId': tenantsId,'phone': phone,'source':source},
            success: function(data){
                console.log(data);
                if(data.result=='00'){
                    alert('预约成功');
                    <?php if($tenants['isVip'] ==2) { ?>
                        location.href="<?php echo $tenants['modeladvurl'];?>";
                    <?php } else {?>
                        location.reload();
                    <?php } ?>
                }
            }
        });
    });
    $(".anliclick").click(function(){
        $("input[name=wapsubmit]").val("获取报价·3分钟响应");
    })
    $(".shopclick").click(function(){
        $("input[name=wapsubmit]").val("预约到店·3分钟响应");
    })
    $(".dangqiclick").click(function(){
        $("input[name=wapsubmit]").val("咨询档期·3分钟响应");
    })
</script>
</body>
</html>
