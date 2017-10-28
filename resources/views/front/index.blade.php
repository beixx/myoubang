<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="copyright" content="">
    <meta name="Keywords" content="<?php echo $keyword?>">
    <meta name="description" content="<?php echo $desc?>">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/foot.js"></script>
    <script type="text/javascript" src="/js/more.js"></script>
    <style type="text/css">
        body{background: #FFF}
        #gr_zone_ids{cursor:pointer}
    </style>
</head>
<body>
<header>
    <div class="logo"><img src="/images/logo.png"></div>
    <div class="search">
        <input type="text" name="keyword" class="inp" placeholder="搜索商家">
        <input type="hidden" name="pycity" value="<?php echo $pycity;?>" />
        <input type="hidden" name="type" value="<?php echo $type;?>" />
        <input type="button" name="submit" class="btn">
    </div>
    <div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
</header>

<div class="content">

    <div class="i_img">
        <a href="/<?php echo $pycity.'/sheying';?>"><img src="/images/img1.png"></a>
        <a href="/<?php echo $pycity.'/hunli';?>"><img src="/images/img2.png"></a>
    </div>
    <div id="leftTabBox" class="tabBox">
        <div class="hd">
            <ul>
                <li><a href="#">综合榜<span></span></a></li>
            </ul>
        </div>
        <div class="bd">
            <div class="list_box">
                <div class="b_time">更新时间：<span class="fa">2017-02-24  09:22:35</span><span class="guize"><a href="">榜单规则</a></span></div>
                <section class="showmore" pagesize="5">
                    <?php if(isset($spread['name'])) { ?>
                    <div class="pic_box">
                        <?php if($spread['isVip']==2) { ?>
                            <div class="huiyuan"></div>
                        <?php } ?>
                        <div class="num_txt">
                            <div class="num n5 fa txtCtr">
                                <em class="<?php echo $spread['isVip']==2?"blue":'';?>"><?php echo $spread['order_city'];?></em>
                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="/detail/<?php echo $spread['id'];?>"><?php echo $spread['name']?></a></div>
                                <div class="txt"><span>人均：¥<?php echo $spread['person_price'];?></span><span>|</span><span><?php echo $spread['address'];?></span></div>
                            </div>
                        </div>
                        <div class="vippic txtCtr">
                            <?php if(isset($spread['taoxi'])) { ?>
                            <div class="vipimg">
                                <a href="/detail/<?php echo $spread['id'].'/'.$spread['taoxi']['id'];?>"><img src="http://img2.youbangkeyi.com<?php echo $spread['taoxi']['cover'][0]; ?>"></a>
                                <p class="title txtLft"><?php echo $spread['setName'];?></p>
                                <div class="price txtLft"><span class="red fa">¥<?php echo $spread['taoxi']['currentPrice'];?></span><del class="fa">¥<?php echo $spread['taoxi']['price'];?></del></div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue"><?php echo $spread['day30s'];?></p>
                                <em>品牌搜索</em>
                            </div>
                            <div class="txt">
                                <p class="blue"><?php echo $spread['allcy'];?></p>
                                <em>全网好评</em>
                            </div>
                            <div class="txt">
                                <p class="blue"><?php echo $spread['allce'];?></p>
                                <em>全网好评</em>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php foreach($tenants as $k => $v) { ?>
                    <div class="pic_box">
                        <?php if($v['isVip']==2) { ?>
                            <div class="huiyuan"></div>
                        <?php } ?>
                        <div class="num_txt">
                            <div class="num n1 fa txtCtr">
                                <em class="<?php echo $v['isVip']==2?"blue":'';?>"><?php echo $v['order_city'];?></em>
                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="/detail/<?php echo $v['id'];?>"><?php echo $v['name']?></a></div>
                                <div class="txt"><span>人均：¥<?php echo $v['person_price'];?></span><span>|</span><span><?php echo $v['address'];?></span></div>
                            </div>
                        </div>
                        <?php if($v['isVip'] == 1) { ?>
                        <div class="pic txtCtr">
                            <?php foreach($v['taoxi'] as $v2) { ?>
                            <div class="img">
                                <a href="/detail/<?php echo $v['id'].'/'.$v2['id'];?>"><img src="http://img2.youbangkeyi.com<?php echo $v2['cover'][0];?>"></a>
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
                                <em>全网好评</em>
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
    <div class="txt">覆盖<span>12万+</span>商户 <span>18个</span>数据衡量维度</div>
    <em class="down">立即定制</em></footer>
<div class="bgDiv"></div>
<div class="downNav">
    <div class="title">快速定制专属榜单</div>
    <div class="form">
        <div class="sewvmain">
            <div class="tb"></div>
            <div class="sewv">
                <div class="sewvtop"><em><span>婚纱摄影</span><img src="/images/icon9.png"></em></div>
                <ul class="sewvbm">
                    <li>婚纱摄影</li>
                    <li>婚礼策划</li>
                </ul>
            </div>
            <div class="sewv">
                <div class="sewvtop"><em><span>选择风格</span><img src="/images/icon9.png"></em></div>
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
</style>

<!-- 城市弹出 -->
<div class="container">
    <div class="city">
        <div class="city-list">
            <div class="current">
                <span class="city-letter">当前城市</span>
                <p data-id="110100"><?php echo $city;?></p>
            </div>
            <div class="hot">
                <span class="city-letter">热门城市</span>
                <p data-id="110100"><a href="/beijing/<?php echo $type;?>">北京</a></p>
                <p data-id="310100"><a href="/shanghai/<?php echo $type;?>">上海</a></p>
                <p data-id="440100"><a href="/guangzhou/<?php echo $type;?>">广州</a></p>
                <p data-id="440300"><a href="/shenzhen/<?php echo $type;?>">深圳</a></p>
                <p data-id="420100"><a href="/wuhan/<?php echo $type;?>">武汉</a></p>
                <p data-id="510100"><a href="/chengdu/<?php echo $type;?>">成都</a></p>
                <p data-id="120100"><a href="/tianjin/<?php echo $type;?>">天津</a></p>
                <p data-id="210200"><a href="/dalian/<?php echo $type;?>">大连</a></p>
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