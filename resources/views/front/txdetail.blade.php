<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="<?php echo $keyword;?>">
    <meta name="description" content="<?php echo $desc?>">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/jquery-1.7.1.min.js"></script>
    <script src="//m1.youbangkeyi.cn/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="//m1.youbangkeyi.cn/js/foot.js"></script>
    <style type="text/css">body{background:#f0f0f0;}</style>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1211ad93505007e7eb6df7f6f05c4e8d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body class="view">
<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">套餐详情</div>
    <div class="share"></div>
</header>
<div class="focus_box">
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php foreach($info['cover'] as $v) { ?>
                <li class="suolvd">
                    <span>
                        <?php if(strpos($v,'http') === false) {?>
                        <img src="http://img2.youbangkeyi.cn<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" />
                        <?php } else {?>
                            <img src="<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" />
                        <?php } ?>
                        <img src="http://img2.youbangkeyi.cn<?php echo $v;?>?imageView2/1/w/800/h/600/q/75|imageslim" />
                    </span>
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
        <span class="lft red fa">¥<?php echo $info['currentPrice'];?></span>
        <del class="lft fa">¥<?php echo $info['price'];?></del>
        <h2 class="txtRgt rgt"><?php echo $info['setName'];?></h2>
    </div>
</div>
<div class="jisuanqi click_are" onclick="showaa(this)"> <?php if($tenants['shoptype']=='婚纱摄影') { ?><div class="suan-wen"><p>定制这样的婚纱照多少钱？</p><span>试试婚纱摄影计算器</span></div> <?php } else { ?><div class="suan-wen"><p>算算定制这样的婚礼多少钱？</p><span>试试婚礼计算器</span></div> <?php } ?></div>
<div class="shop_box">
    <div class="titdp">店铺信息</div>
    <?php if($tenants['isVip'] == 2) { ?>
    <div class="huiyuan"></div>
    <?php } ?>
  <div class="zysm">排名权威有保障，由有榜网对商家全网大数据分析得出！</div>
    <div class="txt-box">
        <h1><a href="/shop/<?php echo $tenants['id'];?>"><?php echo $tenants['name'];?></a></h1>
        <div class="t1">人均消费<span class="red">¥<?php echo $tenants['person_price'];?></span></div>
        <div class="num fa txtCtr">
            <?php echo $tenants['order_city'];?><div class="pmt1"><span>TOP</span></div>
        </div>
    </div>
</div>
<div class="titjs">套餐介绍</div>
<div class="txt-info">
    <?php echo $info['detail'];?>
</div>
<div class="tittp">图文详情</div>
<div class="info">
    <?php foreach($info['picDetail'] as $v) { ?>
        <?php if(strpos($v,'http') === false) {?>
            <img src="http://img2.youbangkeyi.cn<?php echo $v;?>">
        <?php } else {?>
            <img src="<?php echo $v;?>">
        <?php } ?>

    <?php } ?>
</div>
<div class="tit"><?php echo $tenants['name'];?>专属定制热卖产品</div>
<div class="hot">
    <ul>
        <?php foreach($remmends as $v) { ?>
        <li>
            <a class="suolvl" href="/detail/<?php echo $tenants['id'].'/'.$v['id'];?>">
               <span>
                   <?php if(strpos($v['cover'][0],'http') === false) {?>
                   <img src="//img2.youbangkeyi.cn<?php echo $v['cover'][0]?>?imageView2/1/w/400/h/300/q/75|imageslim">
                   <?php } else {?>
                       <img src="<?php echo $v['cover'][0]?>?imageView2/1/w/400/h/300/q/75|imageslim">
                   <?php } ?>
               </span>  </a><p><?php echo $v['setName'];?></p>
                <div class="price">
                    <span class="red">¥<?php echo $v['currentPrice'];?></span>
                    <del>¥<?php echo $v['price'];?></del>
                </div>
        </li>
        <?php } ?>
    </ul>
</div>
<div class="tel-box txtCtr">
   <a href="javascript:" class="ask rgt down">咨询档期<em>(已有<?php echo $tenants['count2'];?>人咨询)</em></a>
</div>
<div class="bgDiv"></div>
<div class="downNav" style="background: #FFF;border-radius: 0.3rem 0.3rem 0 0;height:19rem;">
    <div class="ask">
        <h4>咨询档期,预约即可领取：</h4>
        <dl class="vip">
                <dt><i class="vipcon"></i></dt>
                <dd>获得有榜网一对一VIP服务，全程免费</dd>
            </dl>
        <dl class="vip">
                <dt><i class="youhuicon"></i></dt>
                <dd><?php echo $tenants['package']?$tenants['package']:'预约到店免费赠送超值结婚大礼包';?></dd>
            </dl>
        <div class="tip">
            <span>7天内选片</span><span>15天出精修</span><span>不满意重拍</span><span>无隐形消费</span>
        </div>
        <p>留下您的联系方式以便商户尽快联系你</p>
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="text" name="mobile" id="mobile" class="input" placeholder="输入手机号，享受以上福利">
        <input type="submit" name="wapsubmit" class="btn" value="咨询档期">
    </div>

</div>

 <?php if($tenants['shoptype']=='婚纱摄影') { ?>
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


<div id="12" class="bottom_slide_box aa_hide">
  <div onclick="showaa(this)" class="click_are"></div>
 <div class="click_img"><span class="money">拍婚纱照多少钱？</span><span class="suansuan">98%的新人选择，提前算一算</span></div>
  <!-- <div class="go_shake_img"></div> -->
  <div class="calculator_box">
    <div class="select_b">
      <h2><span>今天已有 <em>940</em> 位新人获取了婚纱照预算</span></h2>
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
                  <option value="<?php echo $city;?>">--<?php echo $city;?>--</option>
                    <option value="北京">北京</option>
                    <option value="天津">天津</option>
                    <option value="沈阳">沈阳</option>
                    <option value="石家庄">石家庄</option>
                    <option value="哈尔滨">哈尔滨</option>
                    <option value="太原">太原</option>
                    <option value="长春">长春</option>
                    <option value="唐山">唐山</option>
                    <option value="秦皇岛">秦皇岛</option>
                    <option value="大连">大连</option>
                    <option value="廊坊">廊坊</option>
                    <option value="保定">保定</option>
                    <option value="蚌埠">蚌埠</option>
                    <option value="锦州">锦州</option>
                    <option value="大庆">大庆</option>
                    <option value="长治">长治</option>
                    <option value="上海">上海</option>
                    <option value="杭州">杭州</option>
                    <option value="南京">南京</option>
                    <option value="厦门">厦门</option>
                    <option value="青岛">青岛</option>
                    <option value="苏州">苏州</option>
                    <option value="济南">济南</option>
                    <option value="无锡">无锡</option>
                    <option value="常州">常州</option>
                    <option value="合肥">合肥</option>
                    <option value="温州">温州</option>
                    <option value="宁波">宁波</option>
                    <option value="福州">福州</option>
                    <option value="泉州">泉州</option>
                    <option value="南通">南通</option>
                    <option value="徐州">徐州</option>
                    <option value="芜湖">芜湖</option>
                    <option value="潍坊">潍坊</option>
                    <option value="扬州">扬州</option>
                    <option value="金华">金华</option>
                    <option value="临沂">临沂</option>
                    <option value="湖州">湖州</option>
                    <option value="盐城">盐城</option>
                    <option value="绍兴">绍兴</option>
                    <option value="嘉兴">嘉兴</option>
                    <option value="淮安">淮安</option>
                    <option value="马鞍山">马鞍山</option>
                    <option value="泰安">泰安</option>
                    <option value="成都">成都</option>
                    <option value="重庆">重庆</option>
                    <option value="长沙">长沙</option>
                    <option value="郑州">郑州</option>
                    <option value="西安">西安</option>
                    <option value="武汉">武汉</option>
                    <option value="南昌">南昌</option>
                    <option value="兰州">兰州</option>
                    <option value="宜昌">宜昌</option>
                    <option value="昆明">昆明</option>
                    <option value="贵阳">贵阳</option>
                    <option value="汉中">汉中</option>
                    <option value="衡阳">衡阳</option>
                    <option value="广州">广州</option>
                    <option value="深圳">深圳</option>
                    <option value="三亚">三亚</option>
                    <option value="南宁">南宁</option>
                    <option value="珠海">珠海</option>
                    <option value="海口">海口</option>
                    <option value="桂林">桂林</option>
                    <option value="佛山">佛山</option>
                    <option value="惠州">惠州</option>
                    <option value="汕头">汕头</option>
                    <option value="江门">江门</option>
                    <option value="东莞">东莞</option>
                    <option value="湛江">湛江</option>
              </select>
          </div>
      </div>
      <div class="form_line">
          <div class="element triangle">
                  <select name="shangjia" id="xuqiu" class="first_lin">
                  <option value="">--选择商家类型--</option>
                  <option value="资深级">中端商家</option>
                  <option value="总监级">高端商家</option>
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
                   <select  name="sheying"  id="xuqiu" class="first_lin">
                  <option value="">--选择摄影师--</option>
                  <option value="资深级">资深级</option>
                  <option value="总监级">总监级</option>
                  <option value="资深级">首席摄影师</option>
              </select>
               <select name="huazhuang" id="xuqiu" class="first_lin fr">
                  <option value="">--选择化妆师--</option>
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
      <button  href="javascript:void(0)" onclick="one()" class="star_calculator">
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
<span id='setnumall'>4738</span>
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
    
    })
    
    function showMessage(message){
        alert(message);
    }
});

