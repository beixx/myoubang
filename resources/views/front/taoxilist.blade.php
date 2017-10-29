<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/js/more.js"></script>
    <script type="text/javascript" src="/js/foot.js"></script>
    <style type="text/css">body{background: #f0f0f0}</style>
</head>
<body class="shop-index view">

<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">套系大全</div>
    <div class="share"></div>
</header>
<div class="shop_box">
    <?php if($tenants['isVip'] == 2) {?>
    <div class="huiyuan"></div>
    <?php } ?>
    <div class="titdp">店铺信息</div>
    <div class="txt-box">
        <h1><?php echo $tenants['name']?></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?><em class="blue">TOP</em>
        </div>
    </div>
</div>



<div class="jxtc_box">
    <div class="tittx">全部套餐（<?php echo count($sets);?>）</div>
    <ul>
        <?php foreach($sets as $k => $v) { ?>
        <li>
            <a href="/detail/<?php echo $tenants['id'].'/'.$v['id'];?>">
               <div class="suolvt">
                <span> <img src="http://img2.youbangkeyi.com<?php echo $v['cover'][0];?>?imageView2/1/w/250/h/187/q/75|imageslim"></span></div>
                <div class="txt">
                    <h3><?php echo $v['setName'];?></h3>
                    <div class="price fa">
                        <span class="red">¥<?php echo $v['currentPrice']?></span>
                        <del>¥<?php echo $v['price']?></del>
                    </div>
                    <div class="text"><?php echo implode('|',$v['kind']);?></div>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
<div></div>
<div class="more txtCtr">点击加载更多套系</div>

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