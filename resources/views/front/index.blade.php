<?php //echo $type ;exit;?><!DOCTYPE html>
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
        <input type="text" name="keyword" class="inp" placeholder="搜商家·查排名">
        <input type="hidden" name="pycity" value="<?php echo $pycity;?>" />
        <input type="hidden" name="type" value="<?php echo $type;?>" />
        <input type="button" name="submit" class="btn">
    </div>
    <div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
</header>

<div class="content">
    <div class="i_img">
        <a href="/<?php echo $pycity.'/sheying';?>"><img src="http://qnm.hunliji.com/Fl-4VDQTDuYEloZwEGToUONRpzEj?imageView2/1/w/640/h/256"></a>
    </div>
    <div id="leftTabBox" class="tabBox">
        <div class="hd">
            <ul>
            <?php if($type=='sheying') { ?>
                           <li class="on"><a href="/<?php echo $pycity;?>/sheying">婚纱摄影榜单<span></span></a></li>
                    <?php } else { ?>
							<li><a href="/<?php echo $pycity;?>/sheying">婚纱摄影榜单<span></span></a></li>
                    <?php } ?>
                      <?php if($type=='sheying') { ?>
                          <li ><a href="/<?php echo $pycity;?>/hunli">婚礼策划榜单<span></span></a></li>
                    <?php } else { ?>
                          <li class="on"><a href="/<?php echo $pycity;?>/hunli">婚礼策划榜单<span></span></a></li>
                    <?php } ?>
            </ul>
        </div>
        <div class="bd">
            <div class="list_box">
                <div class="b_time">更新时间：<span class="fa">2017-02-24  09:22:35</span><span class="guize"><a href="/guize.html">榜单规则</a></span></div>
                <section class="showmore" pagesize="5">
                    <?php if(isset($spread['name'])) { ?>
                    <div class="pic_box">
                        <?php if($spread['isVip']==2) { ?>
                            <div class="huiyuan"></div>
                        <?php } ?>
                        <div class="num_txt">
                            <div class="num fa txtCtr">
                                <?php echo $spread['order_city'];?><em class="<?php echo $spread['isVip']==2?"blue":'';?>">TOP</em>
                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="/detail/<?php echo $spread['id'];?>"><?php echo $spread['name']?></a></div>
                                <div class="txt"><span>人均：¥<?php echo $spread['person_price'];?></span><span>|</span><span>竞争指数:<?php echo $spread['heat_index'];?></span></div>
                            </div>
                        </div>
                        <div class="vippic txtCtr">
                            <?php if(isset($spread['taoxi'])) { ?>
                            <div class="vipimg">
                                <a href="/detail/<?php echo $spread['id'].'/'.$spread['taoxi']['id'];?>"><img src="//img2.youbangkeyi.com<?php echo $spread['taoxi']['cover'][0]; ?>"></a>
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
                            <div class="num fa txtCtr">
                                <?php echo $v['order_city'];?><em class="<?php echo $v['isVip']==2?"blue":'';?>">TOP</em>
                            </div>
                            <div class="tit_box">
                                <div class="title"><a href="/detail/<?php echo $v['id'];?>"><?php echo $city;?><?php echo $v['name']?></a></div>
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
                </section>
            </div>
        </div>
    </div>


</div>
<footer>
    <div class="txt"><p class="f075">定制个性榜单</p>覆盖<span>12万+</span>商户 <span>18个</span>数据衡量维度</div>
    <em class="down">立即定制</em></footer>
<div class="bgDiv"></div>
<div class="downNav">
    <div class="title">快速定制专属榜单</div>
    <div class="form">
        <div class="sewvmain">
            <div class="tb"></div>
            <div class="sewv">
                <div class="sewvtop"><em><span id="customized_name"><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚礼策划<?php } ?></span><img src="/images/icon9.png"></em></div>
            </div>
            <div class="sewv">
                <div class="sewvtop"><em><span id="style">选择风格</span><img src="/images/icon9.png"></em></div>
                <ul class="sewvbm" multile='1' style="left: -7.63rem">
                    <?php if($type=='sheying') { ?>
                            <li class="xq2">小清新</li>
                            <li class="xq2">韩式</li>
                            <li class="xq2">花海</li>
                            <li class="xq2">个性</li>
                            <li class="xq2">城市地标</li>
                            <li class="xq2">欧美</li>
                            <li class="xq2">宫殿教堂</li>
                            <li class="xq2">复古</li>
                            <li class="xq2">海景</li>
                            <li class="xq2">性感</li>
                            <li class="xq2">夜景</li>
                            <li class="xq2">游艇</li>
                            <li class="xq2">水下</li>
                            <li class="xq2">日系</li>
                            <li class="xq2">中国风</li>
                            <li class="xq2">马场</li>
                            <li class="xq2">旅拍</li>
                            <li class="xq2">唯美</li>
                    <?php } else { ?>
                           <li class="xq2">唯美</li>
                            <li class="xq2">奢华大气</li>
                            <li class="xq2">小清新</li>
                            <li class="xq2">高贵紫</li>
                             <li class="xq2">梦幻蓝</li>
                            <li class="xq2">复古</li>
                             <li class="xq2">欧式宫廷</li>
                            <li class="xq2">粉色系</li>
                            <li class="xq2">香橙系</li>
                            <li class="xq2">红色系</li>
                            <li class="xq2">森系</li>
                            <li class="xq2">中式</li>
                    <?php } ?>

                    <div class='btn txtCtr'>
                        <a id='style_btn' href='javascript:;'>确定</a>
                    </div>
                </ul>
            </div>
        </div>
        <div class="input">

            </form>
            <form action="/user/{{$pycity}}/<?php echo rand(10,1000) ?>" method="get" id="subsubmit">
                <input type="hidden" id="hiddenstyle" name="style" value=""/>
                <input type="hidden" id="hiddencity" name="city" value=""/>
                <input type="text" name="budget" placeholder="您的预算">
                <input type="text" name="mobile" placeholder="您的手机">
                <input type="text" name="name" placeholder="您的姓名">
            </form>
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
                <p data-id="110100"><?php echo $city;?></p>
            </div>
            <div class="hot">  
                  <span class="city-letter">华北东北</span>                
                   <p data-id="110100"> <a href="/beijing/<?php echo $type;?>">北京</a></p>
                   <p data-id="110101"> <a href="/tianjin/<?php echo $type;?>">天津</a></p>
                    <p data-id="110102"><a href="/shenyang/<?php echo $type;?>">沈阳</a></p>
                    <p data-id="110103"><a href="/dalian/<?php echo $type;?>">大连</a></p>
                    <p data-id="110104"><a href="/haierbin/<?php echo $type;?>">哈尔滨</a></p>
                    <p data-id="110105"><a href="/shijiazhuang/<?php echo $type;?>">石家庄</a></p>
                <span class="city-letter">华东地区</span> 
                   <p data-id="110107"> <a href="/shanghai/<?php echo $type;?>">上海</a></p>
                   <p data-id="110106"> <a href="/hangzhou/<?php echo $type;?>">杭州</a></p>
                    <p data-id="110108"><a href="/xiamen/<?php echo $type;?>">厦门</a></p>
                    <p data-id="110109"><a href="/nanjing/<?php echo $type;?>">南京</a></p>
                    <p data-id="110110"><a href="/suzhou/<?php echo $type;?>">苏州</a></p>
                    <p data-id="110111"><a href="/wuxi/<?php echo $type;?>">无锡</a></p>
                    <p data-id="110112"><a href="/ningbo/<?php echo $type;?>">宁波</a></p>
                    <p data-id="110113"><a href="/fuzhou/<?php echo $type;?>">福州</a></p>
                    <p data-id="110114"><a href="/qingdao/<?php echo $type;?>">青岛</a></p>
                    <p data-id="110115"><a href="/hefei/<?php echo $type;?>">合肥</a></p>
                <span class="city-letter">中部西部</span> 
                    <p data-id="110116"><a href="/chengdu/<?php echo $type;?>">成都</a></p>
                    <p data-id="110117"><a href="/chongqing/<?php echo $type;?>">重庆</a></p>
                    <p data-id="110118"><a href="/changsha/<?php echo $type;?>">长沙</a></p>
                    <p data-id="110119"><a href="/zhengzhou/<?php echo $type;?>">郑州</a></p>
                    <p data-id="110120"><a href="/xian/<?php echo $type;?>">西安</a></p>
                    <p data-id="110121"><a href="/wuhan/<?php echo $type;?>">武汉</a></p>
                <span class="city-letter">华南地区</span> 
                   <p data-id="110122"> <a href="/guangzhou/<?php echo $type;?>">广州</a></p>
                    <p data-id="110123"><a href="/shenzhen/<?php echo $type;?>">深圳</a></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/city.js"></script>
<script type="text/javascript" src="/js/layer/layer.js"></script>
<script type="text/javascript" src="/js/jquery.lazyload.js"></script>
<script type="text/javascript">
    $(function() {
        $("img.lazy").lazyload({effect: "fadeIn"});
    });
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

        $('.submit').click(function(){
            var customized_name = $('#customized_name').text();
            var style = $('#style').text();
            var budget = $('input[name=budget]').val();
            var city = '<?php echo $pycity?>';
            if(!budget){
                alert('预算不能为空');
                return false;
            }
            var phone = $('input[name=mobile]').val();
            if(!phone){
                alert('手机号码不能为空');
                return false;
            }
            if(phone){
                var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
                if(!myreg.test(phone))
                {
                    alert('请输入有效的手机号码！');
                    return false;
                }
            }
            var name = $('input[name=name]').val();
            if(!name){
                alert('姓名不能为空');
                return false;
            }
            $.ajax({
                url: "/dingzhi",
                type: "post",
                dataType: "json",
                data: {'customized_name': customized_name,'style': style,'budget': budget,'phone': phone,'name': name,'city': city,'linkurl': "{{url('user')}}/{{$pycity}}/<?php echo rand(10,1000) ?>?style="+style+"&city="+city+"&name="+name+"&price="+budget+"&customized_name="+customized_name},
                success: function(data){
                    console.log(data);
                    if(data.result == "00")
                    {
                        var city = $('#area').text();
                        $('#hiddenstyle').val(style);
                        $('#hiddencity').val(city);
                        $('#hiddenname').val(name);
                        $('#hiddenprice').val(budget);
                        $('#hiddencustomized_name').val(customized_name);

                        $('#subsubmit').submit();
                    }else{
                        alert('定制失败');
                    };
                }
            });
            return false ;
        });
    });
</script>

</body>
</html>