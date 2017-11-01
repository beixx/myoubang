<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="<?php echo $keyword;?>">
    <meta name="description" content="<?php echo $desc?>">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-1.7.1.min.js"></script>
    <script src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/foot.js"></script>
    <style type="text/css">body{background:#f0f0f0;}</style>
</head>
<body class="view">
<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">套餐详情</div>
    <div class="share"></div>
</header>
<div class="focus_box">
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php foreach($info['cover'] as $v) { ?>
                <li class="suolvd"><span><img src="http://img2.youbangkeyi.com<?php echo $v;?>?imageView2/1/w/600/h/450/q/75|imageslim" /></span></li>
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
        <span class="lft red fa">¥<?php echo $info['currentPrice'];?></span>
        <del class="lft fa">¥<?php echo $info['price'];?></del>
        <h2 class="txtRgt rgt"><?php echo $info['setName'];?></h2>
    </div>
</div>
<div class="shop_box">
    <div class="titdp">店铺信息</div>
    <?php if($tenants['isVip'] == 2) { ?>
    <div class="huiyuan"></div>
    <?php } ?>
    <div class="txt-box">
        <h1><?php echo $tenants['name'];?></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?>
        </div>
    </div>
</div>
<div class="titjs">套餐介绍</div>
<div class="txt-info">
    <?php echo $info['detail'];?>
</div>
<div class="tittp">图文详情</div>
<div class="info">
    <?php foreach($info['picDetail'] as $v) { ?>
        <img src="http://img2.youbangkeyi.com<?php echo $v;?>">
    <?php } ?>
</div>
<div class="tit"><?php echo $tenants['name'];?>专属定制热卖产品</div>
<div class="hot">
    <ul>
        <?php foreach($remmends as $v) { ?>
        <li>
            <a class="suolvl" href="/detail/<?php echo $tenants['id'].'/'.$v['id'];?>">
               <span> <img src="//img2.youbangkeyi.com<?php echo $v['cover'][0]?>?imageView2/1/w/400/h/300/q/75|imageslim"></span>  </a><p><?php echo $v['setName'];?></p>
                <div class="price">
                    <span class="red">¥<?php echo $v['currentPrice'];?></span>
                    <del>¥<?php echo $v['price'];?></del>
                </div>
        </li>
        <?php } ?>
    </ul>
</div>

<div class="tel-box txtCtr">
    <a href="tel:<?php echo $tenants['isVip']==2?$tenants['phone']:'18500905723';?>" class="tel lft"><em></em>打电话</a>
    <a href="javascript:" class="ask rgt down"><em></em>咨询套餐</a>
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

<script type="text/javascript">

    $('input[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = 2;

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