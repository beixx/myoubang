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
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script src="/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/js/foot.js"></script>
    <style type="text/css">body{background: #f0f0f0}</style>
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
                <li>
                    <img _src="http://img2.youbangkeyi.com<?php echo $v;?>" src="http://img2.youbangkeyi.com<?php echo $v;?>" />
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
</div>
<div class="shop_box">
    <div class="titdp">店铺信息</div>
    <div class="huiyuan"></div>
    <div class="txt-box">
        <h1><?php echo $tenants['name'];?></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num n6 fa txtCtr">
            <em class="blue"><?php echo $tenants['order_city'];?></em>
        </div>
    </div>
</div>
<div class="jxtc_box">
    <div class="tittx">类似案例</div>
    <ul>
        <?php foreach($recommpics as $v) { ?>
        <li>
            <a href="">
                <img src="http://img2.youbangkeyi.com<?php echo $v['firstcover'][0];?>">
                <div class="txt">
                    <h3><?php echo $v['picName'];?></h3>
                    <div class="text"><?php echo implode('|',$v['picStyle'])?></div>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>

<div class="tittp">客片欣赏</div>
<div class="info">
    <?php foreach($picinfo['cover'] as $v) { ?>
        <img src="http://img2.youbangkeyi.com<?php echo $v;?>">
    <?php } ?>
</div>
<div class="tel-box txtCtr">
    <a href="tel:13588886666" class="tel lft"><em></em>打电话</a>
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
        <input type="text" name="" class="input" placeholder="请输入手机号">
        <input type="submit" name="" class="btn" value="预约看店">
    </div>
</div>


</body>
</html>