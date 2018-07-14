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
    <meta name="Keywords" content="<?php echo $keyword?>">
    <meta name="description" content="<?php echo $desc;?>">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-1.7.1.min.js"></script>
    <script src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/js/leftTime.min.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/main.js"></script>
    <script type="text/javascript" src="http://www.youbangkeyi.com/js/foot.js?2"></script>
    <style type="text/css">body{background: #f0f0f0}</style>
</head>
@include("front.tijiao")
<div class="main">
<body class="view">
<header>
<div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
<div class="logo"><a href="/<?php echo $pycity;?>/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?>排行榜</a></div>
<a class="zxdh" href="tel:18500905723"></a>
</header>
<div class="focus_box">
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php foreach($picinfo['firstcover']as $k =>$v ) {  ?>
                <li class="suolvd">
                    <span>
                        <?php if(strpos($v,'http') === false) {?>
                           <img src="//img2.youbangkeyi.com<?php echo $v;?>?<?php echo  $ismobile?"imageView2/1/w/800/h/600/q/75|":'';?>imageslim" alt="<?php echo $picinfo['picName'];?>"/>
                        <?php } else {?>
                            <img _src="<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" src="http://img2.youbangkeyi.com<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" alt="<?php echo $picinfo['picName'];?>"/>
                        <?php } ?>
                    </span>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        TouchSlide({
            slideCell:"#focus",
            titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell:".bd ul",
            effect:"left",
            autoPlay:true,//自动播放
            autoPage:true, //自动分页
            switchLoad:"_src" //切换加载，真实图片路径为"_src"
        });
    </script>
    <div class="price-box">
        <h2 style="overflow:hidden;float:left;white-space:nowrap;text-overflow: ellipsis;width: 55%;"><?php echo $picinfo['picName'];?></h2>
        <div class="anli">
            <?php foreach($picinfo['picStyle'] as $v) { ?>
                <em><?php echo $v;?></em>
            <?php } ?>
        </div>
    </div>
    <div class="anli_pa">
    <?php if($picinfo['explain']) { ?>
<p><?php echo $picinfo['explain'];?></p>
<?php } ?>
    <?php if($picinfo['currentPrice']>0) { ?>
    <div class="txprice">该案例优惠价格：<em class="red">￥<?php echo $picinfo['currentPrice'];?></em><em class="txyj">原价：￥<?php echo $picinfo['price'];?></em></div>
    <?php } ?></div>
</div>
<div class="shop_box">
    <div class="titdp">案例所属商家</div>
    <div class="txt-box">
        <h1><a href="/detail/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php echo $tenants['name'];?></a></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?><div class="pmt1"><span>TOP</span></div>
        </div>
    </div><hr>
<a id="dateShow" class="yuyue">
                <i></i><span><?php echo $tenants['package']?$tenants['package']:'是否有优惠？点击右侧咨询';?><p>距离结束:<em class="date-tiem-span d">00</em>天<em class="date-tiem-span h">00</em>:<em class="date-tiem-span m">00</em>:<em class="date-s-span s">00</em></p></span>
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
<div class="tittp">客片欣赏</div>
<div class="info">
    <?php foreach($picinfo['cover'] as $v) { ?>
        <?php if(strpos($v,'http') === false) {?>
            <img src="http://img2.youbangkeyi.com<?php echo $v;?>" alt="<?php echo $picinfo['picName'];?>">
        <?php } else {?>
        <img src="<?php echo $v;?>" alt="<?php echo $picinfo['picName'];?>">
        <?php } ?>
    <?php } ?>
</div>
<div class="jxtc_box">
    <div class="tittx">该商家其他最新客片欣赏</div>
    <ul>
        <?php foreach($recommpics as $v) { ?>
        <li>
            <a href="<?php echo '/kpdetail/'.$v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                <div class="suolvt">
                <span>
                    <?php if(strpos($v['firstcover'][0],'http') === false) {?>
                        <img src="http://img2.youbangkeyi.com<?php echo $v['firstcover'][0];?>?imageView2/1/w/768/h/420/q/75|imageslim" alt="<?php echo $v['picName'];?>">
                    <?php } else {?>
                        <img src="<?php echo $v['firstcover'][0];?>?imageView2/1/w/768/h/420/q/75|imageslim" alt="<?php echo $v['picName'];?>">
                    <?php } ?>

                </span></div>
                <div class="txt">
                    <h3><?php echo $v['picName'];?></h3>
                    <div class="text"><?php echo implode('|',$v['picStyle'])?></div>
                </div>
            </a>
          <div href="javascript:" class="anlibj down anliclick">获取该案例报价</div>
        </li>
        <?php } ?>
    </ul>
</div>
                    <div class="tittp">有榜数据说明</div>
<div id="fugai" class="time-box">
   <div class="txtshuju lft fgchs">
                    <span class="blue">200+ </span>数据覆盖城市</div>
                    <div class="txtshuju lft fgshh">
                <span class="blue">120,000+ </span>实时分析商户
                </div>
                <div class="txtshuju lft fgcaiji">
                    <span class="blue">10 </span>数据采集渠道 </div>
<div class="txtshuju lft fgweidu">
                    <span class="blue">18 </span>数据统计维度</div>
<div class="txtshuju lft fgxinren">
                    <span class="blue">40,000 </span>对结婚新人</div>
<div class="txtshuju lft fgpinglun">
                    <span class="blue">2,000万+ </span>用户真实点评</div><div class="clear"></div> </div>
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
 @include("front.hotTenants")  <div class="foot">
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
</div>
@include("front.tijiaojs")
</body>
</html>
