<?php //echo $type ;exit;?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title>婚纱摄影预估计算器</title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="copyright" content="">
    <meta name="Keywords" content="<?php echo $keyword?>">
    <meta name="description" content="<?php echo $desc?>">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.com/js/main.js"></script>
    <script type="text/javascript" src="http://www.youbangkeyi.com/js/foot.js?21"></script>
        <script type="text/javascript" src="http://www.youbangkeyi.com/js/index.js?21"></script>
            <script type="text/javascript" src="http://www.youbangkeyi.com/js/data.js?21"></script>
    <script type="text/javascript" src="/js/more.js?v1"></script>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5e17917c58669241a9d904eaddad0a8e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <style type="text/css">
    .sousj {
    position: relative;
    font-size: 0.7rem;
    height:6rem;
    color: #666;
    background:url(http://c.youbangkeyi.com/baojia/438e2638ad76a48db6cb490f47f3f9dc.png) no-repeat;
    background-size: cover;
}
.bg2 {
    background: #000;
    opacity: 0;
    filter: alpha(opacity=50);
    position: absolute;
    left: 0;
    width: 100%;
    height: 400px;
    z-index: 9;
    height:6rem;
}
        #gr_zone_ids{cursor:pointer}
        footer{margin-bottom: 0;}
        .foot {
    width: 100%;
    background: #313439;
    line-height: 1.2rem;
    display: table;
    color: #666;
    padding: 0.8rem 0px;
    font-size: 0.6rem;
}
header .city_box {
    width: 2.8rem;
    color: #666;
    font-weight:initial;
    display: table-cell;
    margin-top: 0.35rem;
    line-height: 1.5rem;
    height: 1.5rem;
    text-align: center;
    font-size: 0.7rem;
    overflow: hidden;
    background:none;
    background-size: 0.8rem;
    padding-right: 0.65rem;
    white-space: pre;
    text-overflow: ellipsis;
    float: left;
    margin-left: .5rem;
}
.lian img {
    width: 70%;
    height: auto;
    margin: 0 auto;
    margin: 0 15%;
}.sy-title {
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
        .aa_hide{bottom: 0}
        .bottom_slide_box{position: initial;}
        .sousj{height: 6rem}
        body{    background: #FFF;}
        .bottom_slide_box {
    width: 96%;
    background: #FFF;
    border: 1px solid #E4E4E4;
    margin: 4% 2%;
    padding-bottom: 20px;
    border-radius: 16px;
    box-shadow: 0px 2px 13px -1px #c7c7c7;
    font-family: "Microsoft Yahei", Tahoma, Arial, sans-serif;
}
.bottom_slide_box .calculator_box {
    width: 100%;
    background: #fff;
    margin: 0 auto;
    overflow: hidden;
    background: rgba(255,255,255,.97);
    position: relative;
    border-radius: 16px;
}
.bottom_slide_box .calculator_box .select_b h2 span {
  position: relative;
    font-size: .6rem;
    color: #666;
    font-weight: normal;
    display: block;
    line-height: 2.5rem;
    text-align: center;
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

.bottom_slide_box .calculator_box .select_b h2 span:before{left:0.5rem;}
.bottom_slide_box .calculator_box .select_b h2 span:after{right:0.5rem;}


.bottom_slide_box .calculator_box .select_b h2 span:before, .bottom_slide_box .calculator_box .select_b h2 span:after {
    position: absolute;
    top: 1.25rem;
    width: 25%;
    height: 1px;
    content: ' ';
    border-top: 1px solid #E3E3E3;
}
    </style>
</head>
<body>
<div class="bgDiv"></div>
<div class="downNav">
    <div class="ask">
    <div class="tijiao"><p id="titlefield">提交信息，立即预约咨询商家</p>
<p class="current-li"><em>预约礼</em>完美新娘套装</p></div>
        <input type="hidden" name="tenantsId" id="tenantsId" value="2882">
        <input type="hidden" name="source" id="source" value="1">
        <input type="tel" name="mobile" id="mobile" class="input" placeholder="请输入您的手机号（完美新娘套装）">
        <button type="submit" name="wapsubmit" id="tijiao" class="btn">免费预约咨询 · 3分钟响应</button>
    </div>
    <div class="tishik" style="display:none;"  >
        <div class="tishizi"><p>预约成功</p></div>

    </div>
</div>
<script type="text/javascript">
    $('button[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = $("#source").val();

        if(!phone){
            alert('手机必填');
            return false;
        }
        if(phone){
            if(!(/^1[34578]\d{9}$/.test(phone))){
                alert("亲，手机号码填写的不对哦");
                return false;
            }
        }
        $(this).attr('disabled', true);
        $.ajax({
            url: "/saveview",
            type: "post",
            dataType: "json",
            data: {'tenantsId': tenantsId,'phone': phone,'source':source},
            success: function(data){
                console.log(data);
                if(data.result=='00'){
                    $(".ask").css("display","none");
                    $(".tishik").css("display","block");
    }
            }
        });
    });
    $(function(){
    $(".anliclick").click(function(){
        $("#source").val(3);
        $("#titlefield").html("提交信息，快速获取报价");
        $("#tijiao").html("免费获取报价 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，立刻获取案例报价！");
    })
    $(".yuyueclick").click(function(){
        $("#source").val(1);
        $("#titlefield").html("提交信息，快速预约咨询");
        $("#tijiao").html("免费预约咨询");
        $("#mobile").attr("placeholder","请输入手机号，商家3分钟响应！");
    })
    $(".liwuclick").click(function(){
        $("#source").val(2);
        $("#titlefield").html("提交信息，领取优惠并预约");
        $("#tijiao").html("免费领取优惠 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，领取优惠！");
    })

    $(".dangqiclick").click(function(){
        $("#source").val(4);
        $("#titlefield").html("提交信息，预约拍摄档期");
        $("#tijiao").html("免费咨询档期 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，优先安排拍摄档期！");
    })
    });
</script>
<div class="main">
<header>
<div class="city_box" id="gr_zone_ids" data-id="110100"><?php echo $city;?></div>
<div class="logo"><a href="/beijing/sheying">北京婚纱摄影排行榜</a></div>
<a class="zxdh" href="tel:18500905723"></a>
</header>

<div class="content">
<div class="bg2"></div>
    <div class="sousj">
    <div class="sy-title"><h1>南京拍婚纱照价格计算器</h1><span>计算结果根据大数据分析得出</span></div>
    </div>
    </div>

 <script type="text/javascript">
   
    function showaa(obj)
    {
      //var obj_parent=obj.parentNode;
      var obj_parent=obj.parentElement
     
      if(document.getElementById("12").className=="bottom_slide_box aa_show")
      {
        document.getElementById("12").className="bottom_slide_box aa_hide";
      }
      else
      {
        document.getElementById("12").className="bottom_slide_box aa_show";
      }
    }
    
  </script>

<div id="yuyuea"></div>
<div id="12" class="bottom_slide_box aa_hide">
  <div class="calculator_box">
    <div class="select_b">
      <h2><span>你拍婚纱照的预算</span></h2>
        <div class="num-frame">
                <div class="ndys"><p>您的婚纱照预算为</p></div>
                <div class="yuan"><p>元</p></div>
                <div class="num-window clearfix clear">
        <em id="setnum">?</em>
                </div>
            </div>

            <div class="form_line">
          <div class="element triangle">
                <select name="city" id="xuqiu" class="first_line">
                  <option value="南京">--请选择你喜欢的风格--</option>

                  <option value="北京">韩式风格</option>
                  <option value="天津">欧美风格</option>

              </select>
          </div>
      </div>
      <div class="form_line">
          <div class="element triangle">
                  <select name="shangjia" id="xuqiu" class="first_lin">
                  <option value="">--选择商家档次--</option>
                  <option value="资深级">中端商家</option>
                  <option value="总监级">高端商家</option>
              </select>
                <select name="zaoxing" id="hotel" class="first_lin fr">
                  <option value="">--拍摄场景数量--</option>
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
                   <select  name="sheying"  id="xuqiu" class="first_lin">
                  <option value="">--选择摄影师级别--</option>
                  <option value="资深级">资深级</option>
                  <option value="总监级">总监级</option>
                  <option value="资深级">首席摄影师</option>
              </select>
               <select name="huazhuang" id="xuqiu" class="first_lin fr">
                  <option value="">--选择化妆师级别--</option>
                  <option value="资深级">资深级</option>
                  <option value="总监级">总监级</option>
                  <option value="资深级">首席化妆师</option>
              </select>
              </div>
          </div>
      </div>
      <div class="form_line">
          <div class="element triangle">
              <select name="count" id="xuqiu" class="first_line">
                  <option value="">--请选择精修张数--</option>
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
                  <input id="phonenumber" placeholder="输入手机号，短信接收报价结果" type="text" class="text phonetext" name="phone">
                  <em class="text_lbl"></em>
              </div>
          </div>
      </div>
          <div class="shuom">
          预算结果根据用户真实消费大数据分析计算得出。
          </div>
    </div>
    <div class="result_b">
      <button  href="javascript:void(0)"  class="star_calculator">
        开始计算
      </button>
      <span></span>
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
<ul><li class="clearfix"><span class="t8s-budget-span">场景费用：</span><span><em id='zaoxingprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">摄影师费用：</span><span><em id='sheyingprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">化妆造型：</span><span><em id='huazhuangprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">精修费用：</span><span><em id=jinxiuprice>0</em>元</span></li>

</ul></div><div class="holiday-text-t6s"><p>*报价有疑问？稍后有榜网将致电为您解答。</p><p>*报价为大数据报价，实际以推荐商家为准。</p></div></div>
</div>
 <div id="fade" class="black_overlay"> 
  </div>
 <script>
   function one(){
    document.getElementById('overlay-bd').style.display='block';
    document.getElementById('fade').style.display='block'
   }
   function two(){
    document.getElementById('overlay-bd').style.display='none';
    document.getElementById('fade').style.display='none'
   }
   </script> 
<script type="text/javascript">
  var min = 3000, max = 20000;
  setInterval(displayNum,100);
  function displayNum(){
    var temp_min = min < 10 ? "00" : (min < 10 ? "0"+min : min);
    var temp_max = max < 100 ? "0"+max : max;
    document.getElementById("setnum").innerHTML = temp_min;
    min = min + 4356;
    if(min > max){
      min=0;
    }
  }

  $(function() {
    $(".star_calculator").click(function(){

      var city = $("select[name=city]").val();
      console.log(city);
      if(!city) {
        showMessage("请选择城市");
        return false ;
      } 
      var shangjia = $("select[name=shangjia]").val();
      console.log(shangjia);
      if(!shangjia){
        showMessage("请选择商家类型")
        return false ;
      }
      var zaoxing = $("select[name=zaoxing]").val()
      if(!zaoxing) {
        showMessage("请选择造型数量");
        return false ;
      }

      var sheying = $("select[name=sheying]").val();
      if(!sheying) {
        showMessage("请选择摄影师");
        return false ;
      }
      
      var huazhuang = $("select[name=huazhuang]").val()
      if(!huazhuang) {
        showMessage("请选择化妆师");
        return false ;
      }

      var count = $("select[name=count]").val();
      if(!count) {
        showMessage("请选择精修数量");
        return false ;
      }

      var mobile = $("input[name=phone]").val();
      if(!mobile) {
        showMessage("请填写手机号码");
        return false ;
      }
      var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;  
      if(!myreg.test(mobile)) {
        showMessage("请填写正确的手机号码");
        return false ;
      }

      $.post(
        "/get/sheyingprice", 
        "city="+city+"&shangjia=" + shangjia+ "&zaoxing="+zaoxing+"&sheying="+
        sheying+"&huazhuang="+huazhuang+"&count="+count+"&mobile="+mobile, 
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
    
    function showMessage(message){
        alert(message);
    }
});

</script>
  <div class="tittp">有榜数据说明</div>
<div id="fugai" class="time-box">
   <div class="txtshuju lft fgchs">
                    <span class="blue">200+ </span>数据覆盖城市</div>
                    <div class="txtshuju lft fgshh">
                <span class="blue">120,000+ </span>实时分析商户
                </div>
                <div class="txtshuju lft fgcaiji">
                    <span class="blue">10 </span>数据采集渠道 </div>
<div class="txtshuju lft fgweidu">
                    <span class="blue">18 </span>数据统计维度</div>
<div class="txtshuju lft fgxinren">
                    <span class="blue">40,000 </span>对结婚新人</div>
<div class="txtshuju lft fgpinglun">
                    <span class="blue">2,000万+ </span>用户真实点评</div><div class="clear"></div> </div>

                    <div class="case_box">
                      <div class="tittx">2018最新客片案例欣赏</div>
    <div id="picScroll" class="picScroll txtCtr">
        <div class="bd">
            <ul>
                                <li>
        <div class="anli_touxiang"><img src="//img2.youbangkeyi.com/uploads/cover/0bc801e2a31f893a032a7980f090c073.jpg?imageView2/1/w/300/h/300/q/75|imageslim"></div>
            <p><a href="/kpdetail/159593">聚焦摄影7996套系</a></p>
            <span class="anli_month">
                <em class="fl">发布于
                    06-26 15:11                </em>
                <em class="fr">浏览104次</em></span>
                                               <span class="img">
                                                                                <a class="yulan  glightbox0" href="//img2.youbangkeyi.com/296/0dd/017/2960ddb8c5590175f82f86cb5bb31e16.jpg">
                          <img src="//img2.youbangkeyi.com/296/0dd/017/2960ddb8c5590175f82f86cb5bb31e16.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7996套系"></a>
                                                                                                            <a class="yulan  glightbox0" href="//img2.youbangkeyi.com/d9c/10c/d46/d9c10c872131d46a3523c547300fca74.jpg">
                          <img src="//img2.youbangkeyi.com/d9c/10c/d46/d9c10c872131d46a3523c547300fca74.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7996套系"></a>
                                                                                                            <a class="yulan  glightbox0" href="//img2.youbangkeyi.com/39c/951/c8f/39c951733db8c8fd3918762c241c6f47.jpg">
                          <img src="//img2.youbangkeyi.com/39c/951/c8f/39c951733db8c8fd3918762c241c6f47.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7996套系"></a>
                                                                                                            <a class="yulan  glightbox0" href="//img2.youbangkeyi.com/4e1/a85/c63/4e1a85af537ac63c0544515d3f0b9d64.jpg">
                          <img src="//img2.youbangkeyi.com/4e1/a85/c63/4e1a85af537ac63c0544515d3f0b9d64.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7996套系"></a>
                                                                                                            <a class="yulan  glightbox0" href="//img2.youbangkeyi.com/ab1/b4f/068/ab1b4f5a4fcb06845b2ecc5e805a2e5d.jpg">
                          <img src="//img2.youbangkeyi.com/ab1/b4f/068/ab1b4f5a4fcb06845b2ecc5e805a2e5d.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7996套系"></a>
                                                                                        
                                                </span>
                        <div href="javascript:" class="anlibj down anliclick">
                            获取该案例报价                        </div>
                </li>
                                <li>
        <div class="anli_touxiang"><img src="//img2.youbangkeyi.com/uploads/cover/0bc801e2a31f893a032a7980f090c073.jpg?imageView2/1/w/300/h/300/q/75|imageslim"></div>
            <p><a href="/kpdetail/159592">聚焦摄影7989套系</a></p>
            <span class="anli_month">
                <em class="fl">发布于
                    06-26 15:11                </em>
                <em class="fr">浏览111次</em></span>
                                               <span class="img">
                                                                                <a class="yulan  glightbox1" href="//img2.youbangkeyi.com/de1/ff8/dd5/de1ff8aa5a4fdd5c61a78ad6e9a0b250.jpg">
                          <img src="//img2.youbangkeyi.com/de1/ff8/dd5/de1ff8aa5a4fdd5c61a78ad6e9a0b250.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7989套系"></a>
                                                                                                            <a class="yulan  glightbox1" href="//img2.youbangkeyi.com/0d2/aeb/362/0d2aebdbb1033621aae4f0832af4b9ed.jpg">
                          <img src="//img2.youbangkeyi.com/0d2/aeb/362/0d2aebdbb1033621aae4f0832af4b9ed.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7989套系"></a>
                                                                                                            <a class="yulan  glightbox1" href="//img2.youbangkeyi.com/ad3/eda/58f/ad3eda97550058fb4dc7e7dc10813656.jpg">
                          <img src="//img2.youbangkeyi.com/ad3/eda/58f/ad3eda97550058fb4dc7e7dc10813656.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7989套系"></a>
                                                                                                            <a class="yulan  glightbox1" href="//img2.youbangkeyi.com/50a/afb/1df/50aafb5333181df5ce9453b7b8a4646d.jpg">
                          <img src="//img2.youbangkeyi.com/50a/afb/1df/50aafb5333181df5ce9453b7b8a4646d.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7989套系"></a>
                                                                                                            <a class="yulan  glightbox1" href="//img2.youbangkeyi.com/dc1/8ea/bd6/dc18ea8dab47bd6168d1353aa289c32d.jpg">
                          <img src="//img2.youbangkeyi.com/dc1/8ea/bd6/dc18ea8dab47bd6168d1353aa289c32d.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影7989套系"></a>
                                                                                              
                                                </span>
                        <div href="javascript:" class="anlibj down anliclick">
                         获取该案例报价                     </div>
                </li>
                                <li>
        <div class="anli_touxiang"><img src="//img2.youbangkeyi.com/uploads/cover/0bc801e2a31f893a032a7980f090c073.jpg?imageView2/1/w/300/h/300/q/75|imageslim"></div>
            <p><a href="/kpdetail/159591">聚焦摄影旅拍</a></p>
            <span class="anli_month">
                <em class="fl">发布于
                    06-26 15:11                </em>
                <em class="fr">浏览103次</em></span>
                                               <span class="img">
                                                                                <a class="yulan  glightbox2" href="//img2.youbangkeyi.com/4d9/993/4fe/4d9993dc91cc4fe1b3267f3770cfeadb.jpg">
                          <img src="//img2.youbangkeyi.com/4d9/993/4fe/4d9993dc91cc4fe1b3267f3770cfeadb.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影旅拍"></a>
                                                                                                            <a class="yulan  glightbox2" href="//img2.youbangkeyi.com/f12/b35/839/f12b351065e58393c38a7d1def93ba57.jpg">
                          <img src="//img2.youbangkeyi.com/f12/b35/839/f12b351065e58393c38a7d1def93ba57.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影旅拍"></a>
                                                                                                            <a class="yulan  glightbox2" href="//img2.youbangkeyi.com/193/739/c7f/193739dcafdfc7fb317ab7d606a63c85.jpg">
                          <img src="//img2.youbangkeyi.com/193/739/c7f/193739dcafdfc7fb317ab7d606a63c85.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影旅拍"></a>
                                                                                                            <a class="yulan  glightbox2" href="//img2.youbangkeyi.com/526/0b6/51c/5260b6d862cf51c3763f914787143305.jpg">
                          <img src="//img2.youbangkeyi.com/526/0b6/51c/5260b6d862cf51c3763f914787143305.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影旅拍"></a>
                                                                                                            <a class="yulan  glightbox2" href="//img2.youbangkeyi.com/90e/583/910/90e5838fcc7d910db5752e4ce85edcb9.jpg">
                          <img src="//img2.youbangkeyi.com/90e/583/910/90e5838fcc7d910db5752e4ce85edcb9.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影旅拍"></a>
                                                                                                            <a class="yulan  glightbox2" href="//img2.youbangkeyi.com/c81/889/bd4/c81889b32c47bd460f0f3df6c8808016.jpg">
                          <img src="//img2.youbangkeyi.com/c81/889/bd4/c81889b32c47bd460f0f3df6c8808016.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影旅拍"></a>
                                                                                                            <a class="yulan  glightbox2" href="//img2.youbangkeyi.com/193/739/c7f/193739dcafdfc7fb317ab7d606a63c85.jpg">
                          <img src="//img2.youbangkeyi.com/193/739/c7f/193739dcafdfc7fb317ab7d606a63c85.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影旅拍"></a>
                                                                                                            <a class="yulan  glightbox2" href="//img2.youbangkeyi.com/680/838/f23/680838d54c45f237d962fece972932ab.jpg">
                          <img src="//img2.youbangkeyi.com/680/838/f23/680838d54c45f237d962fece972932ab.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影旅拍"></a>
                                                                                                            <a class="yulan  glightbox2" href="//img2.youbangkeyi.com/b87/ed1/54b/b87ed14e1a5854b6bf892bbab1623a66.jpg">
                          <img src="//img2.youbangkeyi.com/b87/ed1/54b/b87ed14e1a5854b6bf892bbab1623a66.jpg?imageView2/1/w/500/h/500/q/75|imageslim" alt="聚焦摄影旅拍"></a>
                                                                              
                                                </span>
                        <div href="javascript:" class="anlibj down anliclick">
                         获取该案例报价            </div>
                </li>
                            </ul>        </div>
    </div>
  <div class="ckaqb"><a href="/kplist/2882">查看更多</a></div>
</div>

<link rel="stylesheet" href="/css/glightbox.css">
<script src="/js/glightbox.min.js"></script>
  <script>
              var lightbox = GLightbox({selector: 'glightbox0'});
              var lightbox = GLightbox({selector: 'glightbox1'});
              var lightbox = GLightbox({selector: 'glightbox2'});
      
  </script>
<div class="unit-footer"><div class="peace-live"><p class="txt-cont">全网数据监测 | 排名客观权威</p><p class="logo-cont"><span class="safeguard"></span><span class="font1">有榜网·</span><span class="font1">放心选</span></p></div></div>
 <div class="foot">
        <div class="foots">
            <span><a href="/about.html">关于有榜</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a target="_blank" href="/mianze.html">免责说明</a>|<a href="/shuoming.html" target="_blank">服务说明</a>|<a target="_blank" href="//c.youbangkeyi.com/images/yingyezhizhao.jpeg">营业执照</a></span>
            京ICP备18024234号-2 北京有榜信息科技有限公司 
            <span class="gongan">京公网安备 11010802024698号</span>
        </div>
        <div class="lian"><a rel="nofollow" target="_blank" href="http://www.saic.gov.cn/scs/index.html"><img alt="国家工商行政管理总局" src="//c.youbangkeyi.com/images/scs_logo.png"></a></div>
    </div>
</footer>
    </div>
</div>
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
                    <p data-id="110100"> <a href="/beijing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">北京</a></p>
                    <p data-id="110101"> <a href="/tianjin/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">天津</a></p>
                    <p data-id="110102"><a href="/shenyang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">沈阳</a></p>
                    <p data-id="110103"><a href="/dalian/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">大连</a></p>
                    <p data-id="110104"><a href="/haerbin/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">哈尔滨</a></p>
                    <p data-id="110105"><a href="/shijiazhuang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">石家庄</a></p>
                    <p data-id="1101041"><a href="/taiyuan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">太原</a></p>
                    <p data-id="1101042"><a href="/changchun/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长春</a></p>
                    <p data-id="1101043"><a href="/tangshan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">唐山</a></p>
                    <p data-id="1101044"><a href="/qinhuangdao/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">秦皇岛</a></p>
                    <p data-id="1101045"><a href="/langfang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">廊坊</a></p>
                    <p data-id="1101046"><a href="/baoding/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">保定</a></p>
                    <p data-id="1101047"><a href="/bangbu/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">蚌埠</a></p>
                    <p data-id="1101048"><a href="/jinzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">锦州</a></p>
                    <p data-id="1101049"><a href="/daqing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">大庆</a></p>
                    <p data-id="1101040"><a href="/changzhi/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长治</a></p>
               <span class="city-letter">华东地区</span> 
                    <p data-id="110107"> <a href="/shanghai/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">上海</a></p>
                    <p data-id="110106"> <a href="/hangzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">杭州</a></p>
                    <p data-id="110108"><a href="/xiamen/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">厦门</a></p>
                    <p data-id="110109"><a href="/nanjing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南京</a></p>
                    <p data-id="110110"><a href="/suzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">苏州</a></p>
                    <p data-id="110111"><a href="/wuxi/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">无锡</a></p>
                    <p data-id="110112"><a href="/ningbo/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">宁波</a></p>
                    <p data-id="110113"><a href="/fuzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">福州</a></p>
                    <p data-id="110114"><a href="/qingdao/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">青岛</a></p>
                    <p data-id="110115"><a href="/hefei/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">合肥</a></p>
                    <p data-id="1101121"><a href="/jinan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">济南</a></p>
                    <p data-id="1101122"><a href="/changzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">常州</a></p>
                    <p data-id="1101123"><a href="/wenzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">温州</a></p>
                    <p data-id="1101124"><a href="/quanzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">泉州</a></p>
                    <p data-id="1101125"><a href="/nantong/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南通</a></p>
                    <p data-id="1101126"><a href="/xuzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">徐州</a></p>
                    <p data-id="1101127"><a href="/wuhu/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">芜湖</a></p>
                    <p data-id="1101128"><a href="/weifang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">潍坊</a></p>
                    <p data-id="1101129"><a href="/yangzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">扬州</a></p>
                    <p data-id="1101120"><a href="/jinhua/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">金华</a></p>
                    <p data-id="11011"><a href="/linyi/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">临沂</a></p>
                    <p data-id="11012"><a href="/huzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">湖州</a></p>
                    <p data-id="11013"><a href="/yancheng/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">盐城</a></p>
                    <p data-id="11014"><a href="/shaoxing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">绍兴</a></p>
                    <p data-id="11015"><a href="/jiaxing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">嘉兴</a></p>
                    <p data-id="11016"><a href="/huaian/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">淮安</a></p>
                    <p data-id="11017"><a href="/maanshan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">马鞍山</a></p>
                    <p data-id="11018"><a href="/taian/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">泰安</a></p>
            <span class="city-letter">中部西部</span> 
                    <p data-id="110116"><a href="/chengdu/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">成都</a></p>
                    <p data-id="110117"><a href="/chongqing/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">重庆</a></p>
                    <p data-id="110118"><a href="/changsha/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">长沙</a></p>
                    <p data-id="110119"><a href="/zhengzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">郑州</a></p>
                    <p data-id="110120"><a href="/xian/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">西安</a></p>
                    <p data-id="110121"><a href="/wuhan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">武汉</a></p>
                    <p data-id="1101191"><a href="/nanchang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南昌</a></p>
                    <p data-id="1101192"><a href="/lanzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">兰州</a></p>
                    <p data-id="1101193"><a href="/yichang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">宜昌</a></p>
                    <p data-id="1101194"><a href="/kunming/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">昆明</a></p>
                    <p data-id="1101195"><a href="/guiyang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">贵阳</a></p>
                    <p data-id="1101196"><a href="/hanzhong/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">汉中</a></p>
                    <p data-id="1101197"><a href="/hengyang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">衡阳</a></p>
                  <span class="city-letter">华南地区</span>
                    <p data-id="110122"> <a href="/guangzhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">广州</a></p>
                    <p data-id="110123"><a href="/shenzhen/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">深圳</a></p>
                    <p data-id="1101231"><a href="/sanya/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">三亚</a></p>
                     <p data-id="1101232"><a href="/nanning/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">南宁</a></p>
                     <p data-id="1101233"><a href="/zhuhai/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">珠海</a></p>
                     <p data-id="1101234"><a href="/haikou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">海口</a></p>
                     <p data-id="1101235"><a href="/guilin/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">桂林</a></p>
                    <p data-id="1101236"><a href="/foshan/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">佛山</a></p>
                     <p data-id="1101237"><a href="/huizhou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">惠州</a></p>
                    <p data-id="1101238"> <a href="/shantou/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">汕头</a></p>
                     <p data-id="1101239"><a href="/jiangmen/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">江门</a></p>
                    <p data-id="1101230"><a href="/dong_/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">东莞</a></p>
                    <p data-id="11012311"><a href="/zhanjiang/<?php echo $type;?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">湛江</a></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/city.js"></script>
<script type="text/javascript" src="/js/layer/layer.js"></script>
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
                alert("亲，手机号填写有误哦");
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
                    alert("预约成功" + '\n' + "请注意接听商家的来电！");
                    location.reload();
                }
            }
        });
    });
    $(".package").click(function(){
        $("#tenantsId").val($(this).attr("id"));
        $("#packagemessage").html($(this).attr("message"));
        console.log($(this).attr("message"));
    });
    $(".sybj").click(function(){
        $("#tenantsId").val($(this).attr("data-id"));
    });
</script>

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
        // 数据初始化
    var Obj = $('#yuyuea').barrage({
        data : data, //数据列表
        row : 1,   //显示行数
        time : 5000, //间隔时间
        gap : 10,    //每一个的间隙
        position : 'fixed', //绝对定位
        direction : 'bottom left', //方向
        ismoseoverclose : true, //悬浮是否停止
        height : 30, //设置单个div的高度
    })
    Obj.start(); 
</script>
</div>
</body>
</html>
