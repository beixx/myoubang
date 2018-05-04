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
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/main.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/foot.js"></script>
    <script type="text/javascript" src="/js/more.js"></script>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1211ad93505007e7eb6df7f6f05c4e8d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <style type="text/css">
        #gr_zone_ids{cursor:pointer}
    </style>
</head>
<body>
<header>
<div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
<div class="logo"><img width="3.46rem" height="1.4rem" src="/images/logo.png"></div>
<a class="zxdh" href="tel:18500905723"></a>
</header>

<div class="content">
    <div class="sousj">
       <div class="search">
        <input type="text" name="keyword" class="inp" placeholder="查商家排名·消费才放心">
        <input type="hidden" name="pycity" value="<?php echo $pycity;?>" />
        <input type="hidden" name="type" value="<?php echo $type;?>" />
        <input type="button" name="submit" class="btn">
    </div>
    </div>
    <div id="leftTabBox" class="tabBox">
        <div class="hd">
            <ul>
            <?php if($type=='sheying') { ?>
                           <li class="on"><a href="/<?php echo $pycity;?>/sheying">婚纱摄影排行榜</a></li>
                    <?php } else { ?>
							<li><a href="/<?php echo $pycity;?>/sheying">婚纱摄影排行榜</a></li>
                    <?php } ?>
                      <?php if($type=='sheying') { ?>
                          <li ><a href="/<?php echo $pycity;?>/hunli">婚礼策划排行榜</a></li>
                    <?php } else { ?>
                          <li class="on"><a href="/<?php echo $pycity;?>/hunli">婚礼策划排行榜</a></li>
                    <?php } ?>
            </ul>
        </div>
        <div class="bd">
            <div class="list_box">
                <div class="b_time">数据更新：<span class="fa"><?php echo date("Y年m月d日");?></span><span class="guize"><a href="/guize.html">榜单规则</a></span></div>
                <div class="zysmi">排名权威有保障，由有榜网对全网大数据分析得出！</div>
                <section class="showmore" pagesize="<?php echo $iscity==1?10:15;?>">
                    <?php if(isset($spread['name'])) { ?>
                    <div class="pic_box">
                        <!-- <?php if($spread['isVip']==2) { ?>
                            <div class="huiyuan"></div>
                        <?php } ?> -->
                        <div class="num_txt">
                       <div class="tit_pic"><a href="/detail/<?php echo $spread['id'];?>"><img src="//img2.youbangkeyi.cn/<?php echo $spread['logo'];?>?imageView2/1/w/150/h/150/q/75|imageslim"></a></div>
                            <div class="tit_box">
                                <div class="title"><span>TOP.<?php echo $spread['order_city'];?></span><a href="/detail/<?php echo $spread['id'];?>"><?php echo $spread['name']?></a></div>
                                <div class="txt"><span>竞争指数：<?php echo $spread['heat_index'];?></span><span>|</span><span>人均消费：¥<?php echo $spread['person_price'];?></span></div>
                            </div>
                        </div>
                        <?php
                            if($spread['trends'] && is_array(json_decode($spread['trends'],true))){
                                $trends = json_decode($spread['trends'],true);
                                if($trends['time'] >= time() - 86400*2) {
                                    if(isset($trends['type']) && $trends['type'] ==1) {
                                        echo '<div class="dongtai"> '.$trends['content'].'</div>';
                                    }
                                    else {
                                        $time = time() - $trends['time'];
                                        if($time < 3600) {
                                            $str = intval($time/60).'分钟前  ';
                                        }elseif ($time < 3600*24) {
                                            $str = intval($time/3600).'小时前  ';

                                        }else {
                                            $str = '昨天  ';
                                        }
                                        echo '<div class="dongtai">'.$str.$trends['content'].'</div>';
                                    }
                                }
                                else {
                                    echo '';
                                }
                            }
                            else {
                                echo '';
                            }
                        ?>
                        <div class="vippic txtCtr">
                            <?php if(isset($spread['taoxi'])) { ?>
                            <div class="vipimg">
                                <a href="/detail/<?php echo $spread['id'].'/'.$spread['taoxi']['id'];?>">
                                    <?php if(strpos($spread['taoxi']['cover'][0],'http') === false) {?>
                                    <img src="//img2.youbangkeyi.cn<?php echo $spread['taoxi']['cover'][0]; ?>">
                                    <?php } else {?>
                                        <img src="<?php echo $spread['taoxi']['cover'][0]; ?>">
                                    <?php }?>
                                </a>
                                <p class="title txtLft"><?php echo $spread['setName'];?></p>
                                <div class="price txtLft"><span class="red fa">¥<?php echo $spread['taoxi']['currentPrice'];?></span><del class="fa">¥<?php echo $spread['taoxi']['price'];?></del></div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue"><?php echo $spread['day30s'];?></p>
                                <em>品牌搜索人数</em>
                            </div>
                            <div class="txt">
                                <p class="blue"><?php echo $spread['allcy'];?></p>
                                <em>全网好评人数</em>
                            </div>
                            <div class="txt">
                                <p class="blue"><?php echo $spread['allce'];?></p>
                                <em>全网差评人数</em>
                            </div>
                        </div>
                                            <div class="daodian">
                                <div class="daodian_l">
                                    <p class="dp001"><span>到店礼 </span>
                                    预约到店免费领取超值礼包</p>
                                                                    </div>
                               <div class="daodian_r"><a href="/detail/<?php echo $spread['id']?>">领取优惠</a></div>
                            </div>
                    </div>
                    <?php } ?>
                    <?php foreach($tenants as $k => $v) { ?>
                    <div class="pic_box">
                         <!--<?php if($v['isVip']==2) { ?>
                            <div class="huiyuan"></div>
                        <?php } ?>-->
                        <div class="num_txt">
                         <div class="tit_pic"><a href="/detail/<?php echo $v['id'];?>"><img src="//img2.youbangkeyi.cn<?php echo $v['cover'];?>?imageView2/1/w/150/h/150/q/75|imageslim"></a></div>
                            <div class="tit_box">
                                <div class="title"><span>TOP.<?php echo $v['order_city'];?></span><a href="/detail/<?php echo $v['id'];?>"><?php echo $city;?><?php echo $v['name']?></a></div>
                                <div class="txt"><span>竞争指数：<?php echo $v['heat_index'];?></span><span>|</span><span>人均消费：¥<?php echo $v['person_price'];?></span></div>
                            </div>
                        </div>
                             <?php
                             if($v['trends'] && is_array(json_decode($v['trends'],true))){
                                 $trends = json_decode($v['trends'],true);
                                 if($trends['time'] >= time() - 86400*3) {
                                     if(isset($trends['type']) && $trends['type'] ==1) {
                                         echo '<div class="dongtai">'.$trends['content'].'</div>';

                                     }
                                     else {
                                         $time = time() - $trends['time'];
                                         if($time < 3600) {
                                             $str = intval($time/60).'分钟前  ';
                                         }elseif ($time < 3600*24) {
                                             $str = intval($time/3600).'小时前  ';

                                         }else {
                                             $str = '昨天  ';
                                         }
                                         echo '<div class="dongtai">'.$str.$trends['content'].'</div>';
                                     }
                                 }
                                 else {
                                     echo '';
                                 }
                             }
                             else {
                                 echo '';
                             }
                             ?>
                        <div class="pic txtCtr">
                            <?php foreach($v['taoxi'] as $v2) { ?>
                                <?php if(isset($v2['cover'][0])) { ?>                  
                                <div class="img">
                                    <a class="suolv" href="/detail/<?php echo $v['id'].'/'.$v2['id'];?>">
                                        <span>
                                            <?php if(strpos($v2['cover'][0],'http') === false) {?>
                                                <img class="lazy" src="/images/grey.gif" data-original="//img2.youbangkeyi.cn<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/250/q/75|imageslim">
                                            <?php } else {?>
                                                <img class="lazy" src="/images/grey.gif" data-original="<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/250/q/75|imageslim">
                                            <?php } ?>
                                        </span>
                                    </a>
                                </div>
                                <?php } ?>
                            <?php } ?>

                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue"><?php echo $v['day30s'];?></p>
                                <em>品牌搜索人数</em>
                            </div>
                            <div class="txt">
                                <p class="blue"><?php echo $v['allcy'];?></p>
                                <em>全网好评人数</em>
                            </div>
                            <div class="txt">
                                <p class="blue"><?php echo $v['allce'];?></p>
                                <em>全网差评人数</em>
                            </div>
                        </div>
                            <div class="daodian down" href="javascript:">
                                <div class="sybj">
                                        <?php echo $v['package']?$v['package']:'到店免费领取超值礼包';?></div>
                            </div>
                    </div>
                    <?php } ?>
                </section>
            </div>
        </div>
    </div>
</div>
<!--
<footer>
    <div class="txt"><p class="f075">定制个性榜单</p>覆盖<span>12万+</span>商户 <span>18个</span>数据衡量维度</div>
    <em class="down">立即定制</em></footer>
<div class="bgDiv"></div>
<div class="downNav">
    <div class="title">快速定制专属榜单</div>
    <div class="form">
        <div class="sewvmain">
            <div class="tb"></div>
            <div class="sewv">
                <div class="sewvtop"><em><span id="customized_name"><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?></span><img src="/images/icon9.png"></em></div>
            </div>
            <div class="sewv">
                <div class="sewvtop"><em><span id="style">选择风格</span><img src="/images/icon9.png"></em></div>
                <ul class="sewvbm" multile='1' style="left: -7.63rem">
                    <?php if($type=='sheying') { ?>
                            <li class="xq2">小清新</li>
                            <li class="xq2">韩式</li>
                            <li class="xq2">花海</li>
                            <li class="xq2">个性</li>
                            <li class="xq2">城市地标</li>
                            <li class="xq2">欧美</li>
                            <li class="xq2">宫殿教堂</li>
                            <li class="xq2">复古</li>
                            <li class="xq2">海景</li>
                            <li class="xq2">性感</li>
                            <li class="xq2">夜景</li>
                            <li class="xq2">游艇</li>
                            <li class="xq2">水下</li>
                            <li class="xq2">日系</li>
                            <li class="xq2">中国风</li>
                            <li class="xq2">马场</li>
                            <li class="xq2">旅拍</li>
                            <li class="xq2">唯美</li>
                    <?php } else { ?>
                           <li class="xq2">唯美</li>
                            <li class="xq2">奢华大气</li>
                            <li class="xq2">小清新</li>
                            <li class="xq2">高贵紫</li>
                             <li class="xq2">梦幻蓝</li>
                            <li class="xq2">复古</li>
                             <li class="xq2">欧式宫廷</li>
                            <li class="xq2">粉色系</li>
                            <li class="xq2">香橙系</li>
                            <li class="xq2">红色系</li>
                            <li class="xq2">森系</li>
                            <li class="xq2">中式</li>
                    <?php } ?>

                    <div class='btn txtCtr'>
                        <a id='style_btn' href='javascript:;'>确定</a>
                    </div>
                </ul>
            </div>
        </div>
        <div class="input">

            </form>
            <form action="/user/{{$pycity}}/<?php echo rand(10,1000) ?>" method="get" id="subsubmit">
                <input type="hidden" id="hiddenstyle" name="style" value=""/>
                <input type="hidden" id="hiddencity" name="city" value=""/>
                <input type="text" name="budget" placeholder="您的预算">
                <input type="text" name="mobile" placeholder="您的手机">
                <input type="text" name="name" placeholder="您的姓名">
            </form>
        </div>
        <div class="submit txtCtr"><a href="">立即定制</a> </div>
    </div>
</div>

</div>
-->
<style type="text/css">
    .layui-layer-title{border-radius: 0.3rem 0.3rem 0 0;padding: 0;margin-top: 0rem;text-align: center;}
    .layui-layer{border-radius: 0.3rem;overflow: hidden;}
    .layui-layer-ico{background: url(/js/layer/skin/default/close.png);background-size: 2.75rem;width: 2.75rem;height: 1.45rem}
    .layui-layer-setwin a{margin-left: 0;}
    .layui-layer-setwin{right: 8px;top: 8px}
    .f075{font-size:.75rem;}
</style>

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
                    <p data-id="110100"> <a href="/beijing/<?php echo $type;?>">北京</a></p>
                    <p data-id="110101"> <a href="/tianjin/<?php echo $type;?>">天津</a></p>
                    <p data-id="110102"><a href="/shenyang/<?php echo $type;?>">沈阳</a></p>
                    <p data-id="110103"><a href="/dalian/<?php echo $type;?>">大连</a></p>
                    <p data-id="110104"><a href="/haerbin/<?php echo $type;?>">哈尔滨</a></p>
                    <p data-id="110105"><a href="/shijiazhuang/<?php echo $type;?>">石家庄</a></p>
                    <p data-id="1101041"><a href="/taiyuan/<?php echo $type;?>">太原</a></p>
                    <p data-id="1101042"><a href="/changchun/<?php echo $type;?>">长春</a></p>
                    <p data-id="1101043"><a href="/tangshan/<?php echo $type;?>">唐山</a></p>
                    <p data-id="1101044"><a href="/qinhuangdao/<?php echo $type;?>">秦皇岛</a></p>
                    <p data-id="1101045"><a href="/langfang/<?php echo $type;?>">廊坊</a></p>
                    <p data-id="1101046"><a href="/baoding/<?php echo $type;?>">保定</a></p>
                    <p data-id="1101047"><a href="/bangbu/<?php echo $type;?>">蚌埠</a></p>
                    <p data-id="1101048"><a href="/jinzhou/<?php echo $type;?>">锦州</a></p>
                    <p data-id="1101049"><a href="/daqing/<?php echo $type;?>">大庆</a></p>
                    <p data-id="1101040"><a href="/changzhi/<?php echo $type;?>">长治</a></p>
               <span class="city-letter">华东地区</span> 
                    <p data-id="110107"> <a href="/shanghai/<?php echo $type;?>">上海</a></p>
                    <p data-id="110106"> <a href="/hangzhou/<?php echo $type;?>">杭州</a></p>
                    <p data-id="110108"><a href="/xiamen/<?php echo $type;?>">厦门</a></p>
                    <p data-id="110109"><a href="/nanjing/<?php echo $type;?>">南京</a></p>
                    <p data-id="110110"><a href="/suzhou/<?php echo $type;?>">苏州</a></p>
                    <p data-id="110111"><a href="/wuxi/<?php echo $type;?>">无锡</a></p>
                    <p data-id="110112"><a href="/ningbo/<?php echo $type;?>">宁波</a></p>
                    <p data-id="110113"><a href="/fuzhou/<?php echo $type;?>">福州</a></p>
                    <p data-id="110114"><a href="/qingdao/<?php echo $type;?>">青岛</a></p>
                    <p data-id="110115"><a href="/hefei/<?php echo $type;?>">合肥</a></p>
                    <p data-id="1101121"><a href="/jinan/<?php echo $type;?>">济南</a></p>
                    <p data-id="1101122"><a href="/changzhou/<?php echo $type;?>">常州</a></p>
                    <p data-id="1101123"><a href="/wenzhou/<?php echo $type;?>">温州</a></p>
                    <p data-id="1101124"><a href="/quanzhou/<?php echo $type;?>">泉州</a></p>
                    <p data-id="1101125"><a href="/nantong/<?php echo $type;?>">南通</a></p>
                    <p data-id="1101126"><a href="/xuzhou/<?php echo $type;?>">徐州</a></p>
                    <p data-id="1101127"><a href="/wuhu/<?php echo $type;?>">芜湖</a></p>
                    <p data-id="1101128"><a href="/weifang/<?php echo $type;?>">潍坊</a></p>
                    <p data-id="1101129"><a href="/yangzhou/<?php echo $type;?>">扬州</a></p>
                    <p data-id="1101120"><a href="/jinhua/<?php echo $type;?>">金华</a></p>
                    <p data-id="11011"><a href="/linyi/<?php echo $type;?>">临沂</a></p>
                    <p data-id="11012"><a href="/huzhou/<?php echo $type;?>">湖州</a></p>
                    <p data-id="11013"><a href="/yancheng/<?php echo $type;?>">盐城</a></p>
                    <p data-id="11014"><a href="/shaoxing/<?php echo $type;?>">绍兴</a></p>
                    <p data-id="11015"><a href="/jiaxing/<?php echo $type;?>">嘉兴</a></p>
                    <p data-id="11016"><a href="/huaian/<?php echo $type;?>">淮安</a></p>
                    <p data-id="11017"><a href="/maanshan/<?php echo $type;?>">马鞍山</a></p>
                    <p data-id="11018"><a href="/taian/<?php echo $type;?>">泰安</a></p>
            <span class="city-letter">中部西部</span> 
                    <p data-id="110116"><a href="/chengdu/<?php echo $type;?>">成都</a></p>
                    <p data-id="110117"><a href="/chongqing/<?php echo $type;?>">重庆</a></p>
                    <p data-id="110118"><a href="/changsha/<?php echo $type;?>">长沙</a></p>
                    <p data-id="110119"><a href="/zhengzhou/<?php echo $type;?>">郑州</a></p>
                    <p data-id="110120"><a href="/xian/<?php echo $type;?>">西安</a></p>
                    <p data-id="110121"><a href="/wuhan/<?php echo $type;?>">武汉</a></p>
                    <p data-id="1101191"><a href="/nanchang/<?php echo $type;?>">南昌</a></p>
                    <p data-id="1101192"><a href="/lanzhou/<?php echo $type;?>">兰州</a></p>
                    <p data-id="1101193"><a href="/yichang/<?php echo $type;?>">宜昌</a></p>
                    <p data-id="1101194"><a href="/kunming/<?php echo $type;?>">昆明</a></p>
                    <p data-id="1101195"><a href="/guiyang/<?php echo $type;?>">贵阳</a></p>
                    <p data-id="1101196"><a href="/hanzhong/<?php echo $type;?>">汉中</a></p>
                    <p data-id="1101197"><a href="/hengyang/<?php echo $type;?>">衡阳</a></p>
                  <span class="city-letter">华南地区</span>
                    <p data-id="110122"> <a href="/guangzhou/<?php echo $type;?>">广州</a></p>
                    <p data-id="110123"><a href="/shenzhen/<?php echo $type;?>">深圳</a></p>
                    <p data-id="1101231"><a href="/sanya/<?php echo $type;?>">三亚</a></p>
                     <p data-id="1101232"><a href="/nanning/<?php echo $type;?>">南宁</a></p>
                     <p data-id="1101233"><a href="/zhuhai/<?php echo $type;?>">珠海</a></p>
                     <p data-id="1101234"><a href="/haikou/<?php echo $type;?>">海口</a></p>
                     <p data-id="1101235"><a href="/guilin/<?php echo $type;?>">桂林</a></p>
                    <p data-id="1101236"><a href="/foshan/<?php echo $type;?>">佛山</a></p>
                     <p data-id="1101237"><a href="/huizhou/<?php echo $type;?>">惠州</a></p>
                    <p data-id="1101238"> <a href="/shantou/<?php echo $type;?>">汕头</a></p>
                     <p data-id="1101239"><a href="/jiangmen/<?php echo $type;?>">江门</a></p>
                    <p data-id="1101230"><a href="/dong_/<?php echo $type;?>">东莞</a></p>
                    <p data-id="11012311"><a href="/zhanjiang/<?php echo $type;?>">湛江</a></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/city.js"></script>
<script type="text/javascript" src="/js/layer/layer.js"></script>
<script type="text/javascript" src="/js/jquery.lazyload.js"></script>

<div class="bgDiv"></div>
<div class="downNav" style="background: #FFF;border-radius: 0.3rem 0.3rem 0 0;height:19rem;">
    <div class="ask">
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
        <input type="text" name="mobile" id="mobile" class="input" placeholder="输入手机号，享受以上福利">
        <input type="submit" name="wapsubmit" class="btn" value="预约看店">
    </div>

</div>

 <?php if($type=='sheying') { ?>
      <script type="text/javascript">
   
    function showaa(obj)
    {
      //var obj_parent=obj.parentNode;
      var obj_parent=obj.parentElement
     
      if(obj_parent.className=="bottom_slide_box aa_show")
      {
        obj_parent.className="bottom_slide_box aa_hide";
      }
      else
      {
        obj_parent.className="bottom_slide_box aa_show";
      }
    }
    
  </script>


<div id="12" class="bottom_slide_box aa_hide">
  <div onclick="showaa(this)" class="click_are"></div>
 <div class="click_img"><span class="money">拍婚纱照多少钱？</span><span class="suansuan">98%的新人选择，提前算一算</span></div>
  <!-- <div class="go_shake_img"></div> -->
  <div class="calculator_box">
    <div class="select_b">
      <h2><span>今天已有 <em>940</em> 位新人获取了婚纱照预算</span></h2>
        <div class="num-frame">
                <div class="ndys"><p>您的婚纱照预算为</p></div>
                <div class="yuan"><p>元</p></div>
                <div class="num-window clearfix clear">
        <em id="setnum">?</em>
                </div>
            </div>

            <div class="form_line">
          <div class="element triangle">
                <select name="city" id="xuqiu" class="first_line">
                  <option value="<?php echo $city;?>">--<?php echo $city;?>--</option>

                  <option value="北京">北京</option>
                  <option value="天津">天津</option>
                  <option value="沈阳">沈阳</option>
                  <option value="大连">大连</option>
                  <option value="哈尔滨">哈尔滨</option>
                  <option value="石家庄">石家庄</option>

                  <option value="上海">上海</option>
                  <option value="杭州">杭州</option>
                  <option value="厦门">厦门</option>
                  <option value="南京">南京</option>
                  <option value="苏州">苏州</option>
                  <option value="无锡">无锡</option>
                  <option value="宁波">宁波</option>
                  <option value="福州">福州</option>
                  <option value="青岛">青岛</option>
                  <option value="合肥">合肥</option>

                  <option value="成都">成都</option>
                  <option value="重庆">重庆</option>
                  <option value="长沙">长沙</option>
                  <option value="郑州">郑州</option>
                  <option value="西安">西安</option>
                  <option value="武汉">武汉</option>
                  <option value="总监级">广州</option>
                  <option value="资深级">深圳</option>
              </select>
          </div>
      </div>
      <div class="form_line">
          <div class="element triangle">
                  <select name="shangjia" id="xuqiu" class="first_lin">
                  <option value="">--选择商家类型--</option>
                  <option value="资深级">中端商家</option>
                  <option value="总监级">高端商家</option>
              </select>
                <select name="zaoxing" id="hotel" class="first_lin fr">
                  <option value="">--选择场景数量--</option>
                  <option data-value="3" value="3">3个</option>
                  <option data-value="4" value="4">4个</option>
                  <option data-value="5" value="5">5个</option>
                  <option data-value="6" value="6">6个</option>
                  <option data-value="7" value="7">6以上</option>
              </select>
          </div>
      </div>
      <div class="form_line">
          <div class="element">
              <div class="text_wrap">
                   <select  name="sheying"  id="xuqiu" class="first_lin">
                  <option value="">--选择摄影师--</option>
                  <option value="资深级">资深级</option>
                  <option value="总监级">总监级</option>
                  <option value="资深级">首席摄影师</option>
              </select>
               <select name="huazhuang" id="xuqiu" class="first_lin fr">
                  <option value="">--选择化妆师--</option>
                  <option value="资深级">资深级</option>
                  <option value="总监级">总监级</option>
                  <option value="资深级">首席化妆师</option>
              </select>
              </div>
          </div>
      </div>
      <div class="form_line">
          <div class="element triangle">
              <select name="count" id="xuqiu" class="first_line">
                  <option value="">--请选择精修张数--</option>
                  <option value="40张">40张</option>
                  <option value="45张">45张</option>
                  <option value="50张">50张</option>
                  <option value="55张">55张</option>
                  <option value="60张">60张</option>
                  <option value="65张">65张</option>
                  <option value="70张">70张</option>
                  <option value="75张">75张</option>
                  <option value="80张">80张</option>
                  <option value="85张">85张</option>
                  <option value="90张">90张</option>
                  <option value="95张">95张</option>
                  <option value="100张">100张</option>
              </select>
          </div>
      </div>
      <div class="form_line" id="zxys_phoneInput">
          <div class="element">
              <div class="text_wrap">
                  <input id="phonenumber" placeholder="输入手机号，短信接收报价结果" type="text" class="text phonetext" name="phone">
                  <em class="text_lbl"></em>
              </div>
          </div>
      </div>
          <div class="shuom">
          预算结果根据用户真实消费大数据分析计算得出。
          </div>
    </div>
    <div class="result_b">
      <button  href="javascript:void(0)" onclick="one()" class="star_calculator">
        开始计算
      </button>
      <span></span>
    </div>

  </div>
</div>

<div id="overlay-bd" class="overlay-bd">
<div class="t8s-alert-close" href="javascript:void(0)" onclick="two()"><i class="t8s-alert-i"></i></div>
<div class="t8s-content-box">
<div class="t8s-fruit-price">
<p class="column">您的婚纱照预算为</p>
<p class="jaojia">
<span id='setnumall'>4738</span>
<i>元</i></p></div>
<div class="t8s-price-list">
<ul><li class="clearfix"><span class="t8s-budget-span">场景费用：</span><span><em id='zaoxingprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">摄影师费用：</span><span><em id='sheyingprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">化妆造型：</span><span><em id='huazhuangprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">精修费用：</span><span><em id=jinxiuprice>0</em>元</span></li>

</ul></div><div class="holiday-text-t6s"><p>*报价有疑问？稍后有榜网将致电为您解答。</p><p>*报价为大数据报价，实际以推荐商家为准。</p></div></div>
</div>
 <div id="fade" class="black_overlay"> 
  </div>
 <script>
   function one(){
    document.getElementById('overlay-bd').style.display='block';
    document.getElementById('fade').style.display='block'
   }
   function two(){
    document.getElementById('overlay-bd').style.display='none';
    document.getElementById('fade').style.display='none'
   }
   </script> 
<script type="text/javascript">
  var min = 3000, max = 20000;
  setInterval(displayNum,100);
  function displayNum(){
    var temp_min = min < 10 ? "00" : (min < 10 ? "0"+min : min);
    var temp_max = max < 100 ? "0"+max : max;
    document.getElementById("setnum").innerHTML = temp_min;
    min = min + 4356;
    if(min > max){
      min=0;
    }
  }

  $(function() {
    $(".star_calculator").click(function(){

      var city = $("select[name=city]").val();
      console.log(city);
      if(!city) {
        showMessage("请选择城市");
        return false ;
      } 
      var shangjia = $("select[name=shangjia]").val();
      console.log(shangjia);
      if(!shangjia){
        showMessage("请选择商家类型")
        return false ;
      }
      var zaoxing = $("select[name=zaoxing]").val()
      if(!zaoxing) {
        showMessage("请选择造型数量");
        return false ;
      }

      var sheying = $("select[name=sheying]").val();
      if(!sheying) {
        showMessage("请选择摄影师");
        return false ;
      }
      
      var huazhuang = $("select[name=huazhuang]").val()
      if(!huazhuang) {
        showMessage("请选择化妆师");
        return false ;
      }

      var count = $("select[name=count]").val();
      if(!count) {
        showMessage("请选择精修数量");
        return false ;
      }

      var mobile = $("input[name=phone]").val();
      if(!mobile) {
        showMessage("请填写手机号码");
      }

      $.post(
        "/get/sheyingprice", 
        "city="+city+"&shangjia=" + shangjia+ "&zaoxing="+zaoxing+"&sheying="+
        sheying+"&huazhuang="+huazhuang+"&count="+count+"&mobile="+mobile, 
        function (res, status, xhr) {
            console.log(res);
            $("#zaoxingprice").html(res.zaoxingprice);
            $("#sheyingprice").html(res.sheyingprice);
            $("#huazhuangprice").html(res.huazhuangprice);
            $("#jinxiuprice").html(res.cpprice);
            $("#setnumall").html(res.allprice);
        }, 
        'json'
      );
    
    })
    
    function showMessage(message){
        alert(message);
    }
});

</script>
                    <?php } else { ?>
                
<script type="text/javascript">
   
    function showaa(obj)
    {
      //var obj_parent=obj.parentNode;
      var obj_parent=obj.parentElement
     
      if(obj_parent.className=="bottom_slide_box aa_show")
      {
        obj_parent.className="bottom_slide_box aa_hide";
      }
      else
      {
        obj_parent.className="bottom_slide_box aa_show";
      }
    }
    
  </script>


<div id="12" class="bottom_slide_box aa_hide">
  <div onclick="showaa(this)" class="click_are"></div>
 <div class="click_img"><span class="money">办一场婚礼多少钱？</span><span class="suansuan">98%的新人选择，提前算一算</span></div>
  <!-- <div class="go_shake_img"></div> -->
  <div class="calculator_box">
    <div class="select_b">
      <h2><span>今天已有 <em>940</em> 位新人获取了婚礼预算</span></h2>
        <div class="num-frame">
                <div class="yuan"><p>元</p></div>
                <div class="num-window clearfix clear">
        <em id="setnum">?</em>
                </div>
            </div>

            <div class="form_line">
          <div class="element triangle">
                <select name="city"  id="xuqiu" class="first_line">
                  <option value="<?php echo $city;?>">--<?php echo $city;?>--</option>

                  <option value="北京">北京</option>
                  <option value="天津">天津</option>
                  <option value="沈阳">沈阳</option>
                   <option value="大连">大连</option>
                  <option value="哈尔滨">哈尔滨</option>
                  <option value="石家庄">石家庄</option>

                      <option value="上海">上海</option>
                     <option value="杭州">杭州</option>
                      <option value="厦门">厦门</option>
                    <option value="南京">南京</option>
                <option value="苏州">苏州</option>
                      <option value="无锡">无锡</option>
                 <option value="宁波">宁波</option>
                    <option value="福州">福州</option>
                  <option value="青岛">青岛</option>
                    <option value="合肥">合肥</option>

                    <option value="成都">成都</option>
                    <option value="重庆">重庆</option>
                     <option value="长沙">长沙</option>
                    <option value="郑州">郑州</option>
                     <option value="西安">西安</option>
                    <option value="武汉">武汉</option>
                  <option value="总监级">广州</option>
                  <option value="资深级">深圳</option>
              </select>
          </div>
      </div>
      <div class="form_line">
          <div class="element triangle">
                  <select name="hotel" id="xuqiu" class="first_line">
                  <option value="">--请选择酒店价位--</option>
                  <option data-value="1500" value="1000-2000">1000-2000</option>
                  <option data-value="2500" value="2000-3000">2000-3000</option>
                  <option data-value="3500" value="3000-4000">3000-4000</option>
                  <option data-value="5000" value="4000以上">4000以上</option>
              </select>
          </div>
      </div>
            <div class="form_line" id="zxys_phoneInput">
          <div class="element">
              <div class="text_wrap">
                  <input id="shuoshu" placeholder="您的预期桌数" type="text" class="text phonetext" name="zhuoshu">
                  <em class="text_lbl"></em>
              </div>
          </div>
      </div>
      <div class="form_line">
          <div class="element">
              <div class="text_wrap">
                   <select name="xuqiu" id="xuqiu" class="first_line">
                  <option value="">--请选择婚礼档次--</option>
                  <option value="经济型">经济型</option>
                  <option value="中端消费">中端消费</option>
                  <option value="高端消费">高端消费</option>
              </select>
              </div>
          </div>
      </div>
      <div class="form_line" id="zxys_phoneInput">
          <div class="element">
              <div class="text_wrap">
                  <input id="phonenumber" placeholder="输入您的手机" type="text" class="text phonetext" name="phone">
                  <em class="text_lbl"></em>
              </div>
          </div>
      </div>
          <div class="shuom">
          预算结果根据用户真实消费大数据分析计算得出。
          </div>
    </div>
    <div class="result_b">
      <button  href="javascript:void(0)" onclick="one()" class="star_calculator ">
        开始计算
      </button>
      <span></span>
    </div>

  </div>
</div>




<div id="overlay-bd" class="overlay-bd">
<div class="t8s-alert-close" href="javascript:void(0)" onclick="two()"><i class="t8s-alert-i"></i></div>
<div class="t8s-content-box">
<div class="t8s-fruit-price">
<p class="column">您的婚礼预算为</p>
<p class="jaojia">
<span id='setnumall'>0</span>
<i>元</i></p></div>
<div class="t8s-price-list">
<ul><li class="clearfix"><span class="t8s-budget-span">酒店费用：</span><span><em id='hotelprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">婚庆公司费用：</span><span><em id="wedprice">0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">车队费用：</span><span><em id='carprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">婚纱礼服费用：</span><span ><em id='lifuprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">喜品喜酒费用：</span><span><em id='wineprice'>0</em>元</span></li>

</ul></div><div class="holiday-text-t6s"><p>*报价有疑问？稍后有榜网将致电为您解答。</p><p>*报价为大数据报价，实际以推荐商家为准。</p></div></div>
</div>
 <div id="fade" class="black_overlay"> 
  </div>
 <script>
   function one(){
    document.getElementById('overlay-bd').style.display='block';
    document.getElementById('fade').style.display='block'
   }
   function two(){
    document.getElementById('overlay-bd').style.display='none';
    document.getElementById('fade').style.display='none'
   }
   </script> 

<script type="text/javascript">
  var min = 10000, max = 93000;
  setInterval(displayNum,100);
  function displayNum(){
    var temp_min = min < 10 ? "00" : (min < 10 ? "0"+min : min);
    var temp_max = max < 100 ? "0"+max : max;
    document.getElementById("setnum").innerHTML = temp_min;
    min = min + 4356;
    if(min > max){
      min=0;
    }
  }
$(function() {
    $(".star_calculator").click(function(){

      var city = $("select[name=city]").val();
      console.log(city);
      if(!city) {
        showMessage("请选择城市");
        return false ;
      } 
      var hotel = $("select[name=hotel]").val();
      console.log(hotel);
      if(!hotel){
        showMessage("请选择酒店价位")
        return false ;
      }
      var zhuoshu = $("input[name=zhuoshu]").val()
      if(!zhuoshu) {
        showMessage("请填写预期桌数数量");
        return false ;
      }

      var xuqiu = $("select[name=xuqiu]").val();
      if(!xuqiu) {
        showMessage("请选择婚礼需求");
        return false ;
      }
      
      var mobile = $("input[name=phone]").val();
      if(!mobile) {
        showMessage("请填写手机号码");
      }

      $.post(
        "/get/hunliprice", 
        "city="+city+"&hotel=" + hotel+ "&zhuoshu="+zhuoshu+"&xuqiu="+
        xuqiu+"&mobile="+mobile, 
        function (res, status, xhr) {
            console.log(res);
            $("#hotelprice").html(res.hotelprice);
            $("#wedprice").html(res.wedprice);
            $("#lifuprice").html(res.lifuprice);
            $("#carprice").html(res.carprice);
            $("#wineprice").html(res.wineprice);
            $("#setnumall").html(res.allprice);
        }, 
        'json'
      );
    
    })
    
    function showMessage(message){
        alert(message);
    }
});

</script>

                    <?php } ?>


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
</script>

</body>
</html>
