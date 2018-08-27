<?php //echo $type ;exit;?><!DOCTYPE html>
<html lang="zh-cn"><head><meta charset="utf-8"><title>【<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>排名前十名】<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?>排行榜-有榜网</title><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/><meta name="applicable-device" content="pc,mobile"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta http-equiv="Cache-Control" content="no-transform" /> <meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="Keywords" content="<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>,<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>前十名,<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>排名,<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?>排行榜,<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>哪家好"><meta name="description" content="「有榜网<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>TOP50榜单」依托行业大数据为您提供客观权威的<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>排名，准确提供<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?>排行榜前十名、<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影影楼和工作室<?php } else { ?>婚庆公司<?php } ?>哪家好等信息。"><link rel="canonical" href="https://www.youbangkeyi.com/<?php echo $pycity;?>/<?php if($type=='sheying') { ?>sheying<?php } else { ?>hunli<?php } ?>"><link rel="stylesheet" href="https://c.youbangkeyi.com/xinjs/wenda.css?108"><script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/jquery-1.7.1.min.js"></script><script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/TouchSlide.1.1.js"></script></head>
<body>
<header><div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?><em></em></div><div class="logo"><a href="/<?php echo $pycity;?>/<?php if($type=='sheying') { ?>sheying<?php } else { ?>hunli<?php } ?>"><?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?></a></div><a class="zxdh" href="tel:18500905723"></a></header>
<div class="content"><div class="bg2"></div><div class="sousj">
<div class="sy-title"><h1><?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>排行榜</h1><span>数据更新:<?php echo date("Y年m月d日");?></span></div></div></div>
<div id="leftTabBox" class="tabBox"><div class="hd"><ul>
            <?php if($type=='sheying') { ?><li class="on"><a href="/<?php echo $pycity;?>/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">婚纱摄影</a></li>
                    <?php } else { ?><li><a href="/<?php echo $pycity;?>/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">婚纱摄影</a></li><?php } ?>
            <?php if($type=='sheying') { ?><li ><a href="/<?php echo $pycity;?>/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">婚礼策划</a></li><?php } else { ?><li class="on"><a href="/<?php echo $pycity;?>/hunli<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">婚礼策划</a></li><?php } ?></ul></div>
        <div class="bd">
            <div class="list_box">
               <div class="zysmi"><span>全网数据监测  榜单客观权威</span>中国婚嫁产业  大数据服务商<em><a href="https://www.youbangkeyi.com/guize.html" target="_blank">排名算法</a></em></div>
                <section class="showmore" pagesize="<?php echo $iscity==1?10:15;?>">
                    <?php if(!empty($spread)) foreach($spread as $k => $v) { ?>
                    <div class="pic_box bdtj">
                        <div class="num_txt">
                            <div class="tit_box">
                                <div class="title"><span class="icot1"></span><a href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php echo $v['name']?></a></div>
                                <div class="txt"><span>人均消费 ¥<?php echo $v['person_price'];?></span><span><?php echo $v['area'];?></span><span class="fmr"><?php echo $v['spreadcontent'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="pic txtCtr">
			                <?php $i = 0;?>
                            <?php foreach($v['taoxi'] as $v2) { if($i++ >3) break;  ?>
                            <?php if(isset($v2['cover'][0])) { ?>
                            <div class="img">
                                <a class="suolv" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                                    <span>
                                        <?php if(strpos($v2['cover'][0],'http') === false) {?>
                                        <img src="//img2.youbangkeyi.com<?php echo $v2['cover'][0];?>?<?php echo  $ismobile?"imageView2/1/w/300/h/300/q/75":'imageView2/1/w/464/h/464/q/75';?>|imageslim">
                                        <?php } else {?>
                                        <img src="<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/250/q/75|imageslim">
                                        <?php } ?>
                                        <?php if($v2['currentPrice']>0) {?>
                                        <em>¥<?php echo $v2['currentPrice'];?></em>
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
                            <a class="discount-btn" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">去看看<em></em></a>
                        </div><?php } ?>
                        <div class="daodian"><span class="icot2"></span>
                            <a class="sybj" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">查看商家详情</a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php foreach($tenants as $k => $v) { ?>
                        <div class="pic_box">
<div class="num_txt"><div class="tit_box"><div class="title"><span>第<em><?php echo $v['order_city'];?></em>名</span><a href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php echo $v['name']?></a></div><div class="txt"><span class="zhish"><em class="shu">综合得分</em><em class="zhi"><?php echo $v['heat_index'];?></em></span><span>人均消费 ¥<?php echo $v['person_price'];?></span><span class="fmr"><?php echo $v['area'];?></span></div></div></div>
<div class="pic txtCtr"><?php foreach($v['taoxi'] as $v2) { ?><?php if(isset($v2['cover'][0])) { ?><div class="img"><a class="suolv" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><span><?php if(strpos($v2['cover'][0],'http') === false) {?><img src="//img2.youbangkeyi.com<?php echo $v2['cover'][0];?>?<?php echo  $ismobile?"imageView2/1/w/300/h/300/q/75":'imageView2/1/w/464/h/464/q/75';?>|imageslim" alt=""><?php } else {?><img src="<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/250/q/75|imageslim"  alt=""><?php } ?><?php if($v2['currentPrice']>0) {?><em><?php echo $v2['currentPrice']>0?'¥'.$v2['currentPrice']:'';?></em><?php } ?></span></a></div><?php } ?><?php } ?></div>
 <?php if(strlen($v['package'])>2) { ?>
<div class="yuyue"><i></i><span><?php echo $v['package'];?></span><a class="discount-btn" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">去看看<em></em></a></div><?php } ?>
<div class="txt_box txtCtr"><div class="txt"><p class="blue"><?php echo $v['day30s'];?></p><em>品牌搜索人数</em></div><div class="txt"><p class="blue"><?php echo ($v['allcy'] + $v['allce']);?></p><em>全网评论人数</em></div><div class="txt"><p class="blue"><?php $c = $v['allcy']+$v['allce'];$c= $c==0?1:$c ;  echo intval($v['allcy']/$c*10000)/100;?>%</p><em>全网好评率</em></div></div>
<div class="daodian"><a class="sybj" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">查看商家详情</a></div></div>
                        <?php } ?>
</section></div>
<?php if(isset($askfooter)) { ?>
<div class="comment_list"><div class="title dafen1">本城市最新话题<span class="fa">更新于：<?php echo date("Y-m-d H:i:s",$askfooter['created']);?></span></div>
<div class="comment_column"><h3 class="wenda"><em></em><a href="/wenda/<?php echo $askfooter['id'];?>"><?php echo $askfooter['title'];?></a></h3>
<?php if(isset($askfooter['answer']["id"])){ ?>
<div class="cmt_con cmt_R"><span class="comment_W"><?php echo $askfooter['answer']['content'];?></span>
<span class="f12p">—「以上内容真实消费者"<?php echo $askfooter['answer']['name'];?>"阐述 」</span></div>
        <?php } ?>
</div></div>
<?php } ?>
<div class="tittp">有榜数据说明</div>
<div id="fugai" class="time-box">
<div class="txtshuju lft"><em class="fgchs"></em><span class="blue">200+ </span>数据覆盖城市</div>
<div class="txtshuju lft"><em class="fgshh"></em><span class="blue">120,000+ </span>实时分析商户</div>
<div class="txtshuju lft"><em class="fgcaiji"></em><span class="blue">10 </span>数据采集渠道 </div>
<div class="txtshuju lft"><em class="fgweidu"></em><span class="blue">18 </span>数据统计维度</div>
<div class="txtshuju lft"><em class="fgxinren"></em><span class="blue">40,000 </span>对结婚新人</div>
<div class="txtshuju lft"><em class="fgpinglun"></em><span class="blue">2,000万+ </span>用户真实点评</div><div class="clear"></div> </div>
<div class="unit-footer"><div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">所属城市:<?php echo $city;?></span></div></div>
        </div>
<footer class="txtCtr">
<div class="tuijian"><h3><b><?php echo $city.$shoptype;?>热门话题</b></h3>
<ul><?php foreach($askcity as $v) { ?>
<li id="sansan"><a target="_blank" href="/i/<?php echo $v['id'];?>"><?php echo $v['title'];?></a></li><?php } ?></ul></div>
    <?php if($type=='sheying') { ?>
                  <div class="tuijian paim"><h3>全部城市婚纱摄影榜单<span>(城市排名不分先后)</span></h3><ul>
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
                    <li><a target="_blank" href="/zhanjiang/sheying<?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">湛江婚纱摄影排名</a></li></ul></div> 
                    <?php } else { ?>
                     <div class="tuijian paim"><h3>热门城市婚礼策划榜单<span>(城市排名不分先后)</span></h3><ul>
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
</ul></div> <?php } ?>
 <div class="foot">
        <div class="foots">
            <span><a href="/about.html">关于有榜</a>|<a target="_blank" href="https://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html" target="_blank">服务说明</a>|<a target="_blank" href="http://c.youbangkeyi.com/images/yingyezhizhao.jpeg">营业执照</a></span>
            京ICP备18024234号-2 北京有榜信息科技有限公司 
            <span class="gongan"><img src="https://img2.youbangkeyi.com/xinjs/police_record.png" width="15" style="margin:0 4px 4px 0;">京公网安备 11010802024698号</span></div>
        <div class="lian">Copyright © 2018 有榜网</div></div>
</footer></div></div>
<!-- 城市弹出 -->
<div class="container"></div>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/footer.js"></script>
<?php if($type=="sheying"){?>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/sheyingcity.js"></script>
<?php } else {?>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/hunlicity.js"></script>
<?php } ?>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/layer.js?2"></script></body>
<?php if(isset($askfooter)) { ?>
<script type="application/ld+json">
{
"@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
"@id": "https://www.youbangkeyi.com/<?php echo $pycity.'/'.$type;?>",
"appid": "1605753876149174",
"title": "【<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>排名前十名】<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?>排行榜-有榜网",
"description":"「有榜网<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>TOP50榜单」依托行业大数据为您提供客观权威的<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>排名，准确提供<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?>排行榜前十名、<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影影楼和工作室<?php } else { ?>婚庆公司<?php } ?>哪家好等信息。",
"images": [<?php $i=0; foreach($tenants as $v) {  foreach($v['taoxi'] as $v2) { if($i ++ > 2) break; ?>"<?php echo "https://img2.youbangkeyi.com".$v2['cover'][0];?>?imageView2/1/w/600/h/400/q/75|imageslim" <?php echo $i >2 ?"":",";?><?php }} ?>],
"pubDate": "<?php echo date("Y-m-d",$askfooter['created']).'T'.date("H:i:s",$askfooter['created'])?>"}
</script>
<?php } ?>
</html>
