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
    <script type="text/javascript" src="/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/js/more.js"></script>
    <script type="text/javascript" src="/js/foot.js"></script>
    <style type="text/css">body{background:#f0f0f0}</style>
</head>
<body class="shop-index">
<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">商户信息</div>
    <div class="share"></div>
</header>
<div class="focus_box">
    <?php if($tenants['isVip'] == 2) { ?>
        <div class="huiyuan"></div>
    <?php } ?>
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <li class="suolvd"><span><img src="//img2.youbangkeyi.com<?php echo $tenants['cover'];?>?imageView2/1/w/600/h/450/q/75|imageslim"/></span></li>
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
    <div class="txt_info">
        <h1><?php echo $city;?><?php echo $tenants['name'];?></h1>
        <p>人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></p>
        <div class="pf txtCtr"><a href="/dafen/<?php echo $pycity.'/'.$tenants['id'];?>"><em></em>打榜</a></div>
    </div>
    <div class="address"><?php echo $tenants['address'];?><em></em></div>
</div>
<div class="datas">
		        <span class="lft txtCtr c1">
		            <em>第<i class="fa blue"><?php echo $tenants['order_city'];?></i>名</em>
		        	<p>综合榜</p>
		        </span>
		        <span class="lft txtCtr c2">
		            <em>第<i class="fa blue"><?php echo $tenants['brand_search_order'];?></i>名</em>
		            <p>品牌榜</p>
		        </span>
		        <span class="lft txtCtr c3">
		            <em>第<i class="fa blue"><?php echo $tenants['praise_order'];?></i>名</em>
		        	<p>好评榜</p>
		        </span>
</div>


<div class="info-box">
    <div class="data">
        <div class="titleqs"><i>数据概况</i><span class="fa">更新时间：2017-10-24</span></div>
        <script type="text/javascript" src="/js/chart.meter.js"></script>
        <canvas id="meter" style=" width:13.5rem;margin-left:2.6rem"></canvas>
        <script type="text/javascript">
            window.onload = function(){
                Meter.setOptions({
                    element: 'meter',
                    centerPoint: {
                        x: 145,
                        y: 145
                    },
                    radius: 145,
                    data: {
                        value: <?php echo $tenants['heat_index'];?>,
                        title: '<?php echo $city;?>竞争力{t}',
                        subTitle: '评估时间：2017.10.23',
                        area: [{
                            min: 0, max: 70, text: '较弱'
                        },{
                            min: 70, max: 80, text: '一般'
                        },{
                            min: 80, max: 85, text: '强'
                        },{
                            min: 85, max: 90, text: '很强'
                        },{
                            min: 90, max: 100, text: '极强'
                        }]
                    }
                }).init();
            }
        </script>
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
</div>
<div class="info-box">
    <div class="data-chart">
        <div class="titleqs"><i>数据趋势</i><span class="fa">更新时间：2017-10-24</span></div>

        <div class="TxtBox">
            <div class="tit hd">
                <ul>
                    <li><a href="javascript:" class="txtCtr lft b1"><em class="icon1"></em>品牌搜索</a></li>
                    <li style="margin-left:1rem;"><a href="javascript:" class="txtCtr lft b2"><em class="icon2"></em>全网评论</a></li>
                </ul>

            </div>
            <div class="bd">
                <div class="chart">
                    <div id="dbmain" style="width:100%;height:15rem;"></div>
                </div>
                <div class="chart">
                    <div id="dbmain2" style="width:100%;height:15rem;"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">jQuery(".TxtBox").slide({trigger:"click"});</script>
    </div> </div>
<div class="case_box">


    <div class="title">客片欣赏<a href="/kplist/<?php echo $tenants['id'];?>">全部<span class="fa"><?php echo $countpics;?></span>个案例 ></a></div>

    <div id="picScroll" class="picScroll txtCtr">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php foreach($tenantspics as $k => $v){?>
                <li>
                    <a class="suolvk" href="/kpdetail/<?php echo $v['id']?>">
                        <span class="img">
                            <img src="//img2.youbangkeyi.com<?php echo $v['firstcover'][0];?>?imageView2/1/w/300/h/225/q/75|imageslim" />
                        </span>
                    </a>
                     <p><?php echo $v['picName']?></p>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        TouchSlide({
            slideCell:"#picScroll",
            titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            autoPage:true, //自动分页
            pnLoop:"false", // 前后按钮不循环
            switchLoad:"_src" //切换加载，真实图片路径为"_src"
        });
    </script>
</div>

<div class="jxtc_box">
    <div class="title">精选套餐<a href="/txlist/<?php echo $tenants['id'];?>">全部<span class="fa"><?php echo $countsets;?></span>个案例 ></a></div>
    <ul>
        <?php foreach($tenantssets as $k => $v) { ?>
        <li>
            <a href="/detail/<?php echo $tenants['id'].'/'.$v['id']?>">
            <div class="suolvt">
                <span><img src="//img2.youbangkeyi.com<?php echo $v['cover'][0];?>?imageView2/1/w/250/h/187/q/75|imageslim"></span></div>
                <div class="txt">
                    <h3><?php echo $v['setName'];?></h3>
                    <div class="price fa">
                        <span class="red">¥<?php echo $v['currentPrice']?></span>
                        <del>¥<?php echo $v['price'];?></del>
                    </div>
                    <div class="text"><?php echo implode('|',$v['kind']);?></div>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
<div class="comment_list">
            <div class="title dafen"><a href="#">网友打分<span style="font-size:0.6rem;background:#FFF;">（<?php echo intval($tenantssort['comments']);?>）</span><em></em></a></div>
                <div class="shengji">打榜频词功能届时上线！<br><p>系统升级中，网友打榜内容暂时无法展示！</p></div>
                
            </div>
<div class="tel-box txtCtr">
    <a href="tel:<?php echo $tenants['isVip']==2?$tenants['phone']:'18500905723';?>" class="tel lft"><em></em>打电话</a>
    <a href="javascript:" class="ask rgt down"><em></em>咨询商户</a>
</div>
<div class="bgDiv"></div>
<div class="downNav" style="background: #FFF;border-radius: 0.3rem 0.3rem 0 0;height:280px">
    <div class="ask">
        <h4>有榜评选商家优质服务，预约即可享受</h4>
        <div class="tip">
            <span>7天内选片</span><span>15天出精修</span><span>不满意重拍</span><span>无隐形消费</span>
        </div>
        <p>留下您的联系方式以便商户尽快联系你</p>
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="text" name="mobile" id="mobile" class="input" placeholder="请输入手机号">
        <input type="submit" name="wapsubmit" class="btn" value="预约看店">
    </div>

</div>
<script type="text/javascript" src="https://cdn.bootcss.com/echarts/3.7.1/echarts.common.min.js"></script>
<script type="text/javascript">

    var myChart = document.getElementById('dbmain2');
    //自适应宽高
    var myChartContainer = function () {
        myChart.style.width = window.innerWidth+'px';
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
                splitArea : {show : false},
                data : [
                    <?php if(isset($tenantssortviewcomment) && count($tenantssortviewcomment)){
                    $len=count($tenantssortviewcomment)-1;foreach($tenantssortviewcomment as $key=>$v){
                        if($len!=$key){
                            echo '\''.str_replace('-','/',$v['date']).'\',';
                        }else{
                            echo '\''.str_replace('-','/',$v['date']).'\'';
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
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'},lineStyle:{ color:'rgba(0,187,205,1)'},color:'rgba(0,187,205,0.5)'}},
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
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'},lineStyle:{ color:"rgba(238,0,0,1)"},color:"rgba(238,0,0,0.5)"}},
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
        myChart.style.width = window.innerWidth+'px';
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
                splitArea : {show : false},
                data : [
                    <?php if(isset($tenantssortview) && count($tenantssortview)){
                    $len=count($tenantssortview)-1;
                    foreach($tenantssortview as $key=>$v){
                        if($len!=$key){
                            echo '\''.str_replace('-','/',$v['date']).'\',';
                        }else{
                            echo '\''.str_replace('-','/',$v['date']).'\'';
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
                itemStyle: {normal: {areaStyle: {type: 'default'},lineStyle:{ color:'rgba(0,187,205,1)'},color:'rgba(0,187,205,0.5)'}},
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
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'},lineStyle:{ color:"rgba(238,0,0,1)"},color:"rgba(238,0,0,0.5)"}},
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

    $('input[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = 4;

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
</script>
</body>
</html>