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
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-1.7.1.min.js"></script>
    <script src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/foot.js"></script>
    <style type="text/css">body{background: #f0f0f0}</style>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c803a020b6c4205813b9d1558a2f7ef4";
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
                    <span><img _src="http://img2.youbangkeyi.com<?php echo $v;?>?imageView2/1/w/600/h/450/q/75|imageslim" src="http://img2.youbangkeyi.com<?php echo $v;?>?imageView2/1/w/600/h/450/q/75|imageslim" /></span>
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
    <?php if($tenants['isVip'] == 2) { ?>
    <div class="huiyuan"></div>
    <?php } ?>
    <div class="txt-box">
        <h1><?php echo $tenants['name'];?></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?><span>TOP</span>
        </div>
    </div>
</div>
<div class="tittp">客片欣赏</div>
<div class="info">
    <?php foreach($picinfo['cover'] as $v) { ?>
        <img src="http://img2.youbangkeyi.com<?php echo $v;?>">
    <?php } ?>
</div>
<div class="jxtc_box">
    <div class="tittx">类似案例</div>
    <ul>
        <?php foreach($recommpics as $v) { ?>
        <li>
            <a href="<?php echo '/kpdetail/'.$v['id'];?>">
                <div class="suolvt">
                <span><img src="http://img2.youbangkeyi.com<?php echo $v['firstcover'][0];?>?imageView2/1/w/640/h/370/q/75|imageslim">
                </span></div>
                <div class="txt">
                    <h3><?php echo $v['picName'];?></h3>
                    <div class="text"><?php echo implode('|',$v['picStyle'])?></div>
                </div>
            </a>
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
