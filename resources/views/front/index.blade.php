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
        <input type="text" name="" class="inp" placeholder="搜索商家">
        <input type="submit" name="" class="btn">
    </div>
    <div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?>?</div>
</header>

<div class="content">

    <div class="i_img">
        <a href=""><img src="/images/img1.png"></a><a href=""><img src="/images/img2.png"></a>
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
                        <div class="huiyuan"></div>
                        <div class="num_txt">
                            <div class="num n5 fa txtCtr">
                                <em class="blue">10</em>
                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="">韩国艺匠ARTIZ STUDIO(北京店)</a></div>
                                <div class="txt"><span>人均：¥5647</span><span>|</span><span>望京</span></div>
                            </div>
                        </div>
                        <div class="vippic txtCtr">
                            <div class="vipimg">
                                <a href=""><img src="http://p0.meituan.net/wedding/b6db42ec50697da19e99f9a80bc3e5f3276439.jpg"></a>
                                <p class="title txtLft">爱斐堡庄园</p>
                                <div class="price txtLft"><span class="red fa">¥8588</span><del class="fa">¥2980</del></div>
                            </div>
                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>品牌搜索</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="pic_box">
                        <div class="num_txt">
                            <div class="num n1 fa txtCtr">
                                <em>1</em>
                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="">蒙娜丽莎婚纱摄影(东单总店)</a></div>
                                <div class="txt"><span>人均：¥5647</span><span>|</span><span>望京</span></div>
                            </div>

                        </div>
                        <div class="pic txtCtr">
                            <div class="img">
                                <a href=""><img src="https://p1.meituan.net/wedding/b3903513d2c6da8fd3445461195544fe737636.jpg@200w_150h_1e_1c_1l_85q%7Cwatermark=0"></a>
                            </div>
                            <div class="img">
                                <a href=""><img src="https://p1.meituan.net/wedding/2daefc4c005b1a32a4d04d568b2eb9882059451.jpg@200w_150h_1e_1c_1l_85q%7Cwatermark=0"></a>
                            </div>
                            <div class="img">
                                <a href=""><img src="https://p1.meituan.net/wedding/a2df570433f510e1ecb48f74e72661811451968.jpg@200w_150h_1e_1c_1l_85q%7Cwatermark=0"></a>
                            </div>
                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>品牌搜索</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                        </div>
                    </div>

                    <div class="pic_box">
                        <div class="huiyuan"></div>
                        <div class="num_txt">
                            <div class="num n2 fa txtCtr">
                                <em class="blue">2</em>
                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="">韩国艺匠ARTIZ STUDIO(北京店)</a></div>
                                <div class="txt"><span>人均：¥5647</span><span>|</span><span>望京</span></div>
                            </div>

                        </div>
                        <div class="vippic txtCtr">
                            <div class="vipimg">
                                <a href=""><img src="http://p0.meituan.net/wedding/ce60f4ce083ec109311d1d637b979b93288540.jpg"></a>
                                <p class="title txtLft">爱斐堡庄园</p>
                                <div class="price txtLft"><span class="red fa">¥8588</span><del class="fa">¥2980</del></div>
                            </div>
                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>品牌搜索</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                        </div>
                    </div>

                    <div class="pic_box">
                        <div class="num_txt">
                            <div class="num n3 fa txtCtr">
                                <em>3</em>
                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="">北遇映画 PHOTOGRAPHY STUDIO</a></div>
                                <div class="txt"><span>人均：¥5647</span><span>|</span><span>望京</span></div>
                            </div>

                        </div>
                        <div class="pic txtCtr">
                            <div class="img">
                                <a href=""><img src="https://p0.meituan.net/wedding/4009e74a241f6df9bd3458dba895a2631638990.jpg@200w_150h_1e_1c_1l_85q%7Cwatermark=0"></a>

                            </div>
                            <div class="img">
                                <a href=""><img src="https://p0.meituan.net/wedding/a8550257b575df93df5f6d68bd0a4ba71270382.jpg@200w_150h_1e_1c_1l_85q%7Cwatermark=0"></a>
                            </div>
                            <div class="img">
                                <a href=""><img src="https://p1.meituan.net/wedding/97d8f33e112ef3f0e8e2274806f764df1991834.jpg@200w_150h_1e_1c_1l_85q%7Cwatermark=0"></a>
                            </div>
                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>品牌搜索</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                        </div>
                    </div>

                    <div class="pic_box">
                        <div class="num_txt">
                            <div class="num n4 fa txtCtr">
                                <em class="grey">4</em>


                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="">米苏STUDIO 高端影像定制工作室</a></div>
                                <div class="txt"><span>人均：¥5647</span><span>|</span><span>望京</span></div>
                            </div>

                        </div>
                        <div class="pic txtCtr">
                            <div class="img">
                                <a href=""><img src="https://p1.meituan.net/wedding/b5fb07b55d5c8db7c64662717e2617731098150.jpg@200w_150h_1e_1c_1l%7Cwatermark=0"></a>

                            </div>
                            <div class="img">
                                <a href=""><img src="https://p0.meituan.net/wedding/c5dba5f38985ebbdcdf27409b1b4bdea792281.jpg@200w_150h_1e_1c_1l%7Cwatermark=0"></a>
                            </div>
                            <div class="img">
                                <a href=""><img src="https://p1.meituan.net/wedding/672cf9370db8379c409b81d038efd8301749865.jpg@200w_150h_1e_1c_1l%7Cwatermark=0"></a>
                            </div>
                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>品牌搜索</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                        </div>
                    </div>

                    <div class="pic_box">
                        <div class="num_txt">
                            <div class="num n5 fa txtCtr">
                                <em class="blue">5</em>

                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="">纽约纽约时尚婚纱摄影(西单店)</a></div>
                                <div class="txt"><span>人均：¥5647</span><span>|</span><span>望京</span></div>
                            </div>
                        </div>
                        <div class="pic txtCtr">
                            <div class="img">
                                <a href=""><img src="https://p1.meituan.net/wedding/f853738d643b2815459238b7d3d15544988479.jpg@200w_150h_1e_1c_1l_85q%7Cwatermark=0"></a>

                            </div>
                            <div class="img">
                                <a href=""><img src="https://p0.meituan.net/wedding/310202741b5882a1f0e89e86a4aa1978738355.jpg@200w_150h_1e_1c_1l_85q%7Cwatermark=0"></a>
                            </div>
                            <div class="img">
                                <a href=""><img src="https://p1.meituan.net/wedding/88ef6a66d36afaeb828adcc7931b8608911253.jpg@200w_150h_1e_1c_1l_85q%7Cwatermark=0"></a>
                            </div>
                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>品牌搜索</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                        </div>
                    </div>

                    <div class="pic_box">
                        <div class="num_txt">
                            <div class="num n6 fa txtCtr">
                                <em class="blue">6</em>
                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="">谢安视觉摄影·梦幻·韩式·轻奢(双井店)</a></div>
                                <div class="txt"><span>人均：¥5647</span><span>|</span><span>望京</span></div>
                            </div>

                        </div>
                        <div class="pic txtCtr">
                            <div class="img">
                                <a href=""><img src="/images/img.jpg"></a>

                            </div>
                            <div class="img">
                                <a href=""><img src="/images/img.jpg"></a>
                            </div>
                            <div class="img">
                                <a href=""><img src="/images/img.jpg"></a>
                            </div>
                        </div>
                        <div class="txt_box txtCtr">
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>品牌搜索</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                            <div class="txt">
                                <p class="blue">23455</p>
                                <em>全网好评</em>
                            </div>
                        </div>
                    </div>


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
<script type="text/javascript" src="js/city.js"></script>
<script type="text/javascript" src="js/layer/layer.js"></script>
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


    });
</script>

</body>
</html>