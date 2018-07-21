<!DOCTYPE html><html lang="zh-cn"><head><meta charset="utf-8"><title><?php echo $title;?></title><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/><meta name="applicable-device" content="pc,mobile"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="Keywords" content="<?php echo $keyword;?>"><meta name="description" content="<?php echo $desc;?>"><link rel="stylesheet" href="/js/layer/wenda.css"><script type="text/javascript" src="//c.youbangkeyi.com/js/jquery.SuperSlide1-2.1.1.js"></script><script type="text/javascript" src="/js/TouchSlide.1.1.js"></script></head>
<body class="shop-index">
@include("front.tijiao")
<div class="main">
<header><div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?><em></em></div><div class="logo"><a href="/<?php echo $pycity;?>/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>排行榜</a></div><a class="zxdh" href="tel:18500905723"></a></header>
<div class="focus_box"><div id="focus" class="focus" style="height: auto;">
        <div class="bd"><ul><?php if(strlen($tenants['vrimage'])>10) { ?><a target="_blank" href="<?php echo $tenants['vrurl']?>"><li class="suolvvr"><div class="m-title">全景看店</div><div class="bg1"></div><div class="m-kan"></div><span><img src="<?php echo $tenants['vrimage'];?>"/></span></li></a><?php } else { ?>
        <li class="suolvvr"><span><?php if(strpos($tenants['cover'],'http') === false) {?><img src="//img2.youbangkeyi.com<?php echo $tenants['cover'];?>?<?php echo  $ismobile?"imageView2/1/w/800/h/600/q/75":'';?>|imageslim" alt="<?php echo $city;?><?php echo $tenants['name'];?>"/><?php } else {?><img src="<?php echo $tenants['cover'];?>?imageView2/1/w/800/h/600/q/75|imageslim" alt="<?php echo $city;?><?php echo $tenants['name'];?>"/><?php } ?></span></li><?php } ?></ul></div></div>
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
        <p><span>人均消费:¥<?php echo $tenants['price'];?></span><span>|</span><span>到店请提前预约</span></p>
        <div class="pf txtCtr"><a href="/dafen/<?php echo $pycity.'/'.$tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><em></em>打榜</a></div>
    </div>
    <?php if($tenants['order_city']==0||$tenants['order_city']>50
        || $tenants['brand_search_order']==0||$tenants['brand_search_order']>50
        || $tenants['praise_order']==0||$tenants['praise_order']>50
    ) { ?>
    <div class="queshuju">“-” 表示数据太少无法统计，但可正常预约商家！</div>
    <?php } ?>

    <div class="datas">
		        <span class="lft txtCtr c1">
		            <em>第<i class="fa">
                            <?php echo ($tenants['order_city']>0&&$tenants['order_city']<=50)?$tenants['order_city']:"-";?>
                        </i>名</em>
		        	<p>综合榜</p>
		        </span><div class="border-right-e7e7e7"></div>
		        <span class="lft txtCtr c2">
		            <em>第<i class="fa">
                            <?php echo ($tenants['brand_search_order']>0&&$tenants['brand_search_order']<=50)?$tenants['brand_search_order']:"-";?>
                        </i>名</em>
		            <p>品牌榜</p>
		        </span><div class="border-right-e7e7e7"></div>
		        <span class="lft txtCtr c3">
		            <em>第<i class="fa">
                            <?php echo ($tenants['praise_order']>0&&$tenants['praise_order']<=50)?$tenants['praise_order']:"-";?>
                        </i>名</em>
		        	<p>好评榜</p>
		        </span>
    </div>
<div class="zysmn"><span class="jiance"><em></em>全网数据监测</span><span class="shishi"><em></em>数据实时更新</span><span class="jiangbei"><em></em>排名客观权威</span></div>
<div class="info-box">
<div class="titleqs">
    <i>优惠信息</i>
    <span class="fa">预约领取优惠</span></div>
    <a id="dateShow" class="yuyue">
        <i></i>
        <span>
            <?php echo $tenants['package']?$tenants['package']:'是否有优惠？点击右侧咨询';?>
            <p>距离结束:<em class="date-tiem-span d">00</em>天
                <em class="date-tiem-span h">00</em>:
                <em class="date-tiem-span m">00</em>:
                <em class="date-s-span s">00</em></p>
        </span>
        <button class="discount-btn down liwuclick" href="javascript:"><?php echo $tenants['package']?"领取优惠":'优惠咨询';?></button>
    </a>
    <div class="address"><a target="_blank" href="https://map.baidu.com/mobile/webapp/search/search/qt=s&wd=<?php echo $city;?><?php echo $tenants['name'];?>&&vt=map&universalLinkCbkTag=1"><?php echo $tenants['address'];?><em></em></a></div></div>
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
<div class="info-box">
<div class="zhanshi">
    <div class="neirong">
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
            <div class="titleqs"><i>每日详细数据</i><span class="fa"><?php echo date("Y年m月d日");?></span></div>
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
        <div class="titleqs"><i>擅长数据分析</i><span class="fa">通过大数据进行标签提取</span></div>
         <div id="fengge" style="width:100%;height:12rem;"></div>
         <div class="shushuo">
            <span>擅长拍摄风格<em>(对商家案例、评论数据进行标签分析)</em></span>
             <?php foreach($style as $k=>$v) { ?>
                    <p>“<?php echo $v['name'];?>”被提及<?php echo $v['count'];?>次，在<?php echo $city;?>排名第<?php echo $v['order_index'];?>位</p>
             <?php } ?>
