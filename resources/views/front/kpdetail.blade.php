<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="<?php echo $keyword?>">
    <meta name="description" content="<?php echo $desc;?>">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/jquery-1.7.1.min.js"></script>
    <script src="//m1.youbangkeyi.cn/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/js/index.js"></script>
    <script type="text/javascript" src="/js/data.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/foot.js?2"></script>
    <style type="text/css">body{background: #f0f0f0}</style>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1211ad93505007e7eb6df7f6f05c4e8d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body class="view">
<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">案例欣赏</div>
    <div class="share"></div>
</header>
<div class="focus_box">
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php foreach($picinfo['firstcover']as $k =>$v ) {  ?>
                <li class="suolvd">
                    <span>
                        <?php if(strpos($v,'http') === false) {?>
                            <img _src="http://img2.youbangkeyi.cn<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" src="http://img2.youbangkeyi.cn<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" />
                        <?php } else {?>
                            <img _src="<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" src="http://img2.youbangkeyi.cn<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" />
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
    <div class="price-box">
        <h2 style="overflow:hidden;float:left;white-space:nowrap;text-overflow: ellipsis;width: 55%;"><?php echo $picinfo['picName'];?></h2>
        <div class="anli">
            <?php foreach($picinfo['picStyle'] as $v) { ?>
                <em><?php echo $v;?></em>
            <?php } ?>
        </div>
    </div>
    <?php if($picinfo['explain']) {?>
           <p class="anli_pa"><?php echo $picinfo['explain'];?></p>
    <?php } ?>
</div>
<div class="shop_box">
    <div class="titdp">案例所属商家</div>
        <div class="zysm">排名权威有保障，由有榜网对商家全网大数据分析得出！</div>
    <?php if($tenants['isVip'] == 2) { ?>
    <div class="huiyuan"></div>
    <?php } ?>
    <div class="txt-box">
        <h1><a href="/detail/<?php echo $tenants['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>"><?php echo $tenants['name'];?></a></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?><div class="pmt1"><span>TOP</span></div>
        </div>
    </div>
</div>
<div class="tittp">客片欣赏</div>
<div class="info">
    <?php foreach($picinfo['cover'] as $v) { ?>
        <?php if(strpos($v,'http') === false) {?>
            <img src="http://img2.youbangkeyi.cn<?php echo $v;?>">
        <?php } else {?>
        <img src="<?php echo $v;?>">
        <?php } ?>
    <?php } ?>
</div>
<div class="info-box mt03"><div class="titleqs"><i>有榜网获取报价并预约专享</i><span class="fa"><?php echo $tenants['count3'];?>人已获取报价</span></div>
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
<div class="jxtc_box">
    <div class="tittx">该商家其他最新客片欣赏</div>
    <ul>
        <?php foreach($recommpics as $v) { ?>
        <li>
            <a href="<?php echo '/kpdetail/'.$v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                <div class="suolvt">
                <span>
                    <?php if(strpos($v['firstcover'][0],'http') === false) {?>
                        <img src="http://img2.youbangkeyi.cn<?php echo $v['firstcover'][0];?>?imageView2/1/w/768/h/420/q/75|imageslim">
                    <?php } else {?>
                        <img src="<?php echo $v['firstcover'][0];?>?imageView2/1/w/768/h/420/q/75|imageslim">
                    <?php } ?>

                </span></div>
                <div class="txt">
                    <h3><?php echo $v['picName'];?></h3>
                    <div class="text"><?php echo implode('|',$v['picStyle'])?></div>
                </div>
            </a>
          <div href="javascript:" class="anlibj down anliclick">获取该案例报价</div>
        </li>
        <?php } ?>
    </ul>
</div>
<div class="unit-footer"><div class="peace-live"><p class="txt-cont">大数据实时分析 | 排名权威有保障</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div><div class="room-num-line"><span class="txt">商家编号:<?php echo $tenants['id'];?></span></div></div>
<div class="bgDiv"></div>
<div class="downNav bt00">
    <div class="ask">
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="text" name="mobile" id="mobile" class="input" placeholder="请输入手机号，(3分钟响应·<?php echo $tenants['count3'];?>人已获取)">
        <input type="submit" name="wapsubmit" class="btn" value="获取报价">
    </div>

</div>

<script type="text/javascript">

    $('input[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = 13;

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
        $(".liwuclick").click(function(){
        $("input[name=wapsubmit]").val("领取优惠");
    })
    $(".anliclick").click(function(){
        $("input[name=wapsubmit]").val("获取报价");
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
