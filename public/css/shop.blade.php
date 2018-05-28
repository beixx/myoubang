<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="<?php echo $keyword;?>">
    <meta name="description" content="<?php echo $desc;?>">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/more.js"></script>
        <script type="text/javascript" src="/js/index.js"></script>
            <script type="text/javascript" src="/js/data.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/foot.js?2"></script>
    <style type="text/css">body{background:#f0f0f0}</style>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1211ad93505007e7eb6df7f6f05c4e8d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
window.onload=function(){  
var unfoldField=document.querySelector(".unfold-field");  
var wrapH=document.querySelector(".mtrem6").offsetHeight;  
var wrap=document.querySelector(".mtrem6");  
var contentH=document.querySelector(".zhanshi").offsetHeight;  
// 如果实际高度大于我们设置的默认高度就把超出的部分隐藏。  
if(contentH>wrapH){  
   unfoldField.style.display="block";  
}  
wrap.style.visibility="visible";  
unfoldField.onclick=function(){  
   this.parentNode.removeChild(this);  
   wrap.style.maxHeight="100%";  
   wrap.style.visible="visible";  
}  
  
} 
</script>
</head>
<body class="shop-index">
<header>
<div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
<div class="logo"><a href="/<?php echo $pycity;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><img width="3.46rem" height="1.4rem" src="/images/logo.png"></a></div>
<a class="zxdh" href="tel:18500905723"></a>
</header>
<div class="focus_box">
<div id="focus" class="focus" style="height: auto;">
        <div class="bd">
            <ul>
            <?php if(strlen($tenants['vrimage'])>10) { ?>
                <a target="_blank" href="<?php echo $tenants['vrurl']?>">
                <li class="suolvvr">
                    <div class="m-title">720度VR全景看店</div>
                    <div class="bg1"></div>
                    <div class="m-kan"></div>
                    <span><img src="<?php echo $tenants['vrimage'];?>"/>
                    </span>
                </li>
                </a>
                <?php } else { ?>
                <li class="suolvd"><span>
                        <?php if(strpos($tenants['cover'],'http') === false) {?>
                            <img src="//img2.youbangkeyi.cn<?php echo $tenants['cover'];?>?<?php echo  $ismobile?"imageView2/1/w/800/h/600/q/75":'';?>|imageslim"/>
                        <?php } else {?>
                            <img src="<?php echo $tenants['cover'];?>?imageView2/1/w/800/h/600/q/75|imageslim"/>
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
<div class="sjkap">
    <div class="txt_info">
        <h1><?php echo $city;?><?php echo $tenants['name'];?></h1>
        <p><span>人均消费:¥<?php echo $tenants['person_price'];?></span><span>|</span><span>有<?php echo $tenantssort['allcy']?>人在此店消费过</span></p>
        <div class="pf txtCtr"><a href="/dafen/<?php echo $pycity.'/'.$tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><em></em>打榜</a></div>
    </div>
    <div class="zysm">排名权威有保障，由有榜网对商家全网大数据分析得出！</div>
    <div class="datas">
		        <span class="lft txtCtr c1">
		            <em>第<i class="fa"><?php echo $tenants['order_city'];?></i>名</em>
		        	<p>综合榜</p>
		        </span><div class="border-right-e7e7e7"></div>
		        <span class="lft txtCtr c2">
		            <em>第<i class="fa"><?php echo $tenants['brand_search_order'];?></i>名</em>
		            <p>品牌榜</p>
		        </span><div class="border-right-e7e7e7"></div>
		        <span class="lft txtCtr c3">
		            <em>第<i class="fa"><?php echo $tenants['praise_order'];?></i>名</em>
		        	<p>好评榜</p>
		        </span>
</div>
    <div class="address"><a target="_blank" href="https://map.baidu.com/mobile/webapp/search/search/qt=s&wd=<?php echo $city;?><?php echo $tenants['name'];?>&&vt=map&universalLinkCbkTag=1"><?php echo $tenants['address'];?><em></em></a></div>
</div></div>
    <?php if($tenants['isVip'] == 2) { ?>
<?php if(isset($tenantinfo->isVip) && $tenantinfo->isVip==2){
    if(isset($advinfo->id)){
        ?>
 
    <?php }}else{
    if(isset($advinfo->id)){
        ?><style type="text/css">.youhui{border-bottom: 1px dashed #eee;}</style>
            <a target="_blank" href="http://720yun.com/t/85gxrjw96wsdnrnjh4?from=singlemessage&amp;isappinstalled=0&amp;pano_id=vJ3sRb56KUhzVBJC">
                <li class="suolvvr">
<div class="m-title">
    <p>720度  VR全景看店</p>
        北京蒙娜丽莎婚纱摄影(总店)</div>
<div class="bg1"></div>
<div class="m-kan"></div>
                <span>
                        <?php if(strpos($tenants['cover'],'http') === false) {?>
                            <?php echo $advinfo->content;?>
                        <?php } else {?>
                            <img src="<?php echo $tenants['cover'];?>?imageView2/1/w/800/h/600/q/75|imageslim"/>
                        <?php } ?>
                    </span></li></a>
    <?php }} ?>    
<?php }else { ?>

    <?php } ?>
<div class="info-box"><div class="titleqs"><i>有榜网预约到店专享</i><span class="fa">86人已预约到店</span></div>
<div class="daodianli down" href="javascript:">
                <div class="daodiant">
                    <span class="coupon-tag"></span>
                    <h3><?php echo $tenants['package']?$tenants['package']:'免费赠送超值结婚大礼包';?></h3>
                    <div class="btm-line">
                        仅限预约到店使用
                        <span class="sm-text"><?php echo $tenants['count1'];?>人感兴趣</span>
                    </div>
                </div>
                <div class="to-get-btn down liwuclick" href="javascript:">领取</div>
            </div>
<div class="yuyue yyvip down" href="javascript:">到店享受VIP客户待遇，店员一对一服务</div>
<div class="yuyue yydq down" href="javascript:">根据您的需求，可优先安排拍摄档期</div><div class="yuyue yyxy down" href="javascript:">线上预约或获取客片报价，商家3分钟内快速响应</div></div>
<div class="info-box mtrem6">
<div class="zhanshi">
    <div class="data">
        <div class="titleqs"><i>全网大数据</i><span class="fa">更新时间：<?php echo date("Y年m月d日");?></span></div>
        <div id="shuju" style="width:100%;height:14rem;"></div>
        <div class="table">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr style="background: #f9f9f9">
                    <th>&nbsp;</th>
                    <th align="center">品牌搜索指数</th>
                    <th align="center">全网好评数</th>
                    <th align="center">全网差评数</th>
                </tr>
                <tr>
                    <th align="right">近7日</th>
                    <td align="center"><span><?php echo $tenantssort['day7s']?>次</span></td>
                    <td align="center" valign="middle"><span><?php echo $tenantssort['day7cy']?>条</span></td>
                    <td align="center"><span><?php echo $tenantssort['day7ce']?>条</span></td>
                </tr>
                <tr style="background: #f9f9f9">
                    <th align="right">近30日</th>
                    <td align="center"><span><?php echo $tenantssort['day30s']?>次</span></td>
                    <td align="center"><span><?php echo $tenantssort['day30cy']?>条</span></td>
                    <td align="center"><span><?php echo $tenantssort['day30ce']?>条</span></td>
                </tr>
                <tr>
                    <th align="right">总体</th>
                    <td align="center"><span><?php echo $tenantssort['alls']?>次</span></td>
                    <td align="center"><span><?php echo $tenantssort['allcy']?>条</span></td>
                    <td align="center"><span><?php echo $tenantssort['allce']?>条</span></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="data-chart">
        <div class="TxtBox">
            <div class="tit hd">
                <ul>
                    <li><a href="javascript:" class="txtCtr lft b1"><em class="icon1"></em>品牌搜索</a></li>
                    <li><a href="javascript:" class="txtCtr lft b2"><em class="icon2"></em>全网评论</a></li>
                </ul>

            </div>
            <div class="bd">
                <div class="chart">
                    <div id="dbmain" style="width:100%;height:12rem;"></div>
                </div>
                <div class="chart">
                    <div id="dbmain2" style="width:100%;height:12rem;"></div>
                </div>
            </div>
        </div>
    </div> 

        <div class="data pbbb">
         <div id="fengge" style="width:100%;height:12rem;"></div>
         <div class="shushuo">
            <span>擅长拍摄风格<em>(通过大数据进行标签提取)</em></span>
             <?php foreach($style as $k=>$v) { ?>
                    <p>“<?php echo $v['name'];?>”被提及<?php echo $v['count'];?>次，在北京排名第<?php echo $v['order_index'];?>位</p>
             <?php } ?>
</div>
    </div>
    </div>
                    <script type="text/javascript">jQuery(".zhanshi").slide({trigger:"click"});</script>
        <div class="unfold-field">  
        <div class="unflod-field_mask"></div>  
        <div class="unfold-field_text"><span>查看详细数据、商家擅长风格</span></div>  
         </div> 
</div>
<?php if($countpics >0 ) { ?>
<div class="case_box">
    <div id="picScroll" class="picScroll txtCtr">
        <div class="bd">
            <ul>
                <?php foreach($tenantspics as $k => $v){?>
                <li>
        <div class="anli_touxiang"><img src="//img2.youbangkeyi.cn<?php echo $tenants['cover'];?>?imageView2/1/w/300/h/300/q/75|imageslim"></div>
            <p><?php echo $v['picName']?></p>
            <span class="anli_month"><em class="fl">发布于5月05日 13:44</em><em class="fr">浏览<?php echo $v['showcount'];?>次</em></span>
            <?php if(strlen($v['explain'])>5) { ?>
           <div class="anli_p"><?php echo $v['explain'];?></div>
           <?php } ?>
                    <a class="suolvk" href="/kpdetail/<?php echo $v['id']?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                        <span class="img">
                        <?php for($i = 0 ; $i<9 ; $i++) { if(empty($v['cover'][$i])) break; ?>
                            <?php if(strpos($v['cover'][$i],'http') === false) {?>
                            <a class="yulan glightbox" href="//img2.youbangkeyi.cn<?php echo $v['cover'][$i];?>">
                          <img src="//img2.youbangkeyi.cn<?php echo $v['cover'][$i];?>?<?php echo  $ismobile?"imageView2/1/w/250/h/250/q/75":'imageView2/1/w/500/h/500/q/75';?>|imageslim"/></a>
                            <?php } else {?>
                            <img src="<?php echo $v['cover'][$i];?>?imageView2/1/w/800/h/600/q/75|imageslim"/>
                            <?php } ?>


                        <?php } ?>
                        </span>
                    </a>
                <div href="javascript:" class="anlibj down anliclick">获取该案例报价</div>
                </li>
                <?php } ?>
            </ul>        </div>
    </div>
	<div class="ckaqb"><a href="/kplist/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">查看全部<span class="fa"><?php echo $countpics;?></span>个案例</a></div>
</div>
<link rel="stylesheet" href="http://yanshi.sucaihuo.com/jquery/34/3486/demo/dist/css/glightbox.css">

<script src="http://yanshi.sucaihuo.com/jquery/34/3486/demo/dist/js/glightbox.min.js"></script>
  <script>
    var lightbox = GLightbox();
  </script>
<?php } ?>

<?php if($countsets >0 ) { ?>
<div class="jxtc_box">
    <div class="title">精选套餐<a href="/txlist/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">全部<span class="fa"><?php echo $countsets;?></span>个套系 ></a></div>
    <ul>
        <?php foreach($tenantssets as $k => $v) { ?>
        <li>
            <a href="/detail/<?php echo $tenants['id'].'/'.$v['id']?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
            <div class="suolvt">
                <span>
                    <?php if(strpos($v['cover'][0],'http') === false) {?>
                    <img src="//img2.youbangkeyi.cn<?php echo $v['cover'][0];?>?imageView2/1/w/750/h/396/q/75|imageslim" />
                    <?php } else {?>
                    <img src="<?php echo $v['cover'][0];?>?imageView2/1/w/800/h/600/q/75|imageslim"/>
                    <?php } ?>
                </span></div>
                <div class="txt">
                    <h3><?php echo $v['setName'];?></h3>
                    <div class="price fa">
                        <span class="red">¥<?php echo $v['currentPrice']?></span>
                        <del>原价:¥<?php echo $v['price'];?></del>
                    </div>
                </div>
            </a>
        <div href="javascript:" class="anlibj down dangqiclick">咨询档期</div>
        </li>
        <?php } ?>
    </ul>
    <div class="ckqb"><a href="/txlist/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">查看全部<span class="fa"><?php echo $countsets;?></span>个精选套系</a></div>
</div>
<?php } ?>
<div class="info-box">
    <div class="data">
        <div class="titleqs"><i>用户点评标签</i><span class="fa">以下标签为大数据分析所得</span></div>
        <div id="biaoqian" style="width:100%;height:14rem;"></div>

</div></div>
<div class="comment_list">
            <div class="title dafen1">今日点评精选</a><span class="fa">更新时间：<?php echo Date("Y-m-d")?></span></div>
            <div class="comment_column">
                <?php if(!empty($usercomment['content'])) { ?>
                    <div class="cmt_con cmt_R">
                            <span class="comment_W"><?php echo $usercomment['content'];?></span>
                      <span class="f12p">—「摘自第三方平台」<?php echo $usercomment['nick_name'];?></span>
                </div>
                <?php } ?>
</div>
            </div>

<div class="view shop-tuijian">
    <div class="tit">猜你喜欢的商家</div>
    <div class="hot">
        <ul>
            <?php foreach($recommenttenants as $k =>$v) { ?>
            <li>
                <a class="suolvl" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                   <span>
                       <img src="http://img2.youbangkeyi.cn<?php echo $v['cover'];?>?imageView2/1/w/400/h/300/q/75|imageslim">
                   </span>  </a><p><?php echo $v['name'];?></p>
                    <div class="price">
                        <span class="red">TOP<?php echo $v['order_city'];?></span>
                        <del>竞争指数：<?php echo $v['heat_index'];?></del>
                    </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="unit-footer"><div class="peace-live"><p class="txt-cont">大数据实时分析 | 排名权威有保障</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">商家编号:<?php echo $tenants['id'];?></span></div></div>
<footer class="txtCtr">
    @include("front.hotTenants")
    <div class="foot">
        <div class="foots">
            <span><a href="/about.html">关于有榜</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html" target="_blank">服务说明</a>|<a target="_blank" href="//c.youbangkeyi.cn/images/yingyezhizhao.jpeg">营业执照</a></span>
            京ICP备17036862号-1 北京有榜信息科技有限公司
            <span class="gongan">京公网安备 11010802024698号</span>
        </div>
        <div class="lian"><a rel="nofollow" target="_blank" href="http://www.saic.gov.cn/scs/index.html"><img alt="国家工商行政管理总局" src="//c.youbangkeyi.cn/images/scs_logo.png"></a></div>
    </div>
</footer>
<div class="bgDiv"></div>
<div class="downNav bt00">
    <div class="ask">
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="number" name="mobile" id="mobile" class="input" placeholder="请输入手机号，(<?php echo $tenants['count1'];?>人已预约)">
        <input type="submit" name="wapsubmit" class="btn shopclick" value="预约看店·3分钟响应">
    </div>

</div>
<!-- 城市弹出 -->
<style type="text/css">
    .layui-layer-title{border-radius: 0.3rem 0.3rem 0 0;padding: 0;margin-top: 0rem;text-align: center;}
    .layui-layer{border-radius: 0.3rem;overflow: hidden;}
    .layui-layer-ico{background: url(/js/layer/skin/default/close.png);background-size: 2.75rem;width: 2.75rem;height: 1.45rem}
    .layui-layer-setwin a{margin-left: 0;}
    .layui-layer-setwin{right: 8px;top: 8px}
    .f075{font-size:.75rem;}
</style>
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
<script type="text/javascript" src="https://cdn.bootcss.com/echarts/3.7.1/echarts.common.min.js"></script>
<script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/echarts-wordcloud.min.js"></script>
<script type="text/javascript">
    var myChart = document.getElementById('shuju');
    //自适应宽高
    var myChartContainer = function () {
        myChart.style.width = 100%'px';
        myChart.style.height = 100%'px'
    };
    myChartContainer();
    var myChart = echarts.init(myChart);

 var colorList = [
     '#59c5a7', '#51b8fe', '#fa827d'
 ];
 
 // 总和
 var total = {
     name: '竞争指数',
     value: '<?php echo $tenants['heat_index'];?>'
 }

 var originalData = [{
     value: <?php echo $tenantssort['allcy']?>,
     name: '<?php echo $tenantssort['allcy']?>人\n表示很满意'
 }, {
     value: <?php echo $tenantssort['allce']?>,
     name: '<?php echo $tenantssort['allce']?>人\n表示很糟糕'
 }, {
     value: <?php echo $tenantssort['alls']?>,
     name: "<?php echo $tenantssort['alls']?>人/日\n搜索过该品牌"
 }];

 echarts.util.each(originalData, function(item, index) {
     item.itemStyle = {
         normal: {
             color: colorList[index]
         }
     };
 });

 option = {
     title: [{
            text: total.name,
            left: '49%',
            top: '54%',
            textAlign: 'center',
            textBaseline: 'middle',
            textStyle: {
                color: '#aaafb8',
                fontWeight: 'normal',
                fontSize: 12
            }
        }, {
            text: total.value,
            left: '49%',
            top: '46%',
            textAlign: 'center',
            textBaseline: 'middle',
            textStyle: {
                color: '#596471',
                fontWeight: 'normal',
                fontSize: 28
            }
        }],
     series: [{
         hoverAnimation: false, //设置饼图默认的展开样式
         radius: [50,80],
         name: 'pie',
         type: 'pie',
         selectedMode: 'single',
         selectedOffset: 16, //选中是扇区偏移量
         clockwise: true,
         startAngle: 80,
         label: {
             normal: {
                 textStyle: {
                     fontSize: 12,
                     color: '#aaafb8'
                 }
             }
         },
         labelLine: {
             normal: {
                 lineStyle: {
                     color: '#aaafb8',

                 }
             }
         },
         data: originalData
     }]
 };
 myChart.setOption(option, true);

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

    //浏览器大小改变时重置大小
    window.onresize = function () {
        myChartContainer();
        myChart.resize();
    };

    var myChart = document.getElementById('fengge');
    //自适应宽高
    var myChartContainer = function () {
        myChart.style.width = 100%'px';
        myChart.style.height = 100%'px'
    };
    myChartContainer();
    var myChart = echarts.init(myChart);


option = {
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    series: [
        {
            name:'访问来源',
            type:'pie',
            selectedMode: 'single',
            radius: [0, '30%'],

            label: {
                normal: {
                    position: 'inner'
                }
            },
            labelLine: {
                normal: {
                    show: false
                }
            }
        },
        {
            name:'标签提起次数',
            type:'pie',
            radius: ['35%', '55%'],
            data:[
                    <?php $sum = 0; foreach($style as $v) {$sum += $v['count'];}?>
                    <?php foreach($style as $k=>$v) { ?>
                        {value:<?php echo $v['count'];?>, name:'<?php echo $v['name'];?> <?php echo intval($v['count']*100/$sum);?>%'},
                    <?php } ?>
            ]
        }
    ]
};
    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

    //浏览器大小改变时重置大小
    window.onresize = function () {
        myChartContainer();
        myChart.resize();
    };



    var myChart = document.getElementById('dbmain2');
    //自适应宽高
    var myChartContainer = function () {
        myChart.style.width = 100%'px';
        myChart.style.height = 80%'px'
    };
    myChartContainer();
    var myChart = echarts.init(myChart);

    option = {
        grid : {
            x :25,    //距离容器上边界40像素
            x2:25,
            y:30,
        },
        tooltip : {
            trigger: 'axis',
            padding: 15,    // [5, 10, 15, 20]
        },
        legend: {
            data:['全网好评', '全网差评']
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                splitLine:{show: true,lineStyle:{
                    color: ['#F0F0F0'],
                    width: 1,
                    type: 'solid'
                }},
                axisLabel : {
                    textStyle: {
                        color: '#BBBBBB',
                        fontFamily: 'verdana',
                        fontSize: 10,
                        fontStyle: 'normal',
                    }  },
                splitArea : {show : false},
                data : [
                    <?php if(isset($tenantssortviewcomment) && count($tenantssortviewcomment)){
                    $len=count($tenantssortviewcomment)-1;foreach($tenantssortviewcomment as $key=>$v){
                        if($len!=$key){
                            echo '\''.substr(str_replace('-','/',$v['date']),5,strlen($v['date'])).'\',';
                        }else{
                            echo '\''.substr(str_replace('-','/',$v['date']),5,strlen($v['date'])).'\'';
                        }
                    }
                }?>
                ]
            }
        ],
        yAxis : [
            {
                splitArea : {show : false},
                axisLine : {show: true,lineStyle:{
                    color: ['#B1B1B1'],
                    width: 1,
                    type: 'solid'
                }},
                splitLine:{show: true,lineStyle:{
                    color: ['#f0f0f0'],
                    width: 1,
                    type: 'solid'
                }},
                axisLabel : {
                    margin: -20,
                    textStyle: {
                        color: '#BBBBBB',
                        fontFamily: 'verdana',
                        fontSize: 10,
                        fontStyle: 'normal',
                    }  },
                type : 'value'
            }
        ],
        series : [
            {
                name:'全网好评',
                type:'line',
                symbol: "none",
                smooth:true,
                areaStyle: { normal: { color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{ offset: 0, color: 'rgba(216, 244, 247,1)' }, { offset: 1, color: 'rgba(216, 244, 247,0.1)' }], false) } }, itemStyle: { normal: { color: '#58c8da' } },
                data:[<?php if(isset($tenantssortviewcomment) && count($tenantssortviewcomment)){
                    $len=count($tenantssortviewcomment)-1;foreach($tenantssortviewcomment as $key=>$v){
                        if($len!=$key){
                            echo $v['commpsu'].',';
                        }else{
                            echo $v['commpsu'];
                        }
                    }
                }?>]
            },
            {
                name:'全网差评',
                type:'line',
                symbol: "none",
                smooth:true,
                areaStyle: { normal: { color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{ offset: 0, color: 'rgba(199, 237, 250,0.5)' }, { offset: 1, color: 'rgba(199, 237, 250,0.2)' }], false) } }, itemStyle: { normal: { color: '#f7b851' } }, lineStyle: { normal: { width: 3 } },
                data:[<?php if(isset($tenantssortviewcomment) && count($tenantssortviewcomment)){
                    $len=count($tenantssortviewcomment)-1;foreach($tenantssortviewcomment as $key=>$v){
                        if($len!=$key){
                            echo $v['commperr'].',';
                        }else{
                            echo $v['commperr'];
                        }
                    }
                }?>]
            }
        ]
    };


    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

    //浏览器大小改变时重置大小
    window.onresize = function () {
        myChartContainer();
        myChart.resize();
    };



    var myChart = document.getElementById('dbmain');//自适应宽高
    var myChartContainer = function () {
        myChart.style.width = 100%'px';
        myChart.style.height = 80%'px';
    };
    myChartContainer();
    var myChart = echarts.init(myChart);

    option = {
        grid : {
            x :25,    //距离容器上边界40像素
            x2:25,
            y:30,
        },
        tooltip : {
            trigger: 'axis',
            padding: 15,    // [5, 10, 15, 20]
        },
        legend: {
            data:['全网PC搜索', '全网移动搜索']
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                splitLine:{show: true,lineStyle:{
                    color: ['#f0f0f0'],
                    width: 1,
                    type: 'solid'
                }},
            axisLabel : {
                    textStyle: {
                        color: '#BBBBBB',
                        fontFamily: 'verdana',
                        fontSize: 10,
                        fontStyle: 'normal',
                    }  },
                splitArea : {show : false},
                data : [
                    <?php if(isset($tenantssortview) && count($tenantssortview)){
                    $len=count($tenantssortview)-1;
                    foreach($tenantssortview as $key=>$v){
                        if($len!=$key){
                            echo '\''.substr(str_replace('-','/',$v['date']),5,strlen($v['date'])).'\',';
                        }else{
                            echo '\''.substr(str_replace('-','/',$v['date']),5,strlen($v['date'])).'\'';
                        }
                    }
                }?>
                ]
            }
        ],
        yAxis : [
            {
                splitArea : {show : false},
                axisLine : {show: false,lineStyle:{
                    color: ['#B1B1B1'],
                    width: 1,
                    type: 'solid'
                }},
                splitLine:{show: true,lineStyle:{
                    color: ['#f0f0f0'],
                    width: 1,
                    type: 'solid'
                }},
                axisLabel : {
                    margin: -20,
                    textStyle: {
                        color: '#BBBBBB',
                        fontFamily: 'verdana',
                        fontSize: 10,
                        fontStyle: 'normal',
                    }  },
                type : 'value'
            }
        ],
        series : [
            {
                name:'全网移动搜索',
                type:'line',
                smooth:true,
                symbol: "none",
                areaStyle: { normal: { color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{ offset: 0, color: 'rgba(216, 244, 247,1)' }, { offset: 1, color: 'rgba(216, 244, 247,0.1)' }], false) } }, itemStyle: { normal: { color: '#58c8da' } },
                data:[<?php if(isset($tenantssortview) && count($tenantssortview)){
                    $len=count($tenantssortview)-1;foreach($tenantssortview as $key=>$v){
                        if($len!=$key){
                            echo $v['sortmo'].',';
                        }else{
                            echo $v['sortmo'];
                        }
                    }
                }?>]
            },
            {
                name:'全网PC搜索',
                type:'line',
                symbol: "none",
                smooth:true,
                areaStyle: { normal: { color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{ offset: 0, color: 'rgba(199, 237, 250,0.5)' }, { offset: 1, color: 'rgba(199, 237, 250,0.2)' }], false) } }, itemStyle: { normal: { color: '#f7b851' } }, lineStyle: { normal: { width: 3 } },
                data:[<?php if(isset($tenantssortview) && count($tenantssortview)){
                    $len=count($tenantssortview)-1;foreach($tenantssortview as $key=>$v){
                        if($len!=$key){
                            echo $v['sortpc'].',';
                        }else{
                            echo $v['sortpc'];
                        }
                    }
                }?>]
            }
        ]
    };


    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
    //浏览器大小改变时重置大小
    window.onresize = function () {
        myChartContainer();
        myChart.resize();
    };

    var myChart = document.getElementById('biaoqian');
    //自适应宽高
    var myChartContainer = function () {
        biaoqian.style.width = 100%'px';
        biaoqian.style.height = 100%'px'
    };
    myChartContainer();
    var myChart = echarts.init(myChart);
