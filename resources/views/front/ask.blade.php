<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <meta name="applicable-device" content="pc,mobile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="Keywords" content="{{$keyword}}">
    <meta name="description" content="{{$desc}}">
    <link rel="stylesheet" href="/js/layer/wenda.css">
    <script type="text/javascript" src="//c.youbangkeyi.com/js/jquery.SuperSlide1-2.1.1.js"></script>
    <script src="//c.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
</head>
<style type="text/css">
    .daan {
        width: 92%;
        padding: 0.5rem 4% 0.5rem;
        background: #FFF;
        font-size: 0.8rem;
        border-top: 0.5rem solid #f5f7fa;
        text-align: center;
    }

    .daan em {
        font-size: 0.75rem;
        font-weight: bold;
    }

    .daan i {
        color: #FF4040;
        margin: 0 0.2rem;
    }

    .ask-m {
        background: #fff;
        border-top: 0.5rem solid #f5f7fa;
    }

    .ask-m li {
        width: 92%;
        border-bottom: 1px solid #efefef;
        padding: 0.3rem 4%;
    }

    .ask-m li h3 {
        font-size: .75rem;
        color: #333;
        display: inline-block;
        padding-bottom: .1rem;
        vertical-align: middle;
        font-weight: bold;
    }

    .ask-m li h3:before {
        content: "问";
        display: inline-block;
        width: 1rem;
        height: 1rem;
        background: #ffa114;
        font-size: .6rem;
        color: #fff;
        text-align: center;
        margin-right: .3rem;
        line-height: 1rem;
        vertical-align: middle;
        margin-bottom: .2rem;
        border-radius: .2rem;
    }

    .ask-m span {
        text-align: left;
        font-size: .6rem;
        color: #666;
        margin-bottom: .16rem;
        display: -webkit-box;
        word-break: break-all;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        padding-right: .01rem;
        line-height: 1rem;
    }

    .bottom_line {
        position: relative;
        height: 1.2rem;
        line-height: 1.2rem;
    }

    .ttAsk-huida {
        line-height: 1.2rem;
        display: block;
        font-size: .6rem;
        color: #999;
        float: left;
        padding-right: .5em;
    }

    .ttAsk-huida:after {
        content: "";
        width: 0.2rem;
        height: 0.2rem;
        background: #dfdfdf;
        border-radius: 45%;
        line-height: 1.2rem;
        display: inline-block;
        margin-left: .5rem;
        margin-bottom: .1rem;
    }

    .ttAsk-time {
        line-height: 1.2rem;
        display: block;
        font-size: .6rem;
        color: #999;
        float: left;
    }

    .ttAsk-tag {
        line-height: 1;
        font-size: .6rem;
        color: #999;
        padding: .2rem .3rem;
        background: #f6f6f6;
        position: absolute;
        right: 0;
        top: .1rem;
        border-radius: .35rem;
    }

    .widget {
        height: 65px;
        background-color: #fff;
        border: 1px solid #fff;
        text-align: center;
        overflow: hidden;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 15px 0;
    }

    .widget a {
        width: 31.25%;
        background-color: #6fd2a6;
        color: #fff;
        display: block;
        float: left;
    }

    .widget a:first-of-type {
        margin-left: 4.6875%;
    }

    .widget a:last-of-type {
        margin-right: 4.6875%;
    }

    .widget div {
        float: left;
        display: block;
        height: 32px;
        line-height: 32px;
        font-size: 14px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        width: 28.125%;
        background-color: #fff !important;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
        color: #000;
        position: relative;
    }

    .widget-pagination-current-page {
        display: block;
        margin: 0 auto !important;
        background-color: #fff !important;
        width: 100% !important;
        height: 100% !important;
        color: #333 !important;
    }

    .widget-pagination-pages {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        opacity: 0;
    }

</style>
<body class="shop-index view">
<header>
    <div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?><em></em></div>
    <div class="logo"><a href="/<?php echo $pycity."/".$type;?>"><?php echo $city.$shoptype;?></a></div>
    <a class="zxdh" href="tel:18500905723"></a></header>
<div class="daan">
    <em>已有<i>347777</i>对新人得到满意答案</em>
</div>



<section class="ask-m">
    <ul>
        <?php foreach($ask as $v) { ?>
        <li>
            <div class="ttAsk-tit">
                <h3 class="ttAsk-title ">
                    <a href="/wenda/{{$v['id']}}">
                        <?php echo $v['title'];?>
                    </a>
                </h3>
                <span class="ttAsk-miaoshu">
                    <?php if(isset($v['answer']['content'])) { ?>
                    <?php echo $v['answer']['content'];?>
                    <?php } ?>
                </span>
            </div>
            <?php if(isset($v['answer']['content'])) { ?>
            <div class="bottom_line clearfix">
                <em class="ttAsk-huida">回答<?php echo $v['count']??"";?></em>
                <em class="ttAsk-time"><?php echo date("Y-m-d",$v['answer']['created']);?></em>
                <em class="ttAsk-tag">
                    <?php echo $v['answer']['name'];?>
                </em>
            </div>
            <?php } ?>
        </li>
        <?php } ?>


    </ul>
    <div class="widget">
        <a href="/ask/<?php echo $pycity."?p=".($p>1?$p-1:1);?>">上一页</a>
        <div>
            <a class="widget-pagination-current-page" href=""><?php echo $p.'/'.$pagecount;?></a>
            <select class="widget-pagination-pages" id="pageCounts">
                <?php for($i = 1 ;$i <= $pagecount; $i ++ ) { ?>
                <option value="/ask/<?php echo $pycity."?p=".$i;?>">
                    <?php echo $i.'/'.$pagecount;?>
                </option>
                <?php } ?>
            </select>
        </div>
        <a href="/ask/<?php echo $pycity."?p=".($p>=$pagecount?$pagecount:$p+1);?>">下一页</a>
    </div>

</section>

<div class="unit-footer">
    <div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p>
        <p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span
                    class="font1">放心选</span></p></div>
</div>
<footer class="txtCtr">
    <div class="foot">
        <div class="foots">
            <span><a href="/about.html">关于有榜</a>|<a target="_blank"
                                                    href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a
                        target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html"
                                                                        target="_blank">服务说明</a>|<a target="_blank"
                                                                                                    href="//c.youbangkeyi.com/images/yingyezhizhao.jpeg">营业执照</a></span>
            京ICP备18024234号-2 北京有榜信息科技有限公司
            <span class="gongan">京公网安备 11010802024698号</span>
        </div>
        <div class="lian">Copyright © 2018 有榜网</div>
    </div>
</footer>
<!-- 城市弹出 -->
<div class="container"></div>
<script type="text/javascript" src="/js/Time.glight.foot.js"></script>
<script type="text/javascript" src="/js/sheyingcity.js"></script>
<script type="text/javascript" src="/js/layer/layer.js"></script>
<script>                    $(function () {
        //日期倒计时
        $.leftTime("2018/08/01 23:59:59", function (d) {
            if (d.status) {
                var $dateShow1 = $("#dateShow");
                $dateShow1.find(".d").html(d.d);
                $dateShow1.find(".h").html(d.h);
                $dateShow1.find(".m").html(d.m);
                $dateShow1.find(".s").html(d.s);
            }
        });
    });
</script>
</body>
</html>