</script>
                    <?php } else { ?>
                
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


<div id="12" class="bottom_slide_box aa_hide">
  <div onclick="showaa(this)" class="click_are"></div>
 <div class="click_img"><span class="money">办一场婚礼多少钱？</span><span class="suansuan">98%的新人选择，提前算一算</span></div>
  <!-- <div class="go_shake_img"></div> -->
  <div class="calculator_box">
    <div class="select_b">
      <h2><span>今天已有 <em>940</em> 位新人获取了婚礼预算</span></h2>
        <div class="num-frame">
                <div class="yuan"><p>元</p></div>
                <div class="num-window clearfix clear">
        <em id="setnum">?</em>
                </div>
            </div>

            <div class="form_line">
          <div class="element triangle">
                <select name="city"  id="xuqiu" class="first_line">
                  <option value="<?php echo $city;?>">--<?php echo $city;?>--</option>
                    <option value="北京">北京</option>
                    <option value="天津">天津</option>
                    <option value="沈阳">沈阳</option>
                    <option value="石家庄">石家庄</option>
                    <option value="哈尔滨">哈尔滨</option>
                    <option value="太原">太原</option>
                    <option value="长春">长春</option>
                    <option value="唐山">唐山</option>
                    <option value="秦皇岛">秦皇岛</option>
                    <option value="大连">大连</option>
                    <option value="廊坊">廊坊</option>
                    <option value="保定">保定</option>
                    <option value="蚌埠">蚌埠</option>
                    <option value="锦州">锦州</option>
                    <option value="大庆">大庆</option>
                    <option value="长治">长治</option>
                    <option value="上海">上海</option>
                    <option value="杭州">杭州</option>
                    <option value="南京">南京</option>
                    <option value="厦门">厦门</option>
                    <option value="青岛">青岛</option>
                    <option value="苏州">苏州</option>
                    <option value="济南">济南</option>
                    <option value="无锡">无锡</option>
                    <option value="常州">常州</option>
                    <option value="合肥">合肥</option>
                    <option value="温州">温州</option>
                    <option value="宁波">宁波</option>
                    <option value="福州">福州</option>
                    <option value="泉州">泉州</option>
                    <option value="南通">南通</option>
                    <option value="徐州">徐州</option>
                    <option value="芜湖">芜湖</option>
                    <option value="潍坊">潍坊</option>
                    <option value="扬州">扬州</option>
                    <option value="金华">金华</option>
                    <option value="临沂">临沂</option>
                    <option value="湖州">湖州</option>
                    <option value="盐城">盐城</option>
                    <option value="绍兴">绍兴</option>
                    <option value="嘉兴">嘉兴</option>
                    <option value="淮安">淮安</option>
                    <option value="马鞍山">马鞍山</option>
                    <option value="泰安">泰安</option>
                    <option value="成都">成都</option>
                    <option value="重庆">重庆</option>
                    <option value="长沙">长沙</option>
                    <option value="郑州">郑州</option>
                    <option value="西安">西安</option>
                    <option value="武汉">武汉</option>
                    <option value="南昌">南昌</option>
                    <option value="兰州">兰州</option>
                    <option value="宜昌">宜昌</option>
                    <option value="昆明">昆明</option>
                    <option value="贵阳">贵阳</option>
                    <option value="汉中">汉中</option>
                    <option value="衡阳">衡阳</option>
                    <option value="广州">广州</option>
                    <option value="深圳">深圳</option>
                    <option value="三亚">三亚</option>
                    <option value="南宁">南宁</option>
                    <option value="珠海">珠海</option>
                    <option value="海口">海口</option>
                    <option value="桂林">桂林</option>
                    <option value="佛山">佛山</option>
                    <option value="惠州">惠州</option>
                    <option value="汕头">汕头</option>
                    <option value="江门">江门</option>
                    <option value="东莞">东莞</option>
                    <option value="湛江">湛江</option>
              </select>
          </div>
      </div>
      <div class="form_line">
          <div class="element triangle">
                  <select name="hotel" id="xuqiu" class="first_line">
                  <option value="">--请选择酒店价位--</option>
                  <option data-value="1500" value="1000-2000">1000-2000</option>
                  <option data-value="2500" value="2000-3000">2000-3000</option>
                  <option data-value="3500" value="3000-4000">3000-4000</option>
                  <option data-value="5000" value="4000以上">4000以上</option>
              </select>
          </div>
      </div>
            <div class="form_line" id="zxys_phoneInput">
          <div class="element">
              <div class="text_wrap">
                  <input id="shuoshu" placeholder="您的预期桌数" type="text" class="text phonetext" name="zhuoshu">
                  <em class="text_lbl"></em>
              </div>
          </div>
      </div>
      <div class="form_line">
          <div class="element">
              <div class="text_wrap">
                   <select name="xuqiu" id="xuqiu" class="first_line">
                  <option value="">--请选择婚礼档次--</option>
                  <option value="经济型">经济型</option>
                  <option value="中端消费">中端消费</option>
                  <option value="高端消费">高端消费</option>
              </select>
              </div>
          </div>
      </div>
      <div class="form_line" id="zxys_phoneInput">
          <div class="element">
              <div class="text_wrap">
                  <input id="phonenumber" placeholder="输入您的手机" type="text" class="text phonetext" name="phone">
                  <em class="text_lbl"></em>
              </div>
          </div>
      </div>
          <div class="shuom">
          预算结果根据用户真实消费大数据分析计算得出。
          </div>
    </div>
    <div class="result_b">
      <button  href="javascript:void(0)" onclick="one()" class="star_calculator ">
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
<p class="column">您的婚礼预算为</p>
<p class="jaojia">
<span id='setnumall'>0</span>
<i>元</i></p></div>
<div class="t8s-price-list">
<ul><li class="clearfix"><span class="t8s-budget-span">酒店费用：</span><span><em id='hotelprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">婚庆公司费用：</span><span><em id="wedprice">0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">车队费用：</span><span><em id='carprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">婚纱礼服费用：</span><span ><em id='lifuprice'>0</em>元</span></li>
<li class="clearfix"><span class="t8s-budget-span">喜品喜酒费用：</span><span><em id='wineprice'>0</em>元</span></li>

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
  var min = 10000, max = 93000;
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
      var hotel = $("select[name=hotel]").val();
      console.log(hotel);
      if(!hotel){
        showMessage("请选择酒店价位")
        return false ;
      }
      var zhuoshu = $("input[name=zhuoshu]").val()
      if(!zhuoshu) {
        showMessage("请填写预期桌数数量");
        return false ;
      }

      var xuqiu = $("select[name=xuqiu]").val();
      if(!xuqiu) {
        showMessage("请选择婚礼需求");
        return false ;
      }
      
      var mobile = $("input[name=phone]").val();
      if(!mobile) {
        showMessage("请填写手机号码");
      }

      $.post(
        "/get/hunliprice", 
        "city="+city+"&hotel=" + hotel+ "&zhuoshu="+zhuoshu+"&xuqiu="+
        xuqiu+"&mobile="+mobile, 
        function (res, status, xhr) {
            console.log(res);
            $("#hotelprice").html(res.hotelprice);
            $("#wedprice").html(res.wedprice);
            $("#lifuprice").html(res.lifuprice);
            $("#carprice").html(res.carprice);
            $("#wineprice").html(res.wineprice);
            $("#setnumall").html(res.allprice);
        }, 
        'json'
      );
    
    })
    
    function showMessage(message){
        alert(message);
    }
});

</script>

                    <?php } ?>
<script type="text/javascript">

    $('input[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = 14;

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