</div>
    </div>
    </div>
    </div>
    <div href="javascript:void(0);" class="unfold-field_text iconfont icon-unfold"><span>展开详细数据 · 商家擅长风格</span></div>
</div>
<?php if($countpics >0 ) { ?>
<div class="case_box">
    <div id="picScroll" class="picScroll txtCtr">
        <div class="bd">
            <ul><?php foreach($tenantspics as $k => $v){?><li><div class="anli_touxiang"><img src="//img2.youbangkeyi.com<?php echo $tenants['cover'];?>?imageView2/1/w/300/h/300/q/75|imageslim"></div>
            <p><a href="/kpdetail/<?php echo $v['id']?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $v['picName']?></a></p><span class="anli_month"><em class="fl">发布于<?php echo \App\Http\Helper\Date::xtime($v['created_at']);?></em><em class="fr">浏览<?php echo $v['showcount'];?>次</em></span><?php if($v['explain']) { ?>
                    <div class="anli_p"><?php echo $v['explain'];?></div><?php } ?><span class="img">
                        <?php for($i = 0 ; $i<9 ; $i++) { if(empty($v['cover'][$i])) break; ?>
                            <?php if(strpos($v['cover'][$i],'http') === false) {?>
                            <a class="yulan  glightbox<?php echo $k;?>" href="//img2.youbangkeyi.com<?php echo $v['cover'][$i];?>"><img src="//img2.youbangkeyi.com<?php echo $v['cover'][$i];?>?<?php echo  $ismobile?"imageView2/1/w/250/h/250/q/75":'imageView2/1/w/500/h/500/q/75';?>|imageslim" width="100%" height="100%" alt="<?php echo $v['picName']?>"/></a><?php } else {?><img src="<?php echo $v['cover'][$i];?>?imageView2/1/w/800/h/600/q/75|imageslim" alt="<?php echo $v['picName']?>"/>
                            <?php } ?><?php } ?>
                        <?php if($v['currentPrice']>0) {?>
                        <div class="txprice">该案例优惠价格：<em class="red">￥<?php echo $v['currentPrice'];?></em><em class="txyj">原价:￥<?php echo $v['price'];?></em></div><?php } ?>
                        </span>
                        <div href="javascript:" class="anlibj down <?php echo $v['currentPrice']>0?"dangqiclick":"anliclick";?>"><?php echo $v['currentPrice']>0?"咨询档期":"获取报价";?></div></li><?php } ?></ul></div></div>
	<div class="ckaqb"><a href="/kplist/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">查看其他<?php echo $countpics;?>套</a></div>
</div>
<?php } ?>
<div class="info-box info-yinxiang">
    <div class="data yinxiang">
        <div class="titleqs"><i>用户印象标签</i><span class="fa">以下标签为大数据分析所得</span></div>
        <ul class="mui-tagscloud-ul"><?php
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
            <?php if(is_array(json_decode($tenants['commitstyle'],true))) {

            $s = json_decode($tenants['commitstyle'],true) ; $p = [];
            foreach($s as $k => $v) { $p[$v["count"]] = $v;}
            krsort($p);
            foreach($p  as $v ) { if($v['name'] == '化妆师') continue;  ?><li><?php echo isset($stylemap[$v['name']])?$stylemap[$v['name']]:$v['name'];?>(<?php echo $v['count'];?>)</li><?php }} ?></ul></div>
    <div href="javascript:void(0);" class="unfold-field_text iconfont1 icon-unfold1"><span>展开更多用户印象</span></div>
