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
<div class="logo"><img src="/images/logo.png" alt="有榜网"></div>
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

                    <?php if(!empty($spread)) foreach($spread as $k => $v) { ?>
                    <div class="pic_box bdtj">
                        <!--<?php if($v['isVip']==2) { ?>
                                <div class="huiyuan"></div>
                            <?php } ?>-->
                        <div class="num_txt">
                            <div class="tit_box">
                                <div class="title"><span class="icot1"></span><a href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php echo $v['name']?></a></div>
                                <div class="txt"><span>人均消费 ¥<?php echo $v['price'];?></span><span><?php echo $v['area'];?></span><span class="fmr f40"><?php echo $v['spreadcontent'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="pic txtCtr">
			                <?php $i = 0;?>
                            <?php foreach($v['taoxi'] as $v2) { if($i++ >2) break;  ?>
                            <?php if(isset($v2['cover'][0])) { ?>
                            <div class="img">
                                <a class="suolv" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                                    <span>
                                        <?php if(strpos($v2['cover'][0],'http') === false) {?>
                                        <img src="//img2.youbangkeyi.com<?php echo $v2['cover'][0];?>?<?php echo  $ismobile?"imageView2/1/w/300/h/300/q/75":'imageView2/1/w/464/h/464/q/75';?>|imageslim">
                                        <?php } else {?>
                                        <img src="<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/250/q/75|imageslim">
                                        <?php } ?>
                                        <em>¥<?php echo $v2['currentPrice'];?></em>
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
                        <div class="daodian"><span class="icot2"></span>
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
                                    <div class="txt"><span class="zhish"><em class="shu">综合得分</em><em class="zhi"><?php echo $v['heat_index'];?></em></span><span>人均消费 ¥<?php echo $v['price'];?></span><span class="fmr"><?php echo $v['area'];?></span>
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
                                            <img src="//img2.youbangkeyi.com<?php echo $v2['cover'][0];?>?<?php echo  $ismobile?"imageView2/1/w/300/h/300/q/75":'imageView2/1/w/464/h/464/q/75';?>|imageslim" alt="">
                                            <?php } else {?>
                                            <img src="<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/250/q/75|imageslim"  alt="">
                                            <?php } ?>
                                            <em><?php echo $v['currentPrice']>0?'¥'.$v2['currentPrice']:'';?></em>
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
            <div class="unit-footer"><div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">所属城市:<?php echo $city;?></span></div></div>
        </div>
<footer class="txtCtr">
    <?php if($type=='sheying') { ?>
                  <div class="tuijian"><h3>全部城市婚纱摄影榜单<span>(城市排名不分先后)</span></h3><ul>
                    <li><a target="_blank" href="/beijing/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">北京婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/tianjin/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">天津婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shenyang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">沈阳婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/dalian/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">大连婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/haerbin/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">哈尔滨婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shijiazhuang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">石家庄婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shanghai/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">上海婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/hangzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">杭州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/xiamen/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">厦门婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/nanjing/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南京婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/suzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">苏州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/wuxi/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">无锡婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/ningbo/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">宁波婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/fuzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">福州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/qingdao/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">青岛婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/hefei/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">合肥婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/chengdu/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">成都婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/chongqing/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">重庆婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/changsha/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长沙婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/zhengzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">郑州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/xian/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">西安婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/wuhan/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">武汉婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/guangzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">广州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shenzhen/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">深圳婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/taiyuan/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">太原婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/changchun/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长春婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/tangshan/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">唐山婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/qinhuangdao/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">秦皇岛婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/langfang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">廊坊婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/baoding/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">保定婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/bangbu/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">蚌埠婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/jinzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">锦州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/daqing/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">大庆婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/changzhi/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长治婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/jinan/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">济南婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/changzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">常州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/wenzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">温州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/quanzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">泉州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/nantong/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南通婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/xuzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">徐州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/wuhu/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">芜湖婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/weifang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">潍坊婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/yangzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">扬州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/jinhua/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">金华婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/linyi/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">临沂婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/huzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">湖州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/yancheng/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">盐城婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shaoxing/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">绍兴婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/jiaxing/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">嘉兴婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/huaian/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">淮安婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/maanshan/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">马鞍山婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/taian/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">泰安婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/nanchang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南昌婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/lanzhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">兰州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/yichang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">宜昌婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/kunming/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">昆明婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/guiyang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">贵阳婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/hanzhong/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">汉中婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/hengyang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">衡阳婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/sanya/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">三亚婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/nanning/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南宁婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/zhuhai/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">珠海婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/haikou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">海口婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/guilin/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">桂林婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/foshan/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">佛山婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/huizhou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">惠州婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/shantou/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">汕头婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/jiangmen/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">江门婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/dong_/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">东莞婚纱摄影排名</a></li>
                    <li><a target="_blank" href="/zhanjiang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">湛江婚纱摄影排名</a></li>
                    
 

</ul></div> 
                    <?php } else { ?>
                     <div class="tuijian"><h3>热门城市婚礼策划榜单<span>(城市排名不分先后)</span></h3><ul>
                    <li><a target="_blank" href="/beijing/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">北京婚礼策划排名</a></li>
                    <li><a target="_blank" href="/tianjin/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">天津婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shenyang/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">沈阳婚礼策划排名</a></li>
                    <li><a target="_blank" href="/dalian/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">大连婚礼策划排名</a></li>
                    <li><a target="_blank" href="/haerbin/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">哈尔滨婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shijiazhuang/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">石家庄婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shanghai/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">上海婚礼策划排名</a></li>
                    <li><a target="_blank" href="/hangzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">杭州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/xiamen/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">厦门婚礼策划排名</a></li>
                    <li><a target="_blank" href="/nanjing/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南京婚礼策划排名</a></li>
                    <li><a target="_blank" href="/suzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">苏州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/wuxi/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">无锡婚礼策划排名</a></li>
                    <li><a target="_blank" href="/ningbo/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">宁波婚礼策划排名</a></li>
                    <li><a target="_blank" href="/fuzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">福州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/qingdao/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">青岛婚礼策划排名</a></li>
                    <li><a target="_blank" href="/hefei/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">合肥婚礼策划排名</a></li>
                    <li><a target="_blank" href="/chengdu/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">成都婚礼策划排名</a></li>
                    <li><a target="_blank" href="/chongqing/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">重庆婚礼策划排名</a></li>
                    <li><a target="_blank" href="/changsha/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长沙婚礼策划排名</a></li>
                    <li><a target="_blank" href="/zhengzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">郑州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/xian/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">西安婚礼策划排名</a></li>
                    <li><a target="_blank" href="/wuhan/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">武汉婚礼策划排名</a></li>
                    <li><a target="_blank" href="/guangzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">广州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shenzhen/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">深圳婚礼策划排名</a></li>
                    <li><a target="_blank" href="/taiyuan/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">太原婚礼策划排名</a></li>
                    <li><a target="_blank" href="/changchun/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长春婚礼策划排名</a></li>
                    <li><a target="_blank" href="/tangshan/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">唐山婚礼策划排名</a></li>
                    <li><a target="_blank" href="/qinhuangdao/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">秦皇岛婚礼策划排名</a></li>
                    <li><a target="_blank" href="/langfang/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">廊坊婚礼策划排名</a></li>
                    <li><a target="_blank" href="/baoding/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">保定婚礼策划排名</a></li>
                    <li><a target="_blank" href="/bangbu/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">蚌埠婚礼策划排名</a></li>
                    <li><a target="_blank" href="/jinzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">锦州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/daqing/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">大庆婚礼策划排名</a></li>
                    <li><a target="_blank" href="/changzhi/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长治婚礼策划排名</a></li>
                    <li><a target="_blank" href="/jinan/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">济南婚礼策划排名</a></li>
                    <li><a target="_blank" href="/changzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">常州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/wenzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">温州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/quanzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">泉州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/nantong/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南通婚礼策划排名</a></li>
                    <li><a target="_blank" href="/xuzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">徐州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/wuhu/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">芜湖婚礼策划排名</a></li>
                    <li><a target="_blank" href="/weifang/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">潍坊婚礼策划排名</a></li>
                    <li><a target="_blank" href="/yangzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">扬州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/jinhua/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">金华婚礼策划排名</a></li>
                    <li><a target="_blank" href="/linyi/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">临沂婚礼策划排名</a></li>
                    <li><a target="_blank" href="/huzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">湖州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/yancheng/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">盐城婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shaoxing/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">绍兴婚礼策划排名</a></li>
                    <li><a target="_blank" href="/jiaxing/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">嘉兴婚礼策划排名</a></li>
                    <li><a target="_blank" href="/huaian/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">淮安婚礼策划排名</a></li>
                    <li><a target="_blank" href="/maanshan/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">马鞍山婚礼策划排名</a></li>
                    <li><a target="_blank" href="/taian/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">泰安婚礼策划排名</a></li>
                    <li><a target="_blank" href="/nanchang/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南昌婚礼策划排名</a></li>
                    <li><a target="_blank" href="/lanzhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">兰州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/yichang/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">宜昌婚礼策划排名</a></li>
                    <li><a target="_blank" href="/kunming/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">昆明婚礼策划排名</a></li>
                    <li><a target="_blank" href="/guiyang/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">贵阳婚礼策划排名</a></li>
                    <li><a target="_blank" href="/hanzhong/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">汉中婚礼策划排名</a></li>
                    <li><a target="_blank" href="/hengyang/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">衡阳婚礼策划排名</a></li>
                    <li><a target="_blank" href="/sanya/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">三亚婚礼策划排名</a></li>
                    <li><a target="_blank" href="/nanning/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南宁婚礼策划排名</a></li>
                    <li><a target="_blank" href="/zhuhai/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">珠海婚礼策划排名</a></li>
                    <li><a target="_blank" href="/haikou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">海口婚礼策划排名</a></li>
                    <li><a target="_blank" href="/guilin/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">桂林婚礼策划排名</a></li>
                    <li><a target="_blank" href="/foshan/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">佛山婚礼策划排名</a></li>
                    <li><a target="_blank" href="/huizhou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">惠州婚礼策划排名</a></li>
                    <li><a target="_blank" href="/shantou/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">汕头婚礼策划排名</a></li>
                    <li><a target="_blank" href="/jiangmen/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">江门婚礼策划排名</a></li>
                    <li><a target="_blank" href="/dong_/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">东莞婚礼策划排名</a></li>
                    <li><a target="_blank" href="/zhanjiang/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">湛江婚礼策划排名</a></li>
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

</div>
<script type="text/javascript" src="/js/city.js"></script>
<?php if($type=="sheying"){?>
    <script type="text/javascript" src="/js/sheyingcity.js"></script>
<?php } else {?>
    <script type="text/javascript" src="/js/hunlicity.js"></script>
<?php } ?>
<script type="text/javascript" src="/js/layer/layer.js"></script>
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
</script>
</body>
</html>
