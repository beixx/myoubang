<?php //echo $type ;exit;?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $city;?>婚纱摄影预估计算器</title>
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="copyright" content="">
    <meta name="Keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/main.js"></script>
    <script type="text/javascript" src="http://www.youbangkeyi.com/js/foot.js?21"></script>
    <script type="text/javascript" src="/js/more.js?v1"></script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?5e17917c58669241a9d904eaddad0a8e";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <style type="text/css">
    body {
    background: #f5f7fa;
}
        .sousj {
            position: relative;
            font-size: 0.7rem;
            height: 6rem;
            color: #666;
            background:url(http://img2.youbangkeyi.com/merchant/a9b/f26/86e/94351bc971eb5aab6a0cdc84227a6af3.jpg) 0 -4rem no-repeat;
            background-size: cover;
        }
.txtshuju {
    width: 38%;
    padding: 3% 0% 3% 12%;
    text-align: left;
    color: #666;
    font-size: 0.6rem;
    line-height: 0.8rem;
}
        .bg2 {
            background: #000;
            opacity: 0.5;
            filter: alpha(opacity=50);
            position: absolute;
            left: 0;
            width: 100%;
            height: 400px;
            z-index: 9;
            height: 6rem;
        }

        #gr_zone_ids {
            cursor: pointer
        }

        footer {
            margin-bottom: 0;
        }

        .foot {
            width: 100%;
            background: #313439;
            line-height: 1.2rem;
            display: table;
            color: #666;
            padding: 0.8rem 0px;
            font-size: 0.6rem;
        }
        .lian img {
            width: 70%;
            height: auto;
            margin: 0 auto;
            margin: 0 15%;
        }

        .sy-title {
            margin: 0rem auto;
            width: 80%;
            padding: 0.6rem 0;
            top: 1.2rem;
            position: absolute;
            left: 50%;
            margin-left: -40%;
            text-align: center;
            z-index: 13;
        }

        .aa_hide {
            bottom: 0
        }

        .bottom_slide_box {
            position: initial;
        }

        .sousj {
            height:4rem
        }


        .bottom_slide_box {
    width: 92%;
    background: #FFF;
    margin:4%;
    padding-bottom: 20px;
    border-radius: 16px;
    box-shadow: 0px 2px 13px -1px #c7c7c7;
    font-family: "Microsoft Yahei", Tahoma, Arial, sans-serif;
        }