</div>
<?php if(isset($ask['id'])) {?>
<div class="comment_list">
    <div class="title dafen1">猜你关心的话题<span class="fa"><a href="/wenda/<?php echo $ask['id'];?>">全部3个回答</a></span>
    </div>
    <div class="comment_column">
    <h3 class="wenda"><em></em><a href="/wenda/<?php echo $ask['id'];?>"><?php echo $ask['title'];?></a></h3>
        <?php if(!empty($anwser['content'])) { ?>
            <div class="cmt_con cmt_R">
                    <span class="comment_W"><?php echo $anwser['content'];?></span>
              <span class="f12p">—「以上内容真实消费者"<?php echo $anwser['name'];?>"阐述 」</span>
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>
<div id="tocvipGuide">
        <div class="toctitle">找不到合适的商家?</div>
        <div class="tocdesc">原价99元VIP大数据推荐，现0元免费申请推荐！</div>
        <a class="tocbtn down shenqingclick" href="javascript:">申请推荐</a>
    </div>
<div class="view shop-tuijian">
    <div class="tit">猜你喜欢的商家</div>
    <div class="hot">
        <ul>
            <?php foreach($recommenttenants as $k =>$v) { ?>
            <li>
                <a class="suolvl" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                   <span>
                       <img src="<?php echo strpos($v['cover'],"http")!==false ? '' : 'http://img2.youbangkeyi.com';?><?php echo $v['cover'];?>?imageView2/1/w/400/h/300/q/75|imageslim" alt="<?php echo $v['name'];?>">
                   </span>  </a><p><em class="red mr01">第<?php echo $v['order_city'];?>名</em><?php echo $v['name'];?></p>
                    <div class="price">
                        <del class="fl">人均:¥<?php echo $v['person_price'];?></del><del class="fr"><?php echo $v['area'];?></del>
                    </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="tittp">有榜数据说明</div>
<div id="fugai" class="time-box">
<div class="txtshuju lft"><em class="fgchs"></em><span class="blue">200+ </span>数据覆盖城市</div>
<div class="txtshuju lft"><em class="fgshh"></em><span class="blue">120,000+ </span>实时分析商户</div>
<div class="txtshuju lft"><em class="fgcaiji"></em><span class="blue">10 </span>数据采集渠道 </div>
<div class="txtshuju lft"><em class="fgweidu"></em><span class="blue">18 </span>数据统计维度</div>
<div class="txtshuju lft"><em class="fgxinren"></em><span class="blue">40,000 </span>对结婚新人</div>
<div class="txtshuju lft"><em class="fgpinglun"></em><span class="blue">2,000万+ </span>用户真实点评</div><div class="clear"></div> </div>
<div class="unit-footer"><div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">版权归:<?php echo $city;?><?php echo $tenants['name'];?>所有</span></div></div>
<footer class="txtCtr">
    @include("front.hotTenants")
    <div class="foot">
        <div class="foots">
            <span><a href="/about.html">关于有榜</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html" target="_blank">服务说明</a>|<a target="_blank" href="//c.youbangkeyi.com/images/yingyezhizhao.jpeg">营业执照</a></span>
            京ICP备18024234号-2 北京有榜信息科技有限公司
            <span class="gongan">京公网安备 11010802024698号</span>
        </div>
        <div class="lian">Copyright © 2018 有榜网</div>
    </div>
</footer>
</div>
@include("front.tijiaonew")
<!-- 城市弹出 -->
<div class="container">
</div>
<script type="text/javascript" src="/js/Time.glight.foot.js"></script>
<?php if($type=="sheying"){?>
<script type="text/javascript" src="/js/sheyingcity.js"></script>
<?php } else {?>
<script type="text/javascript" src="/js/hunlicity.js"></script>
<?php } ?>
<script type="text/javascript" src="/js/layer/layer.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/echarts/3.7.1/echarts.common.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".info-box").off('click').on('click','.icon-unfold', function () {
            $(".zhanshi").animate({height: $('.neirong').height()}, "slow");
            $(this).removeClass('icon-unfold icon-fold').addClass('icon-fold');
        }).on('click','.icon-fold', function () {
            $(".zhanshi").animate({height: '16rem'}, "normal");
            $(this).removeClass('icon-fold icon-unfold').addClass('icon-unfold');
        });
    })
    $(document).ready(function() {
        $(".info-yinxiang").off('click').on('click','.icon-unfold1', function () {
            $(".yinxiang").animate({height: $('.mui-tagscloud-ul').height()}, "slow");
            $(this).removeClass('icon-unfold1 icon-fold1').addClass('icon-fold1');
        }).on('click','.icon-fold1', function () {
            $(".yinxiang").animate({height: '17.5rem'}, "normal");
            $(this).removeClass('icon-fold1 icon-unfold1').addClass('icon-unfold1');
        });
    })
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
      <?php foreach($tenantspics as $k=>$v) {?>
        var lightbox = GLightbox({selector: 'glightbox<?php echo $k?>'});
      <?php } ?>
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
     name: '<?php echo $tenantssort['allce']?>人\n表示待提高'
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
         radius: [45,80],
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


    var myChart = document.getElementById('dbmain');//自适应宽高
    var myChartContainer = function () {
        myChart.style.width = 100%'px';
        myChart.style.height = 100%'px';
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



    var myChart = document.getElementById('dbmain2');
    //自适应宽高
    var myChartContainer = function () {
        myChart.style.width = 100%'px';
        myChart.style.height = 100%'px';
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
</script>

<script type="application/ld+json">
{
    "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
    "@id": "http://www.youbangkeyi.com/detail/<?php echo $tenants['id'];?>",
    "appid": "1605753876149174",
    "title": "{{$title}}",
    "images": [
        <?php $i = 0 ; if(isset($tenantspics[0])) { foreach($tenantspics[0]['cover'] as $v) { if($i ++ >2 ) break;?>
        "<?php echo $v;?>",
        <?php }} ?>

    ], //请在此处添加希望在搜索结果中展示图片的url，可以添加1个或3个url
    "pubDate": "<?php echo date("Y-m-d",$ask['created']).'T'.date("H:i:s",$ask['created'])?>" // 需按照yyyy-mm-ddThh:mm:ss格式编写时间，字母T不能省去
}
</script>
</body>
</html>
