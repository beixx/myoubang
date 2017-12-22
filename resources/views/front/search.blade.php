<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="copyright" content="">
    <meta name="Keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/main.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/foot.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/more.js"></script>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c803a020b6c4205813b9d1558a2f7ef4";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <style type="text/css">
       .content{width: 96%;margin: .5rem 2%;background: #FFF;border-radius: .2rem;}
        #gr_zone_ids{cursor:pointer}
    </style>
</head>
<body>
<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">搜索结果</div>
    <div class="share"></div>
</header>
<div class="content">
    <div class="sousuo">
        找到<em><?php echo $keyword;?></em>相关信息<?php echo count($tenants);?>条
    </div>
    <div class="bd">
        <div class="list_box">
            <section class="showmore" pagesize="5">
                <?php foreach($tenants as $k => $v) { ?>
                <div class="pic_box">
                    <?php if($v['isVip']==2) { ?>
                    <div class="huiyuan"></div>
                    <?php } ?>
                    <div class="num_txt">
                        <div class="num fa txtCtr">
                            <?php echo $v['order_city'];?><div class="pmt"><span>TOP</span></div>
                        </div>
                        <div class="tit_box">
                            <div class="title"><a href="/detail/<?php echo $v['id'];?>"><?php echo $city;?><?php echo $v['name']?></a></div>
                            <div class="txt"><span>竞争指数：<em class="e0"><?php echo $v['heat_index'];?></em></span><span>|</span><span>人均：¥<?php echo $v['person_price'];?></span></div>
                        </div>
                    </div>
                    <?php if($v['isVip'] == 1) { ?>
                    <div class="pic txtCtr">
                        <?php foreach($v['taoxi'] as $v2) { ?>
                        <div class="img">
                            <a class="suolv" href="/detail/<?php echo $v['id'].'/'.$v2['id'];?>"><span><img src="http://img2.youbangkeyi.com<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/225/q/75|imageslim"></span></a>
                        </div>
                        <?php } ?>

                    </div>
                    <?php } else { ?>
                    <div class="vippic txtCtr">
                        <?php if(!empty($v['taoxi'][0])) { ?>
                        <div class="vipimg">
                            <a href="/detail/<?php echo $v['id'].'/'.$v['taoxi'][0]['id'];?>"><img src="http://img2.youbangkeyi.com<?php echo $v['taoxi'][0]['cover'][0];?>"></a>
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
                            <em>全网差评</em>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </section>

        </div>
    </div>
</div>
<script type="text/javascript">TouchSlide({ slideCell:"#leftTabBox" });</script>



</div>
<footer>
    <div class="txt"><p class="f075">定制个性榜单</p>覆盖全国<span>12万</span>商户 <span>18个</span>数据衡量维度</div>
    <em class="down">立即定制</em></footer>
<div class="bgDiv"></div>
<div class="downNav">
    <div class="title">快速<span>定制</span>专属<span>榜单</span></div>
    <div class="form">
        <div class="sewvmain">
            <div class="tb"></div>
            <div class="sewv">
                <div class="sewvtop"><em><span>婚纱摄影</span><img src="images/icon9.png"></em></div>
                <ul class="sewvbm">
                    <li>婚纱摄影</li>
                    <li>婚礼策划</li>
                </ul>
            </div>
            <div class="sewv">
                <div class="sewvtop"><em><span>选择风格</span><img src="images/icon9.png"></em></div>
                <ul class="sewvbm" multile='1' style="left: -169px">
                    <li>小清新</li>
                    <li>韩式</li>
                    <li>欧美大气</li>
                    <li>个性</li>
                    <li>复古</li>
                    <li>性感</li>
                    <div class='btn txtCtr'>
                        <a id='style_btn' href='javascript:;'>确定</a>
                    </div>
                </ul>
            </div>
        </div>
        <div class="input">
            <input type="text" name="" placeholder="您的预算">
            <input type="text" name="" placeholder="您的手机">
            <input type="text" name="" placeholder="您的姓名">
        </div>
        <div class="submit txtCtr"><a href="">立即定制</a> </div>
    </div>
</div>
</div>
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
                <p data-id="110100">北京</p>
            </div>
            <div class="hot">
                <span class="city-letter">热门城市</span>
                <p data-id="110100">北京</p><p data-id="310100">上海</p><p data-id="440100">广州</p>
                <p data-id="440300">深圳</p><p data-id="420100">武汉</p><p data-id="510100">成都</p>
                <p data-id="120100">天津</p><p data-id="210200">大连</p>
            </div>
        </div>

    </div>

</div>
<div class="letter">
    <ul>
        <li><a href="javascript:;">A</a></li>
        <li><a href="javascript:;">B</a></li>
        <li><a href="javascript:;">C</a></li>
        <li><a href="javascript:;">D</a></li>
        <li><a href="javascript:;">E</a></li>
        <li><a href="javascript:;">F</a></li>
        <li><a href="javascript:;">G</a></li>
        <li><a href="javascript:;">H</a></li>
        <li><a href="javascript:;">J</a></li>
        <li><a href="javascript:;">K</a></li>
        <li><a href="javascript:;">L</a></li>
        <li><a href="javascript:;">M</a></li>
        <li><a href="javascript:;">N</a></li>
        <li><a href="javascript:;">P</a></li>
        <li><a href="javascript:;">Q</a></li>
        <li><a href="javascript:;">R</a></li>
        <li><a href="javascript:;">S</a></li>
        <li><a href="javascript:;">T</a></li>
        <li><a href="javascript:;">W</a></li>
        <li><a href="javascript:;">X</a></li>
        <li><a href="javascript:;">Y</a></li>
        <li><a href="javascript:;">Z</a></li>
    </ul>
</div>
<script type="text/javascript" src="/js/city.js"></script>
<script type="text/javascript" src="/js/layer/layer.js"></script>
<script type="text/javascript">
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
    });
</script>

</body>
</html>