.ygxm {
    padding: 0.5rem 0px 0.5rem;
    border: 2px solid #e7e7e7;
    width: 99%;
    margin: 0 auto 0.2rem;
}
        .bottom_slide_box .calculator_box {
            width: 100%;
            background: #fff;
            margin: 0 auto;
            overflow: hidden;
            background: rgba(255, 255, 255, .97);
            position: relative;
            border-radius: 16px;
        }
        .bottom_slide_box .calculator_box .select_b h2 span {

     position: relative;
    font-size: .6rem;
    color: #666;
    font-weight: normal;
    display: block;
    line-height: 0.8rem;
    text-align: center;
    margin-bottom: 0.8rem;
        }

        .bottom_slide_box .calculator_box .select_b {
            width: 86%;
            margin: 0rem 7% 0;
        }

        .logo {
            width: 3.46rem;
            height: 1.4rem;
            background: url(http://www.youbangkeyi.com/images/logo.png) no-repeat;
            background-size: cover;
            position: absolute;
            left: 50%;
            margin-left: -1.73rem;
            margin-top: 0.5rem;
        }
.bottom_slide_box .calculator_box .select_b h2 span p{line-height: 1.5rem;
    font-size:1rem;
    font-weight: bold;
    color: #333;
    margin-top: 0.8rem;}
        .bottom_slide_box .calculator_box .select_b h2 span:before {
            left: 0.5rem;
        }

        .bottom_slide_box .calculator_box .select_b h2 span:after {
            right: 0.5rem;
        }

        .bottom_slide_box .calculator_box .select_b h2 span:before, .bottom_slide_box .calculator_box .select_b h2 span:after {
            position: absolute;
            top:0.8rem;
            width: 5%;
            height: 1px;
            content: ' ';
            border-top: 1px solid #E3E3E3;
        }
    </style>
</head>
<body>
<div class="main">
    <header>
        <div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
        <div class="logo"><a href="/beijing/sheying">北京婚纱摄影排行榜</a></div>
        <a class="zxdh" href="tel:18500905723"></a>
    </header>

    <div class="content">
        <div class="sousj">
        </div>
    </div>

    <script type="text/javascript">

        function showaa(obj) {
            //var obj_parent=obj.parentNode;
            var obj_parent = obj.parentElement

            if (document.getElementById("12").className == "bottom_slide_box aa_show") {
                document.getElementById("12").className = "bottom_slide_box aa_hide";
            }
            else {
                document.getElementById("12").className = "bottom_slide_box aa_show";
            }
        }

    </script>

    <div id="yuyuea"></div>
    <div id="12" class="bottom_slide_box aa_hide">
        <div class="calculator_box">
            <div class="select_b">
                <h2>
                <span><p><?php echo $city;?>婚纱摄影报价计算器</p><em class="red">拍婚纱照必算 避免被忽悠</em></span></h2>
                <div class="num-frame">
                    <div class="ndys"></div>
                    <div class="yuan"><p>元</p></div>
                    <div class="num-window clearfix clear">
                        <em id="setnum">?</em>
                    </div>
                </div>
                <div class="ygxm"><p><span class="mr1">摄影师费：？元</span><span>化妆师费：？元</span></p>
                <p><span class="mr1">场景费：？元</span><span>精修费：？元</span></p></div>
                <div class="form_line">
                    <div class="element triangle">
                        <select name="font-style" id="xuqiu" class="first_line">
                            <option value="风格">--选择风格--</option>
                            <option value="韩式唯美风">韩式唯美风</option>
                            <option value="时尚简约风">时尚简约风</option>
                            <option value="传统中国风">传统中国风</option>
                            <option value="城市旅拍风">城市旅拍风</option>
                            <option value="梦幻海景风">梦幻海景风</option>
                            <option value="叙事情节风">叙事情节风</option>
                            <option value="个性搞怪风">个性搞怪风</option>
                            <option value="夫妻反串风">夫妻反串风</option>
                            <option value="欧美宫廷风">欧美宫廷风</option>
                            <option value="清新自然风">清新自然风</option>
                            <option value="纪实影像风">纪实影像风</option>
                            <option value="cosplay婚纱照">cosplay婚纱照</option>
                        </select>
                    </div>
                </div>
                <div class="form_line">
                    <div class="element triangle">
                        <select name="shangjia" id="xuqiu" class="first_lin">
                            <option value="">--选择商家档次--</option>
                            <option value="中端商家">中端商家</option>
                            <option value="高端商家">高端商家</option>
                        </select>
                        <select name="zaoxing" id="hotel" class="first_lin fr">
                            <option value="">--选择场景数量--</option>
                            <option data-value="3" value="3">3个</option>
                            <option data-value="4" value="4">4个</option>
                            <option data-value="5" value="5">5个</option>
                            <option data-value="6" value="6">6个</option>
                            <option data-value="7" value="7">6以上</option>
                        </select>
                    </div>
                </div>
                <div class="form_line">
                    <div class="element">
                        <div class="text_wrap">
                            <select name="sheying" id="xuqiu" class="first_lin">
                                <option value="">--选择摄影师--</option>
                                <option value="资深级">资深级</option>
                                <option value="总监级">总监级</option>
                                <option value="首席级">首席摄影师</option>
                            </select>
                            <select name="huazhuang" id="xuqiu" class="first_lin fr">
                                <option value="">--选择化妆师--</option>
                                <option value="资深级">资深级</option>
                                <option value="总监级">总监级</option>
                                <option value="首席级">首席化妆师</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form_line">
                    <div class="element triangle">
                        <select name="count" id="xuqiu" class="first_line">
                            <option value="">--选择修片数量--</option>
                            <option value="40张">40张</option>
                            <option value="45张">45张</option>
                            <option value="50张">50张</option>
                            <option value="55张">55张</option>
                            <option value="60张">60张</option>
                            <option value="65张">65张</option>
                            <option value="70张">70张</option>
                            <option value="75张">75张</option>
                            <option value="80张">80张</option>
                            <option value="85张">85张</option>
                            <option value="90张">90张</option>
                            <option value="95张">95张</option>
                            <option value="100张">100张</option>
                        </select>
                    </div>
                </div>
                <div class="form_line" id="zxys_phoneInput">
                    <div class="element">
                        <div class="text_wrap">
                            <input id="phonenumber" placeholder="输入号码，报价结果将发送到您的手机" type="text" class="text phonetext"
                                   name="phone">
                            <em class="text_lbl"></em>
                        </div>
                    </div>
                </div>
            </div>
            <div class="result_b">
                <button href="javascript:void(0)" class="star_calculator">点击计算价格</button>
            </div>
            <div class="shuom">
                预算结果根据用户真实消费大数据分析计算得出。
            </div>
        </div>
    </div>

    <div id="overlay-bd" class="overlay-bd">
        <div class="t8s-alert-close" href="javascript:void(0)" onclick="two()"><i class="t8s-alert-i"></i></div>
        <div class="t8s-content-box">
            <div class="t8s-fruit-price">
                <p class="column">您的婚纱照预算为</p>
                <p class="jaojia">
                    <span id='setnumall'>0</span>
                    <i>元</i></p></div>
            <div class="t8s-price-list">
                <ul>
                    <li class="clearfix"><span class="t8s-budget-span">场景费用：</span><span><em
                                    id='zaoxingprice'>0</em>元</span></li>
                    <li class="clearfix"><span class="t8s-budget-span">摄影师费用：</span><span><em id='sheyingprice'>0</em>元</span>
                    </li>
                    <li class="clearfix"><span class="t8s-budget-span">化妆造型：</span><span><em id='huazhuangprice'>0</em>元</span>
                    </li>
                    <li class="clearfix"><span class="t8s-budget-span">精修费用：</span><span><em
                                    id=jinxiuprice>0</em>元</span></li>

                </ul>
            </div>
            <div class="holiday-text-t6s"><p>*报价有疑问？稍后有榜网将致电为您解答。</p>
                <p>*报价为大数据报价，实际以推荐商家为准。</p></div>
        </div>
    </div>
    <div id="fade" class="black_overlay">
    </div>
    <script>
        function one() {
            document.getElementById('overlay-bd').style.display = 'block';
            document.getElementById('fade').style.display = 'block'
        }
        function two() {
            document.getElementById('overlay-bd').style.display = 'none';
            document.getElementById('fade').style.display = 'none'
        }
    </script>
    <script type="text/javascript">
        var min = 3000, max = 20000;
        setInterval(displayNum, 100);
        function displayNum() {
            var temp_min = min < 10 ? "00" : (min < 10 ? "0" + min : min);
            var temp_max = max < 100 ? "0" + max : max;
            document.getElementById("setnum").innerHTML = temp_min;
            min = min + 4356;
            if (min > max) {
                min = 0;
            }
        }

        $(function () {
            $(".star_calculator").click(function () {

                var city = "<?php echo $city;?>";
                console.log(city);
                if (!city) {
                    showMessage("请选择城市");
                    return false;
                }
                var shangjia = $("select[name=shangjia]").val();
                console.log(shangjia);
                if (!shangjia) {
                    showMessage("请选择商家类型")
                    return false;
                }
                var zaoxing = $("select[name=zaoxing]").val()
                if (!zaoxing) {
                    showMessage("请选择造型数量");
                    return false;
                }

                var sheying = $("select[name=sheying]").val();
                if (!sheying) {
                    showMessage("请选择摄影师");
                    return false;
                }

                var huazhuang = $("select[name=huazhuang]").val()
                if (!huazhuang) {
                    showMessage("请选择化妆师");
                    return false;
                }

                var count = $("select[name=count]").val();
                if (!count) {
                    showMessage("请选择精修数量");
                    return false;
                }

                var mobile = $("input[name=phone]").val();
                if (!mobile) {
                    showMessage("请填写手机号码");
                    return false;
                }
                var myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
                if (!myreg.test(mobile)) {
                    showMessage("请填写正确的手机号码");
                    return false;
                }

                $.post(
                        "/get/sheyingprice",
                        "city=" + city + "&shangjia=" + shangjia + "&zaoxing=" + zaoxing + "&sheying=" +
                        sheying + "&huazhuang=" + huazhuang + "&count=" + count + "&mobile=" + mobile,
                        function (res, status, xhr) {
                            console.log(res);
                            $("#zaoxingprice").html(res.zaoxingprice);
                            $("#sheyingprice").html(res.sheyingprice);
                            $("#huazhuangprice").html(res.huazhuangprice);
                            $("#jinxiuprice").html(res.cpprice);
                            $("#setnumall").html(res.allprice);
                        },
                        'json'
                );
                one()

            })

            function showMessage(message) {
                alert(message);
            }
        });

    </script>


<div class="hunshabang">
<ul>
 <div class="tittp"><?php echo $city;?>婚纱摄影榜单TOP50<span class="fa"><a style="color: #999" href="/<?php echo $pycity;?>/sheying">查看完整榜单</a></span></div>
<li style="font-size:12px;"><em style="font-size: 12px;color: #ff4848;">排名</em><span style="font-size: 12px;color: #ff4848;"><a  style="color:#ff4848;">商户名称</a></span><em class="jz" style="font-size:12px;color:#ff4848;">得分</em></li>
    <?php foreach($tenants as $v) { ?>
        <li><em>第<?php echo $v['order_city']?>名</em><span><a href="/detail/<?php echo $v['id'];?>"><?php echo $v['name']?></a></span><em class="jz"><?php echo $v['heat_index']?></em></li>
    <?php } ?>
    <div class="bangdwz"><span><a style="color: #fff" href="/<?php echo $pycity;?>/sheying">查看完整榜单</a></span></div>
</ul>
</div>
<style>
.hunshabang{
    width: 100%;
    display: -webkit-box;
    background: #FFF;
    overflow: hidden;
}
.hunshabang ul{width: 100%}
.bangtu {
    position: relative;
    margin-bottom: 10px;
    width: 100%;
    float: left;
    height:5rem;
    text-align: center;
    line-height:5rem;
    color: #FFF;
    font-size: 24px;
    font-weight: bold;
    background-image:url(https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1511440695635&di=f01925475f74d1e519d27f7a73cfa652&imgtype=0&src=http%3A%2F%2Fpic6.wed114.cn%2F20160630%2F2016063016535825892636.jpg);
    background-size: cover;
}
.fa{
        color: #999999;
    height: 2.5rem;
    line-height: 2.5rem;
    font-size: 0.6rem;
    float: right;
    margin-right: 4%;
}
.bg1 {
    background: #000;
    opacity: .3;
    filter: alpha(opacity=30);
    width:100%;
    height: 120px;
    position: absolute;
    left: 0;
    bottom: 0;
}
.bangdtit {
    font-size:1.2rem;
    color: #fff;
    z-index: 99;
    position: absolute;
    bottom: 25px;
    width:100%;
    font-weight: 700;
    height:5rem;
    left: 50%;
    top: 50%;
    margin-left: -50%;
    text-align: center;
    margin-top:-2.5rem;
    text-shadow: 0 1px 4px rgba(0,0,0,0.6);
}
.hunshabang li, .hunlibang li {
    line-height:1.8rem;
    border-bottom: 1px solid #EFEFEF;
    padding: 0 5%;
    width: 90%;
}
.hunshabang li em, .hunlibang li em {
    width:2.3rem;
    display: inline-block;
    font-size:0.65rem;
}
.hunshabang li span, .hunlibang li span {
    display: inline-block;
    font-size:0.65rem;
}
.hunshabang li em.jz, .hunlibang li em.jz {
    width:2rem;
        text-align: right;
    display: inline-block;
    font-size:0.65rem;
    float: right;
}
.bangdwz {
    width:100%;
    margin: 0 auto;
}
.bangdwz span {
padding: 0.2rem 2.5rem;
    margin: 1rem auto;
    display: table;
    background-color: #FF4040;
    color: #FFF  !important;
}
</style>


    <div class="tittp">有榜数据说明</div>
    <div id="fugai" class="time-box">
        <div class="txtshuju lft fgchs">
            <span class="blue">200+ </span>数据覆盖城市
        </div>
        <div class="txtshuju lft fgshh">
            <span class="blue">120,000+ </span>实时分析商户
        </div>
        <div class="txtshuju lft fgcaiji">
            <span class="blue">10 </span>数据采集渠道
        </div>
        <div class="txtshuju lft fgweidu">
            <span class="blue">18 </span>数据统计维度
        </div>
        <div class="txtshuju lft fgxinren">
            <span class="blue">40,000 </span>对新人喜好数据
        </div>
        <div class="txtshuju lft fgpinglun">
            <span class="blue">2,000万+ </span>用户真实点评
        </div>
        <div class="clear"></div>
    </div>
    <div class="unit-footer">
        <div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p>
            <p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span
                        class="font1">放心选</span></p></div>
    </div>
    <div class="foot">
        <div class="foots">
            <span><a href="/about.html">关于有榜</a>|<a target="_blank"
                                                    href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a
                        target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html"
                                                                        target="_blank">服务说明</a>|<a target="_blank"
                                                                                                    href="//c.youbangkeyi.com/images/yingyezhizhao.jpeg">营业执照</a></span>
            京ICP备18024234号-2 北京有榜信息科技有限公司
            <span class="gongan">京公网安备 11010802024698号</span>
        </div>
        <div class="lian"><a rel="nofollow" target="_blank" href="http://www.saic.gov.cn/scs/index.html"><img
                        alt="国家工商行政管理总局" src="//c.youbangkeyi.com/images/scs_logo.png"></a></div>
    </div>
    </footer>
</div>
</div>
<!-- 城市弹出 -->
<div class="container">

</div>
<script type="text/javascript" src="/js/city.js"></script>
<script type="text/javascript" src="/js/jiagecity.js"></script>
<script type="text/javascript" src="/js/layer/layer.js"></script>
<script type="text/javascript">

    $('input[name=wapsubmit]').click(function () {
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = 3;

        if (!phone) {
            alert('手机必填');
            return false;
        }
        if (phone) {
            if (!(/^1[34578]\d{9}$/.test(phone))) {
                alert("亲，手机号填写有误哦");
                return false;
            }
        }
        $.ajax({
            url: "/saveview",
            type: "post",
            dataType: "json",
            data: {'tenantsId': tenantsId, 'phone': phone, 'source': source},
            success: function (data) {
                console.log(data);
                if (data.result == '00') {
                    alert("预约成功" + '\n' + "请注意接听商家的来电！");
                    location.reload();
                }
            }
        });
    });
    $(".package").click(function () {
        $("#tenantsId").val($(this).attr("id"));
        $("#packagemessage").html($(this).attr("message"));
        console.log($(this).attr("message"));
    });
    $(".sybj").click(function () {
        $("#tenantsId").val($(this).attr("data-id"));
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        //子导航展开收缩
        $(".sewvtop").click(function () {
            $(this).find("em").removeClass("lbaxztop2").addClass("lbaxztop").parents(".sewv").siblings().children(".sewvtop").find("em").removeClass("lbaxztop").addClass(".lbaxztop2");
            $(this).next(".sewvbm").toggle().parents(".sewv").siblings().find(".sewvbm").hide();

        });
        /*鼠标离开下拉框关闭*/
        $(".sewv").mouseleave(function () {
            $(".sewvbm").hide();
            $(this).children(".sewvtop").find("em").addClass("lbaxztop2");
        });


        //赋值
        $(".sewvbm>li").click(function () {
            var that = $(this);
            var multile = that.parent().attr('multile');
            if (multile == 1) {
                if (that.hasClass('cur')) {
                    that.removeClass('cur');
                } else {
                    that.addClass('cur');
                }
                var text = '';
                that.parent().find('.cur').each(function () {
                    console.log($(this));
                    console.log($(this).text());
                    text += ($(this).text() + ',')
                })
                // var selva=$(this).parents(".sewvbm").siblings(".sewvtop").find("span").text()+','+$(this).text();
                $(this).parents(".sewvbm").siblings(".sewvtop").find("span").text(text);
                // $(this).parent("ul").hide();
                // $(this).parents(".sewv").children(".sewvtop").find("em").addClass("lbaxztop2");
            } else {
                var selva = that.text();
                that.parents(".sewvbm").siblings(".sewvtop").find("span").text(selva);
                that.parent("ul").hide();
                that.parents(".sewv").children(".sewvtop").find("em").addClass("lbaxztop2");
            }

        });

        $(document).on('click', '#style_btn', function () {
            $(this).parent().parent('ul').hide();
            return false;
        })

        //模糊搜索商家
        $('input[name=submit]').click(function () {
            var keyword = $('input[name=keyword]').val();
            var city = $('input[name=pycity]').val();
            var type = $("input[name=type]").val();
            location.href = "/search/" + city + '?keyword=' + keyword + '&type=' + type;
        });

        $('.submit').click(function () {
            var customized_name = $('#customized_name').text();
            var style = $('#style').text();
            var budget = $('input[name=budget]').val();
            var city = '<?php echo $city;?>';
            if (!budget) {
                alert('预算不能为空');
                return false;
            }
            var phone = $('input[name=mobile]').val();
            if (!phone) {
                alert('手机号码不能为空');
                return false;
            }
            if (phone) {
                var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
                if (!myreg.test(phone)) {
                    alert('请输入有效的手机号码！');
                    return false;
                }
            }
            var name = $('input[name=name]').val();
            if (!name) {
                alert('姓名不能为空');
                return false;
            }
            $.ajax({
                url: "/dingzhi",
                type: "post",
                dataType: "json",
                data: {
                    'customized_name': customized_name,
                    'style': style,
                    'budget': budget,
                    'phone': phone,
                    'name': name,
                    'city': city,
                    'linkurl': "{{url('user')}}/{{$pycity}}/<?php echo rand(10, 1000) ?>?style=" + style + "&city=" + city + "&name=" + name + "&price=" + budget + "&customized_name=" + customized_name
                },
                success: function (data) {
                    console.log(data);
                    if (data.result == "00") {
                        var city = $('#area').text();
                        $('#hiddenstyle').val(style);
                        $('#hiddencity').val(city);
                        $('#hiddenname').val(name);
                        $('#hiddenprice').val(budget);
                        $('#hiddencustomized_name').val(customized_name);

                        $('#subsubmit').submit();
                    } else {
                        alert('定制失败');
                    }
                    ;
                }
            });
            return false;
        });
    });
</script>
</div>
</body>
</html>