option = {
    tooltip: {
        show: true
    },

    series: [{
        type: 'wordCloud',
        size: ['80%', '80%'],
        textRotation : [0, 90, 90, -90],
        textPadding: 0,
        autoSize: {
            enable: true,
            minSize: 14
        },
        textStyle: {
            normal: {
                color: function() {
                    return 'rgb(' + [
                        Math.round(Math.random() * 160),
                        Math.round(Math.random() * 160),
                        Math.round(Math.random() * 160)
                    ].join(',') + ')';
                }
            }
        },
        data: [

            <?php
            $stylelong = file('./1.txt');
            $stylemap = [];
            foreach($stylelong as $k =>$v) {
                $s = explode(' ',trim($v));
                if(count($s)>1) {
                    $key = $s[0];
                    unset($s[0]);
                    $s = array_values($s);
                    $stylemap[$key] = $s[rand(0,count($s)-1)];
                }
            }
            ?>
                <?php if(is_array(json_decode($tenants['commitstyle'],true))) foreach(json_decode($tenants['commitstyle'],true) as $v ) { ?>
            {
                name: "<?php echo isset($stylemap[$v['name']])?$stylemap[$v['name']]:$v['name'];?>",
                value: <?php echo $v['count'];?>
            },
            <?php } ?>
        ]
    }]
};
    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

    //浏览器大小改变时重置大小
    window.onresize = function () {
        myChartContainer();
        myChart.resize();
    };

    $('input[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = 12;

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
                    <?php if($tenants['isVip'] ==2) { ?>
                        location.href="<?php echo $tenants['modeladvurl'];?>";
                    <?php } else {?>
                        location.reload();
                    <?php } ?>
                }
            }
        });
    });
    $(".anliclick").click(function(){
        $("input[name=wapsubmit]").val("获取报价·3分钟响应");
	$("#mobile").attr("placeholder","xxxxx");
    })
    $(".liwuclick").click(function(){
        $("input[name=wapsubmit]").val("领取优惠·3分钟响应");
    })
    $(".shopclick").click(function(){
        $("input[name=wapsubmit]").val("预约到店·3分钟响应");
    })
    $(".dangqiclick").click(function(){
        $("input[name=wapsubmit]").val("咨询档期·3分钟响应");
    })
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
