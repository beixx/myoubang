<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="<?php echo $keyword;?>">
    <meta name="description" content="<?php echo $desc?>">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="http://c.youbangkeyi.com/js/jquery-2.1.1.min.js"></script>
    <script src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/more.js"></script>
    <script type="text/javascript" src="/js/leftTime.min.js"></script>
    <script type="text/javascript" src="http://www.youbangkeyi.com/js/foot.js"></script>
    <style type="text/css">body{background:#f0f0f0;}.suolvl,.suolvl span{height:5.5rem;}</style>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5e17917c58669241a9d904eaddad0a8e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body class="view">
@include("front.tijiao")
<div class="main">
<header>
<div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
<div class="logo"><a href="/<?php echo $pycity;?>/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><img src="/images/logo.png" alt="有榜网"></a></div>
<a class="zxdh" href="tel:18500905723"></a>
</header>
<div class="focus_box">
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php foreach($info['cover'] as $v) { ?>
                <li class="suolvd">
                    <span>
                        <?php if(strpos($v,'http') === false) {?>
                        <img src="http://img2.youbangkeyi.com<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" />
                        <?php } else {?>
                            <img src="<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" />
                        <?php } ?>
                        <img src="http://img2.youbangkeyi.com<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" />
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
        <span class="lft red fa">¥<?php echo $info['currentPrice'];?></span>
        <del class="lft fa">¥<?php echo $info['price'];?></del>
        <h2 class="txtRgt rgt"><?php echo $info['setName'];?></h2>
    </div>
    <div class="tishi">温馨提示：套餐详细内容以咨询商家为准，到店请提前预约！<span class="yuyueclick down">预约咨询</span></div>
</div>
<div class="shop_box">
   <div class="titdp">店铺信息</div>
    <div class="txt-box">
        <h1><a href="/detail/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $tenants['name']?></a></h1>
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
<div class="tittp">图文详情</div>
<div class="info">
    <?php foreach($info['picDetail'] as $v) { ?>
        <?php if(strpos($v,'http') === false) {?>
            <img src="http://img2.youbangkeyi.com<?php echo $v;?>">
        <?php } else {?>
            <img src="<?php echo $v;?>">
        <?php } ?>

    <?php } ?>
</div>
<div class="titjs">套餐介绍</div>
<div class="txt-info">
    <?php echo $info['detail'];?>
</div>
<div class="tit"><?php echo $tenants['name'];?>专属定制热卖产品</div>
<div class="hot">
    <ul>
        <?php foreach($remmends as $v) { ?>
        <li>
            <a class="suolvl" href="/detail/<?php echo $tenants['id'].'/'.$v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
               <span>
                   <?php if(strpos($v['cover'][0],'http') === false) {?>
                   <img src="//img2.youbangkeyi.com<?php echo $v['cover'][0]?>?imageView2/1/w/400/h/300/q/75|imageslim">
                   <?php } else {?>
                       <img src="<?php echo $v['cover'][0]?>?imageView2/1/w/400/h/300/q/75|imageslim">
                   <?php } ?>
               </span>  </a><p><?php echo $v['setName'];?></p>
                <div class="price">
                    <span class="red">¥<?php echo $v['currentPrice'];?></span>
                    <del>¥<?php echo $v['price'];?></del>
                </div>
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
<div class="unit-footer"><div class="peace-live"><p class="txt-cont">大数据实时分析 | 排名权威有保障</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">商家编号:<?php echo $tenants['id'];?></span></div></div>
<footer class="txtCtr">
    <div class="tuijian"><h3><b>其他相关问答</b></h3>
        <ul>
            <?php foreach($other as $v) { ?>
            <li id="wenda">
                <a target="_blank" href="/wenda/<?php echo $v['id'];?>"><?php echo $v['title'];?></a></li>
            <?php } ?>
            <?php foreach($askcity as $v) { ?>
            <li id="wenda">
                <a target="_blank" href="/i/<?php echo $v['id'];?>"><?php echo $v['title'];?></a></li>
            <?php } ?>
        </ul></div>
@include("front.hotTenants")
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
    <div class="city">
        <div class="city-list">
            <div class="current">
                <span class="city-letter">当前城市</span>
                <p data-id="110100"><?php echo $city;?></p>
            </div>
            <div class="hot">  
                <span class="city-letter">华北东北</span>     
                    <p data-id="110100"> <a href="/beijing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">北京</a></p>
                    <p data-id="110101"> <a href="/tianjin/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">天津</a></p>
                    <p data-id="110102"><a href="/shenyang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">沈阳</a></p>
                    <p data-id="110103"><a href="/dalian/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">大连</a></p>
                    <p data-id="110104"><a href="/haerbin/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">哈尔滨</a></p>
                    <p data-id="110105"><a href="/shijiazhuang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">石家庄</a></p>
                    <p data-id="1101041"><a href="/taiyuan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">太原</a></p>
                    <p data-id="1101042"><a href="/changchun/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长春</a></p>
                    <p data-id="1101043"><a href="/tangshan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">唐山</a></p>
                    <p data-id="1101044"><a href="/qinhuangdao/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">秦皇岛</a></p>
                    <p data-id="1101045"><a href="/langfang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">廊坊</a></p>
                    <p data-id="1101046"><a href="/baoding/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">保定</a></p>
                    <p data-id="1101047"><a href="/bangbu/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">蚌埠</a></p>
                    <p data-id="1101048"><a href="/jinzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">锦州</a></p>
                    <p data-id="1101049"><a href="/daqing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">大庆</a></p>
                    <p data-id="1101040"><a href="/changzhi/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长治</a></p>
               <span class="city-letter">华东地区</span> 
                    <p data-id="110107"> <a href="/shanghai/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">上海</a></p>
                    <p data-id="110106"> <a href="/hangzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">杭州</a></p>
                    <p data-id="110108"><a href="/xiamen/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">厦门</a></p>
                    <p data-id="110109"><a href="/nanjing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南京</a></p>
                    <p data-id="110110"><a href="/suzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">苏州</a></p>
                    <p data-id="110111"><a href="/wuxi/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">无锡</a></p>
                    <p data-id="110112"><a href="/ningbo/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">宁波</a></p>
                    <p data-id="110113"><a href="/fuzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">福州</a></p>
                    <p data-id="110114"><a href="/qingdao/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">青岛</a></p>
                    <p data-id="110115"><a href="/hefei/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">合肥</a></p>
                    <p data-id="1101121"><a href="/jinan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">济南</a></p>
                    <p data-id="1101122"><a href="/changzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">常州</a></p>
                    <p data-id="1101123"><a href="/wenzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">温州</a></p>
                    <p data-id="1101124"><a href="/quanzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">泉州</a></p>
                    <p data-id="1101125"><a href="/nantong/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南通</a></p>
                    <p data-id="1101126"><a href="/xuzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">徐州</a></p>
                    <p data-id="1101127"><a href="/wuhu/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">芜湖</a></p>
                    <p data-id="1101128"><a href="/weifang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">潍坊</a></p>
                    <p data-id="1101129"><a href="/yangzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">扬州</a></p>
                    <p data-id="1101120"><a href="/jinhua/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">金华</a></p>
                    <p data-id="11011"><a href="/linyi/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">临沂</a></p>
                    <p data-id="11012"><a href="/huzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">湖州</a></p>
                    <p data-id="11013"><a href="/yancheng/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">盐城</a></p>
                    <p data-id="11014"><a href="/shaoxing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">绍兴</a></p>
                    <p data-id="11015"><a href="/jiaxing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">嘉兴</a></p>
                    <p data-id="11016"><a href="/huaian/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">淮安</a></p>
                    <p data-id="11017"><a href="/maanshan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">马鞍山</a></p>
                    <p data-id="11018"><a href="/taian/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">泰安</a></p>
            <span class="city-letter">中部西部</span> 
                    <p data-id="110116"><a href="/chengdu/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">成都</a></p>
                    <p data-id="110117"><a href="/chongqing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">重庆</a></p>
                    <p data-id="110118"><a href="/changsha/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长沙</a></p>
                    <p data-id="110119"><a href="/zhengzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">郑州</a></p>
                    <p data-id="110120"><a href="/xian/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">西安</a></p>
                    <p data-id="110121"><a href="/wuhan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">武汉</a></p>
                    <p data-id="1101191"><a href="/nanchang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南昌</a></p>
                    <p data-id="1101192"><a href="/lanzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">兰州</a></p>
                    <p data-id="1101193"><a href="/yichang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">宜昌</a></p>
                    <p data-id="1101194"><a href="/kunming/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">昆明</a></p>
                    <p data-id="1101195"><a href="/guiyang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">贵阳</a></p>
                    <p data-id="1101196"><a href="/hanzhong/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">汉中</a></p>
                    <p data-id="1101197"><a href="/hengyang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">衡阳</a></p>
                  <span class="city-letter">华南地区</span>
                    <p data-id="110122"> <a href="/guangzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">广州</a></p>
                    <p data-id="110123"><a href="/shenzhen/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">深圳</a></p>
                    <p data-id="1101231"><a href="/sanya/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">三亚</a></p>
                     <p data-id="1101232"><a href="/nanning/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南宁</a></p>
                     <p data-id="1101233"><a href="/zhuhai/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">珠海</a></p>
                     <p data-id="1101234"><a href="/haikou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">海口</a></p>
                     <p data-id="1101235"><a href="/guilin/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">桂林</a></p>
                    <p data-id="1101236"><a href="/foshan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">佛山</a></p>
                     <p data-id="1101237"><a href="/huizhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">惠州</a></p>
                    <p data-id="1101238"> <a href="/shantou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">汕头</a></p>
                     <p data-id="1101239"><a href="/jiangmen/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">江门</a></p>
                    <p data-id="1101230"><a href="/dong_/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">东莞</a></p>
                    <p data-id="11012311"><a href="/zhanjiang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">湛江</a></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/city.js"></script>
<script type="text/javascript" src="/js/layer/layer.js"></script>
</div>
</body>
</html>