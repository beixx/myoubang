
<!DOCTYPE html>
<html lang="zh-cn">
<head><meta charset="utf-8"><title><?php echo $title;?>_有榜网</title><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/><meta name="applicable-device" content="pc,mobile"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta http-equiv="Cache-Control" content="no-transform" /> <meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="Keywords" content="<?php echo $title;?>"><meta name="description" content="<?php echo  $anwser[0]["content"]??""; ?>"><link rel="canonical" href="https://www.youbangkeyi.com/i/<?php echo $ask['id'];?>"><link rel="stylesheet" href="https://c.youbangkeyi.com/xinjs/wenda.css"><script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/jquery.SuperSlide1-2.1.1.js"></script><script src="https://c.youbangkeyi.com/xinjs/TouchSlide.1.1.js"></script><style>.zxyy a{color:#FFF;}</style></head>
<body class="shop-index view">
@include("front.tijiao")
<div class="main"><header><div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?><em></em></div><div class="logo"><a href="<?php echo '/'.$pycity.'/'.($tenants['shoptype']=='婚纱摄影'?'sheying':'hunli');?>"><?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?></a></div><a class="zxdh" href="tel:18500905723"></a></header>
    <div class="wendat"><h1><?php echo $ask['title'];?></h1><p>该问题由"<?php echo $ask['name'];?>" 发布于<?php echo date("Y-m-d H:i:s",$ask['created']);?></p></div>
    <div class="shop_box"><div class="titdp"><?php echo $city;?>推荐商家</div><div class="txt-box">
            <h3><a href="/detail/<?php echo $tenants['id'];?>"><?php echo $city.$tenants['name'];?></a></h3>
            <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price']?></span></div>
            <div class="num fa txtCtr"><?php echo $tenants['order_city'];?><div class="pmt1"><span>TOP</span></div></div></div><hr>
        <a id="dateShow" class="yuyue"><i></i><span>
                <?php echo $tenants['package']?$tenants['package']:'是否有优惠？点击右侧咨询';?>
                <p>距离结束:<em class="date-tiem-span d">00</em>天<em class="date-tiem-span h">00</em>:<em class="date-tiem-span m">00</em>:<em class="date-s-span s">00</em></p></span>
            <button class="discount-btn down liwuclick" href="javascript:"><?php echo $tenants['package']?"领取优惠":'优惠咨询';?></button></a>
        <div class="zysmn"><span class="jiance"><em></em>全网数据监测</span><span class="shishi"><em></em>数据实时更新</span><span class="jiangbei"><em></em>排名客观权威</span></div></div>
    <?php foreach($anwser as $v) { ?>
    <div class="huida">
        <div class="yonghu"><?php echo $v['name'];?></div>
        <p class="neirong"><?php echo $v['content'];?></p></div><?php } ?><?php if(isset($tenantspics) ) { ?>
    <div class="case_box"><div id="picScroll" class="picScroll txtCtr"><div class="bd"><ul><?php foreach($tenantspics as $k => $v){?><li><div class="anli_touxiang"><img src="//img2.youbangkeyi.com<?php echo $tenants['cover'];?>?imageView2/1/w/300/h/300/q/75|imageslim"></div><p><a href="/kpdetail/<?php echo $v['id']?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $v['picName']?></a></p><span class="anli_month"><em class="fl">发布于<?php echo \App\Http\Helper\Date::xtime($v['created_at']);?></em><em class="fr">浏览<?php echo $v['showcount'];?>次</em></span><?php if($v['explain']) { ?><div class="anli_p"><?php echo $v['explain'];?></div><?php } ?><span class="img"><?php for($i = 0 ; $i<9 ; $i++) { if(empty($v['cover'][$i])) break; ?><?php if(strpos($v['cover'][$i],'http') === false) {?><a class="yulan  glightbox<?php echo $k;?>" href="//img2.youbangkeyi.com<?php echo $v['cover'][$i];?>"><img src="//img2.youbangkeyi.com<?php echo $v['cover'][$i];?>?<?php echo  $ismobile?"imageView2/1/w/250/h/250/q/75":'imageView2/1/w/500/h/500/q/75';?>|imageslim" width="100%" height="100%" alt="<?php echo $title;?>相关案例"/></a><?php } else {?><img src="<?php echo $v['cover'][$i];?>?imageView2/1/w/800/h/600/q/75|imageslim" alt="<?php echo $title;?>相关案例"/><?php } ?><?php } ?><?php if($v['currentPrice']>0) {?><div class="txprice">该案例优惠价格：<em class="red">￥<?php echo $v['currentPrice'];?></em><em class="txyj">原价:￥<?php echo $v['price'];?></em></div><?php } ?></span><div href="javascript:" class="anlibj down anliclick"><?php echo $v['currentPrice']>0?"咨询档期":"获取案例报价";?></div></li><?php } ?></ul></div></div>
        <div class="ckaqb"><a href="/kplist/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">查看其他案例</a></div></div>
    <div class="unit-footer"><div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div>
        <div class="room-num-line"><span class="txt">版权归:<?php echo $city.$tenants['name'];?>所有</span></div></div>
    <footer class="txtCtr">
        <div class="tuijian"><h3><b>其他相关问答</b></h3><ul>
                <?php foreach($other as $v) { ?>
                <li id="wenda">
                    <a target="_blank" href="/wenda/<?php echo $v['id'];?>"><?php echo $v['title'];?></a></li>
                <?php } ?>
                <?php foreach($askcity as $v) { ?>
                <li id="wenda">
                    <a target="_blank" href="/i/<?php echo $v['id'];?>"><?php echo $v['title'];?></a></li>
                <?php } ?>
            </ul></div>
        <?php if($type=='sheying') { ?>
        <div class="tuijian chengshi"><h3>全部城市婚纱摄影榜单<span>(城市排名不分先后)</span></h3><ul>
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
        <div class="tuijian chengshi"><h3>热门城市婚礼策划榜单<span>(城市排名不分先后)</span></h3><ul>
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
            <div class="lian">Copyright © 2018 有榜网</div>
        </div>
    </footer>
    <!-- 城市弹出 -->
    <div class="container"></div>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/Time.glight.foot.js"></script>
<?php if($type=="sheying"){?>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/sheyingcity.js"></script>
<?php } else {?>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/hunlicity.js"></script>
<?php } ?>
<script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/layer/layer.js"></script>
    <script><?php foreach($tenantspics as $k=>$v) {?>var lightbox = GLightbox({selector: 'glightbox<?php echo $k?>'});<?php } ?>
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
    <?php } ?>
    @include("front.tijiaojs2")
</div>
</body>
<?php if(isset($tenantspics[0])){ ?>
<script type="application/ld+json">
{
    "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
    "@id": "https://www.youbangkeyi.com/i/<?php echo $ask['id'];?>",
    "appid": "1605753876149174",
    "title": "{{$title}}",
    "images": [
        <?php $i = 0 ; if(isset($tenantspics[0])) { foreach($tenantspics[0]['cover'] as $v) { if($i ++ >2 ) break;?>
       "https://img2.youbangkeyi.com<?php echo $v;?>?imageView2/1/w/600/h/400/q/75"<?php echo $i >2 ?"":",";?>
        <?php }} ?>
    ],
    "description":"<?php echo $anwser[0]["content"]??"";?>",
    "pubDate": "<?php echo date("Y-m-d",$ask['created']).'T'.date("H:i:s",$ask['created'])?>"
}
</script>
<?php } ?>
</html>
