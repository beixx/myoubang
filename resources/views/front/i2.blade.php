
<!DOCTYPE html>
<html lang="zh-cn">
<head><meta charset="utf-8"><title><?php echo $title;?>_有榜网</title><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/><meta name="applicable-device" content="pc,mobile"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta http-equiv="Cache-Control" content="no-transform" /> <meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="Keywords" content="<?php echo $title;?>"><meta name="description" content="<?php echo  $anwser[0]["content"]??""; ?>"><link rel="canonical" href="https://www.youbangkeyi.com/i/<?php echo $ask['id'];?>"><link rel="stylesheet" href="https://c.youbangkeyi.com/xinjs/wenda.css?310"><script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/jquery.SuperSlide1-2.1.1.js"></script><script src="https://c.youbangkeyi.com/xinjs/TouchSlide.1.1.js"></script><style>.huida .yonghu{font-size:0.7rem!important;}.frwd {float: initial!important;margin-left: 0.4rem;}.anlibj a,.zxyy a{color:#FFF!important;}.room-num-line a{color: #b2b2b2!important;}.neirong span{display: block;margin-bottom: 0.5rem;}.neirong span a{font-weight: bold; color: #3c6e9e; font-size: 0.75rem;}</style></head>
<body class="shop-index view">
<header><a class="fanhui" href="<?php echo '/'.$pycity.'/'.($tenants['shoptype']=='婚纱摄影'?'sheying':'hunli');?>">榜单首页</a><div class="logo"><a href="<?php echo '/'.$pycity.'/'.($tenants['shoptype']=='婚纱摄影'?'sheying':'hunli');?>"><?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?></a></div><a class="zxdh" href="tel:18500905723"></a></header>
    <div class="wendat"><h1><?php echo $ask['title'];?></h1><p>该问题由"<?php echo $ask['name'];?>" 发布于<?php echo date("Y-m-d H:i:s",$ask['created']);?></p></div>

    <?php foreach($anwser as $v) { $tenants = $v['pic']; ?>
    <div class="huida">
    <div class="yonghu"><?php echo $v['name'];?><span class="frwd">推荐的<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影商家<?php } else { ?>婚庆公司<?php } ?></span></div>
    <p class="neirong"><span><a href="/detail/<?php echo $tenants['id'];?>">#<?php echo $tenants["positionCity"].$tenants["name"];?>#</a><br />
    有榜网综合排名:第<?php echo $tenants['order_city'];?>名
    <br />
    人均消费:¥<?php echo $tenants['person_price'];?>
</span>
<?php echo $v['content'];?>
<?php $i =1 ; $cover =json_decode($tenants['cover'], true);$cover = is_array($cover)?$cover:[]; 
                foreach($cover as $v2) {  if($i++>3) break;?>
              <img src="//img2.youbangkeyi.com<?php echo $v2;?>?<?php echo  $ismobile?"imageView2/1/w/600/h/600/q/75":'imageView2/1/w/1000/h/1000/q/75';?>" width="100%" height="100%" alt="<?php echo $tenants["positionCity"].$tenants["name"];?>案例"/>
                                <?php } ?>
    </p>
        </div>
    </div>
    <?php } ?>
    <div class="unit-footer"><div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div>
        <div class="room-num-line"><span class="txt">标题:<a href="https://www.youbangkeyi.com/i/<?php echo $ask['id'];?>"><?php echo $ask['title'];?></a></span></div></div>
    <footer class="txtCtr">
        <div class="tuijian"><h3><b>其他相关问答</b></h3><ul>
                <?php foreach($askcity as $v) { ?>
                <li id="wenda">
                    <a target="_blank" href="/i/<?php echo $v['id'];?>"><?php echo $v['title'];?></a></li>
                <?php } ?>
            </ul></div>
        <div class="foot">
            <div class="foots">
                <span><a href="/about.html">关于有榜</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html" target="_blank">服务说明</a>|<a target="_blank" href="//c.youbangkeyi.com/images/yingyezhizhao.jpeg">营业执照</a></span>
                京ICP备18024234号-2 北京有榜信息科技有限公司
                <span class="gongan"><img src="https://img2.youbangkeyi.com/xinjs/police_record.png" width="15" style="margin:0 4px 4px 0;">京公网安备 11010802024698号</span>
            </div>
            <div class="lian">Copyright © 2018 有榜网</div>
        </div>
    </footer>
    <script type="text/javascript" src="https://c.youbangkeyi.com/xinjs/Time.glight.foot.js"></script>
</body>
<?php if(isset($anwser[0]["pic"]["cover"])){ ?>
<script type="application/ld+json">
{
    "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
    "@id": "https://www.youbangkeyi.com/i/<?php echo $ask['id'];?>",
    "appid": "1605753876149174",
    "title": "{{$title}}",
    "images": [
        <?php $i = 0 ; if(isset($anwser[0]["pic"])) { $cover = json_decode($anwser[0]["pic"]["cover"],true);   foreach($cover as $v) { if($i ++ >2 ) break;?>
    "https://img2.youbangkeyi.com<?php echo $v;?>?imageView2/1/w/600/h/400/q/75"<?php echo $i >2 ?"":",";?>
    <?php }} ?>
    ],
    "description":"<?php echo $anwser[0]["content"]??"";?>",
    "pubDate": "<?php echo date("Y-m-d",$ask['created']).'T'.date("H:i:s",$ask['created'])?>"
}
</script>
<?php } ?>
</html>
