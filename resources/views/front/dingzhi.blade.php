<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $cname;?>专属榜单</title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script src="/js/main.js"></script>
    <script type="text/javascript" src="/js/more.js"></script>
    <script type="text/javascript" src="/js/foot.js"></script>
    <style type="text/css">body{background: #FFF}.list_box{padding-bottom: 0;}#gr_zone_ids{cursor:pointer}</style>
</head>
<body>
<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">定制成功</div>
    <div class="share"></div>
</header>
<div class="hi">
    <h3>Hi，<?php echo $cname;?>：请查看您的专属榜单！</h3>
</div>
<div class="tabBox">
    <div class="bd">
        <div class="list_box showmore" pagesize="5">
            <?php foreach($tenants as $k => $v) { ?>
            <div class="pic_box">
                <?php if($v['isVip']==2) { ?>
                <div class="huiyuan"></div>
                <?php } ?>
                <div class="num_txt">
                    <div class="num fa txtCtr">
                        <?php echo $k +1;?><em class="<?php echo $v['isVip']==2?"blue":'';?>">TOP</em>
                    </div>
                    <div class="tit_box">
                        <div class="title"><a href="/detail/<?php echo $v['id'];?>"><?php echo $v['name']?></a></div>
                        <div class="txt"><span>人均：¥<?php echo $v['person_price'];?></span><span>|</span><span>竞争指数:<?php echo $v['heat_index'];?></span></div>
                    </div>
                </div>
                <?php if($v['isVip'] == 1) { ?>
                <div class="pic txtCtr">
                    <?php foreach($v['taoxi'] as $v2) { ?>
                    <div class="img">
                        <a class="suolv" href="/detail/<?php echo $v['id'].'/'.$v2['id'];?>">
                            <span><img class="lazy" src="/images/grey.gif" data-original="//img2.youbangkeyi.com<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/225/q/75|imageslim"></span>
                        </a>
                    </div>
                    <?php } ?>

                </div>
                <?php } else { ?>
                <div class="vippic txtCtr">
                    <?php if(!empty($v['taoxi'][0])) { ?>
                    <div class="vipimg">
                        <a href="/detail/<?php echo $v['id'].'/'.$v['taoxi'][0]['id'];?>">
                            <img class="lazy" src="/images/grey.gif" data-original="//img2.youbangkeyi.com<?php echo $v['taoxi'][0]['cover'][0];?>">
                        </a>
                        <p class="title txtLft"><?php echo $v['taoxi'][0]['setName'];?></p>
                        <div class="price txtLft"><span class="red fa">¥<?php echo $v['taoxi'][0]['currentPrice'];?></span><del class="fa">¥<?php echo $v['taoxi'][0]['price'];?></del></div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <div class="txt_box txtCtr">
                    <div class="txt">
                        <p class="blue"><?php echo $v['day30s'];?></p>
                        <em>品牌搜索</em>
                    </div>
                    <div class="txt">
                        <p class="blue"><?php echo $v['allcy'];?></p>
                        <em>全网好评</em>
                    </div>
                    <div class="txt">
                        <p class="blue"><?php echo $v['allce'];?></p>
                        <em>全网好评</em>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
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
<script type="text/javascript" src="/js/jquery.lazyload.js"></script>
<script type="text/javascript">
    $(function() {
        $("img.lazy").lazyload({effect: "fadeIn"});
    });
</script>
</body>
</html>