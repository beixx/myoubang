<?php //echo $type ;exit;?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="copyright" content="">
    <meta name="Keywords" content="<?php echo $keyword?>">
    <meta name="description" content="<?php echo $desc?>">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/main.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/foot.js"></script>
    <script type="text/javascript" src="/js/more.js?v1"></script>
            <script type="text/javascript" src="/js/index.js"></script>
            <script type="text/javascript" src="/js/data.js"></script>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5e17917c58669241a9d904eaddad0a8e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <style type="text/css">
        #gr_zone_ids{cursor:pointer}
        footer{margin-bottom: 0;}
    </style>
</head>
<body>
<header>
<div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
<div class="logo"><img src="/images/logo.png"></div>
<a class="zxdh" href="tel:18500905723"></a>
</header>
<div class="content">
<div class="bg2"></div>
    <div class="sousj">
    <div class="sy-title"><h1><?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?>排行榜</h1><span>数据更新:<?php echo date("Y年m月d日");?></span></div>
    </div>
    </div>
    <div id="leftTabBox" class="tabBox">
        <div class="hd">
            <ul>
            <?php if($type=='sheying') { ?>
                           <li class="on"><a href="/<?php echo $pycity;?>/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">婚纱摄影</a></li>
                    <?php } else { ?>
							<li><a href="/<?php echo $pycity;?>/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">婚纱摄影</a></li>
                    <?php } ?>
                      <?php if($type=='sheying') { ?>
                          <li ><a href="/<?php echo $pycity;?>/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">婚礼策划</a></li>
                    <?php } else { ?>
                          <li class="on"><a href="/<?php echo $pycity;?>/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">婚礼策划</a></li>
                    <?php } ?>
            </ul>
        </div>
        <div class="bd">
            <div class="list_box">
               <div class="zysmi"><span>全网数据监测  排名客观权威</span>中国婚嫁产业  大数据服务商<em><a href="http://www.youbangkeyi.com/guize.html" target="_blank">排名算法</a></em></div>
                <section class="showmore" pagesize="<?php echo $iscity==1?10:15;?>">

                    <?php foreach($spread as $k => $v) { ?>
                    <div class="pic_box">
                        <!--<?php if($v['isVip']==2) { ?>
                                <div class="huiyuan"></div>
                            <?php } ?>-->
                        <div class="num_txt">
                            <div class="tit_box">
                                <div class="title"><span>第<em><?php echo $v['order_city'];?></em>名</span><a href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php echo $v['name']?></a></div>
                                <div class="txt"><span class="zhish"><em class="shu">综合得分</em><em class="zhi"><?php echo $v['heat_index'];?></em></span><span>人均消费 ¥<?php echo $v['person_price'];?></span><span class="fmr"><?php echo $v['area'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="pic txtCtr">
                            <?php foreach($v['taoxi'] as $v2) { ?>
                            <?php if(isset($v2['cover'][0])) { ?>
                            <div class="img">
                                <a class="suolv" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                                    <span>
                                        <?php if(strpos($v2['cover'][0],'http') === false) {?>
                                        <img class="lazy" src="/images/grey.gif" data-original="//img2.youbangkeyi.com<?php echo $v2['cover'][0];?>?<?php echo  $ismobile?"imageView2/1/w/300/h/250/q/75":'imageView2/1/w/464/h/387/q/75';?>|imageslim">
                                        <?php } else {?>
                                        <img class="lazy" src="/images/grey.gif" data-original="<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/250/q/75|imageslim">
                                        <?php } ?>
                                    </span>
                                </a>
                            </div>
                            <?php } ?>
                            <?php } ?>
                        </div>
                        <?php if(strlen($v['package'])>2) { ?>
                        <div class="yuyue">
                            <i></i><span><?php echo $v['package'];?></span>
                            <a class="discount-btn" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">去看看</a>
                        </div><?php } ?>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue"><?php echo $v['day30s'];?></p>
                                <em>品牌搜索人数</em>
                            </div>
                            <div class="txt">
                                <p class="blue"><?php echo ($v['allcy'] + $v['allce']);?></p>
                                <em>全网评论人数</em>
                            </div>
                            <div class="txt">
                                <p class="blue"><?php $c = $v['allcy']+$v['allce'];$c= $c==0?1:$c ;  echo intval($v['allcy']/$c*10000)/100;?>%</p>
                                <em>全网好评率</em>
                            </div>
                        </div>
                        <div class="daodian">
                            <a class="sybj" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">查看商家详情</a>
                        </div>
                    </div>
                    <?php } ?><?php foreach($tenants as $k => $v) { ?>
                        <div class="pic_box">
                            <!--<?php if($v['isVip']==2) { ?>
                                    <div class="huiyuan"></div>
                                <?php } ?>-->
                            <div class="num_txt">
                                <div class="tit_box">
                                    <div class="title"><span>第<em><?php echo $v['order_city'];?></em>名</span><a href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php echo $v['name']?></a></div>
                                    <div class="txt"><span class="zhish"><em class="shu">综合得分</em><em class="zhi"><?php echo $v['heat_index'];?></em></span><span>人均消费 ¥<?php echo $v['person_price'];?></span><span class="fmr"><?php echo $v['area'];?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="pic txtCtr">
                                <?php foreach($v['taoxi'] as $v2) { ?>
                                <?php if(isset($v2['cover'][0])) { ?>
                                <div class="img">
                                    <a class="suolv" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                                        <span>
                                            <?php if(strpos($v2['cover'][0],'http') === false) {?>
                                            <img class="lazy" src="/images/grey.gif" data-original="//img2.youbangkeyi.com<?php echo $v2['cover'][0];?>?<?php echo  $ismobile?"imageView2/1/w/300/h/250/q/75":'imageView2/1/w/464/h/387/q/75';?>|imageslim">
                                            <?php } else {?>
                                            <img class="lazy" src="/images/grey.gif" data-original="<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/250/q/75|imageslim">
                                            <?php } ?>
                                        </span>
                                    </a>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                            <?php if(strlen($v['package'])>2) { ?>
                            <div class="yuyue">
                                <i></i><span><?php echo $v['package'];?></span>
                                <a class="discount-btn" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">去看看</a>
                            </div><?php } ?>
                            <div class="txt_box txtCtr">
                                <div class="txt">
                                    <p class="blue"><?php echo $v['day30s'];?></p>
                                    <em>品牌搜索人数</em>
                                </div>
                                <div class="txt">
                                    <p class="blue"><?php echo ($v['allcy'] + $v['allce']);?></p>
                                    <em>全网评论人数</em>
                                </div>
                                <div class="txt">
                                    <p class="blue"><?php $c = $v['allcy']+$v['allce'];$c= $c==0?1:$c ;  echo intval($v['allcy']/$c*10000)/100;?>%</p>
                                    <em>全网好评率</em>
                                </div>
                            </div>
                            <div class="daodian">
                                <a class="sybj" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">查看商家详情</a>
                            </div>
                        </div>
                        <?php } ?>
                </section>
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
            <div class="unit-footer"><div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">所属城市：<?php echo $city;?></span></div></div>
        </div>
<footer class="txtCtr">
    <?php if($type=='sheying') { ?>
                  <div class="tuijian"><h3>热门城市婚纱摄影榜单<span>(城市排名不分先后)</span></h3><ul>
                     <li><a target="_blank" href="/beijing/sheying">北京婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/tianjin/sheying">天津婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shenyang/sheying">沈阳婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/dalian/sheying">大连婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/haerbin/sheying">哈尔滨婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shijiazhuang/sheying">石家庄婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shanghai/sheying">上海婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/hangzhou/sheying">杭州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/xiamen/sheying">厦门婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/nanjing/sheying">南京婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/suzhou/sheying">苏州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/wuxi/sheying">无锡婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/ningbo/sheying">宁波婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/fuzhou/sheying">福州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/qingdao/sheying">青岛婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/hefei/sheying">合肥婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/chengdu/sheying">成都婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/chongqing/sheying">重庆婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/changsha/sheying">长沙婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/zhengzhou/sheying">郑州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/xian/sheying">西安婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/wuhan/sheying">武汉婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/guangzhou/sheying">广州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shenzhen/sheying">深圳婚纱摄影排名</a></li>

</ul></div> 
                    <?php } else { ?>
                     <div class="tuijian"><h3>热门城市婚礼策划榜单<span>(城市排名不分先后)</span></h3><ul>
                     <li><a target="_blank" href="/beijing/hunli">北京婚礼策划排名</a></li>
                    <li><a target="_blank" href="/tianjin/hunli">天津婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shenyang/hunli">沈阳婚礼策划排名</a></li>
                    <li><a target="_blank" href="/dalian/hunli">大连婚礼策划排名</a></li>
                    <li><a target="_blank" href="/haerbin/hunli">哈尔滨婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shijiazhuang/hunli">石家庄婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shanghai/hunli">上海婚礼策划排名</a></li>
                    <li><a target="_blank" href="/hangzhou/hunli">杭州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/xiamen/hunli">厦门婚礼策划排名</a></li>
                    <li><a target="_blank" href="/nanjing/hunli">南京婚礼策划排名</a></li>
                    <li><a target="_blank" href="/suzhou/hunli">苏州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/wuxi/hunli">无锡婚礼策划排名</a></li>
                    <li><a target="_blank" href="/ningbo/hunli">宁波婚礼策划排名</a></li>
                    <li><a target="_blank" href="/fuzhou/hunli">福州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/qingdao/hunli">青岛婚礼策划排名</a></li>
                    <li><a target="_blank" href="/hefei/hunli">合肥婚礼策划排名</a></li>
                    <li><a target="_blank" href="/chengdu/hunli">成都婚礼策划排名</a></li>
                    <li><a target="_blank" href="/chongqing/hunli">重庆婚礼策划排名</a></li>
                    <li><a target="_blank" href="/changsha/hunli">长沙婚礼策划排名</a></li>
                    <li><a target="_blank" href="/zhengzhou/hunli">郑州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/xian/hunli">西安婚礼策划排名</a></li>
                    <li><a target="_blank" href="/wuhan/hunli">武汉婚礼策划排名</a></li>
                    <li><a target="_blank" href="/guangzhou/hunli">广州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shenzhen/hunli">深圳婚礼策划排名</a></li>

</ul></div> 
                    <?php } ?>

 <div class="foot">
        <div class="foots">
            <span><a href="/about.html">关于有榜</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html" target="_blank">服务说明</a>|<a target="_blank" href="//c.youbangkeyi.com/images/yingyezhizhao.jpeg">营业执照</a></span>
            京ICP备18024234号-2 北京有榜信息科技有限公司 
            <span class="gongan">京公网安备 11010802024698号</span>
        </div>
        <div class="lian"><a rel="nofollow" target="_blank" href="http://www.saic.gov.cn/scs/index.html"><img alt="国家工商行政管理总局" src="//c.youbangkeyi.com/images/scs_logo.png"></a></div>
    </div>
</footer>
    </div>
</div>
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
<script type="text/javascript" src="/js/jquery.lazyload.js"></script>

<div class="bgDiv"></div>
<div class="downNav bt22" style="background: #FFF;border-radius: 0.3rem 0.3rem 0 0;height:18.5rem;">
    <div class="ask" style="border-top:0; padding: 3% 4% 0.5rem;">
        <h4>有榜网独家优惠,预约即可领取：</h4>
        <dl class="vip">
                <dt><i class="vipcon"></i></dt>
                <dd>获得有榜网一对一VIP服务，全程免费</dd>
            </dl>
        <dl class="vip">
                <dt><i class="youhuicon"></i></dt>
                <dd id='packagemessage'>预约到店免费赠送超值结婚大礼包</dd>
            </dl>
        <div class="tip">
            <span>7天内选片</span><span>15天出精修</span><span>不满意重拍</span><span>无隐形消费</span>
        </div>
        <p>留下您的联系方式以便商户尽快联系你</p>
        <input type="hidden" name="tenantsId" id="tenantsId" value="">
        <input type="number" style="width: 100%;border-radius:0.25rem;" name="mobile" id="mobile" class="input" placeholder="输入手机号，享受以上福利">
        <input type="submit" style="width: 100%;margin-top:0.5rem;border-radius: 0.25rem;" name="wapsubmit" class="btn" value="预约看店">
    </div>

</div>
<script type="text/javascript">

    $('input[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = 3;

        if(!phone){
            alert('手机必填');
            return false;
        }
        if(phone){
            if(!(/^1[34578]\d{9}$/.test(phone))){
                alert("亲，手机号填写有误哦");
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
                    alert("预约成功" + '\n' + "请注意接听商家的来电！");
                    location.reload();
                }
            }
        });
    });
    $(".package").click(function(){
        $("#tenantsId").val($(this).attr("id"));
        $("#packagemessage").html($(this).attr("message"));
        console.log($(this).attr("message"));
    });
    $(".sybj").click(function(){
        $("#tenantsId").val($(this).attr("data-id"));
    });
