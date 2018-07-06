
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?> </title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/leftTime.min.js"></script>
    <script src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="http://www.youbangkeyi.com/js/foot.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?5e17917c58669241a9d904eaddad0a8e";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <style type="text/css">.case_box .picScroll .bd .img em{z-index: initial;}</style>
</head>
<body class="shop-index view">
<div class="main">
    <header>
        <div class="city_box" id="gr_zone_ids" data-id="110100">深圳</div>
        <div class="logo"><a href="/shenzhen/sheying">深圳婚纱摄影</a></div>
        <a class="zxdh" href="tel:18500905723"></a>
    </header>
    <style type="text/css">
        header {
            border-bottom: 1px solid rgba(26,26,26,.06);
            box-shadow: 0 1px 3px 0 rgba(23,81,153,.05);
        }
        .shop_box {
            background-color: #FFF;
            width: 94%;
            position: relative;
            display: inline-block;
            margin: 3%;
        }
        .chengshi li{width:16.66666% !important;}
        .view .titdp{border-top:0;}
        .wendat{    width: 92%;
            padding: 1.2rem 4% 0.5rem;
            background: #FFF;
            font-size: 0.8rem;}
        .wendat p{    color: #999;
            font-size: 0.6rem;
            line-height: 1.2rem;}
        .wendat h1{    font-size: 0.85rem;
            font-weight: bold;}
        .huida{    background: #FFF;
            width: 100%;    margin-bottom: .5rem;}
        .huida .yonghu{    border-bottom: 1px solid #F5F5F5;
            font-size: 0.6rem;
            padding: 2% 4%;
            font-weight: bold;}
        .huida .neirong{    width: 92%;
            padding: 4%;
            font-size: 0.7rem;}
        .main{    background: #f5f7fa;}
    </style>
    <div class="wendat">
        <h1><?php echo $ask['title'];?></h1>
        <p>该问题由"<?php echo $ask['name'];?>"发起</p>
    </div>
    <div class="shop_box">
        <div class="titdp">店铺信息</div>
        <div class="txt-box">
            <h1><a href="/detail/1848"><?php echo $tenants['name'];?></a></h1>
            <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price']?></span></div>
            <div class="num fa txtCtr">
                5<div class="pmt1"><span>TOP</span></div>
            </div>
        </div><hr>
        <a id="dateShow" class="yuyue">
            <i></i>
            <span>
                <?php echo $tenants['package']?$tenants['package']:'是否有优惠？点击右侧咨询';?>
                <p>距离结束:<em class="date-tiem-span d">00</em>天
                    <em class="date-tiem-span h">00</em>:
                    <em class="date-tiem-span m">00</em>:
                    <em class="date-s-span s">00</em></p>
            </span>
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
        </div>
    </div>
    <?php foreach($anwser as $v) { ?>
    <div class="huida">
        <div class="yonghu"><?php echo $v['name'];?></div>
        <p class="neirong"><?php echo $v['content'];?></p>
    </div>
    <?php } ?>

    <div class="unit-footer">
        <div class="peace-live">
            <p class="txt-cont">全网数据监测 | 排名客观权威</p>
            <p class="logo-cont">
                <span class="safeguard"></span>
                <span class="font1">有榜网·</span>
                <span class="font1">放心选</span>
            </p>
        </div>
        <div class="room-num-line">
            <span class="txt">
            </span>
        </div></div>
    <footer class="txtCtr">
        <div class="tuijian"><h3><b>其他相关问答</b></h3><ul>
                <?php foreach($other as $v) { ?>
                <li><a target="_blank" href="/wenda/<?php echo $v['id'];?>"><?php echo $v['title'];?></a></li>
                <?php } ?>
            </ul></div>

        <div class="foot">
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
    <script type="text/javascript" src="/js/sheyingcity.js"></script>
    <script type="text/javascript" src="/js/layer/layer.js"></script>
</div>
<div class="zxyy"><em class="down yuyueclick">咨询该商家 · 3分钟响应</em></div>
</body>
</html>