</script>

<script type="text/javascript">
    $(function() {
        $("img.lazy").lazyload({effect: "fadeIn"});
    });
    $(document).ready(function(){
        //子导航展开收缩
        $(".sewvtop").click(function(){
            $(this).find("em").removeClass("lbaxztop2").addClass("lbaxztop").parents(".sewv").siblings().children(".sewvtop").find("em").removeClass("lbaxztop").addClass(".lbaxztop2");
            $(this).next(".sewvbm").toggle().parents(".sewv").siblings().find(".sewvbm").hide();

        });
        /*鼠标离开下拉框关闭*/
        $(".sewv").mouseleave(function(){
            $(".sewvbm").hide();
            $(this).children(".sewvtop").find("em").addClass("lbaxztop2");
        });


        //赋值
        $(".sewvbm>li").click(function(){
            var that = $(this);
            var multile = that.parent().attr('multile');
            if(multile == 1){
                if(that.hasClass('cur')){
                    that.removeClass('cur');
                } else {
                    that.addClass('cur');
                }
                var text = '';
                that.parent().find('.cur').each(function(){
                    console.log($(this));
                    console.log($(this).text());
                    text += ($(this).text()+',')
                })
                // var selva=$(this).parents(".sewvbm").siblings(".sewvtop").find("span").text()+','+$(this).text();
                $(this).parents(".sewvbm").siblings(".sewvtop").find("span").text(text);
                // $(this).parent("ul").hide();
                // $(this).parents(".sewv").children(".sewvtop").find("em").addClass("lbaxztop2");
            } else {
                var selva=that.text();
                that.parents(".sewvbm").siblings(".sewvtop").find("span").text(selva);
                that.parent("ul").hide();
                that.parents(".sewv").children(".sewvtop").find("em").addClass("lbaxztop2");
            }

        });

        $(document).on('click','#style_btn',function(){
            $(this).parent().parent('ul').hide();
            return false;
        })

        //模糊搜索商家
        $('input[name=submit]').click(function(){
            var keyword = $('input[name=keyword]').val();
            var city = $('input[name=pycity]').val();
            var type = $("input[name=type]").val();
            location.href="/search/"+city+'?keyword='+keyword+'&type='+type;
        });

        $('.submit').click(function(){
            var customized_name = $('#customized_name').text();
            var style = $('#style').text();
            var budget = $('input[name=budget]').val();
            var city = '<?php echo $pycity?>';
            if(!budget){
                alert('预算不能为空');
                return false;
            }
            var phone = $('input[name=mobile]').val();
            if(!phone){
                alert('手机号码不能为空');
                return false;
            }
            if(phone){
                var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
                if(!myreg.test(phone))
                {
                    alert('请输入有效的手机号码！');
                    return false;
                }
            }
            var name = $('input[name=name]').val();
            if(!name){
                alert('姓名不能为空');
                return false;
            }
            $.ajax({
                url: "/dingzhi",
                type: "post",
                dataType: "json",
                data: {'customized_name': customized_name,'style': style,'budget': budget,'phone': phone,'name': name,'city': city,'linkurl': "{{url('user')}}/{{$pycity}}/<?php echo rand(10,1000) ?>?style="+style+"&city="+city+"&name="+name+"&price="+budget+"&customized_name="+customized_name},
                success: function(data){
                    console.log(data);
                    if(data.result == "00")
                    {
                        var city = $('#area').text();
                        $('#hiddenstyle').val(style);
                        $('#hiddencity').val(city);
                        $('#hiddenname').val(name);
                        $('#hiddenprice').val(budget);
                        $('#hiddencustomized_name').val(customized_name);

                        $('#subsubmit').submit();
                    }else{
                        alert('定制失败');
                    };
                }
            });
            return false ;
        });
    });
        // 数据初始化
    var Obj = $('body').barrage({
        data : data, //数据列表
        row : 1,   //显示行数
        time : 5000, //间隔时间
        gap : 10,    //每一个的间隙
        position : 'fixed', //绝对定位
        direction : 'bottom left', //方向
        ismoseoverclose : true, //悬浮是否停止
        height : 30, //设置单个div的高度
    })
    Obj.start(); 
</script>

</body>
</html>
