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
<div class="suan-box txtCtr">
    <a href="javascript:" class="ask rgt">婚礼计算器<em>(30秒算出·1077人已计算)</em></a>
</div>
  <!-- <div class="go_shake_img"></div> -->
  <div class="calculator_box">
    <div class="select_b">
      <h2><span>点击上面的按钮我就能下去哦！</span></h2>
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
                   <option value="大连">大连</option>
                  <option value="哈尔滨">哈尔滨</option>
                  <option value="石家庄">石家庄</option>

                      <option value="上海">上海</option>
                     <option value="杭州">杭州</option>
                      <option value="厦门">厦门</option>
                    <option value="南京">南京</option>
                <option value="苏州">苏州</option>
                      <option value="无锡">无锡</option>
                 <option value="宁波">宁波</option>
                    <option value="福州">福州</option>
                  <option value="青岛">青岛</option>
                    <option value="合肥">合肥</option>

                    <option value="成都">成都</option>
                    <option value="重庆">重庆</option>
                     <option value="长沙">长沙</option>
                    <option value="郑州">郑州</option>
                     <option value="西安">西安</option>
                    <option value="武汉">武汉</option>
                  <option value="总监级">广州</option>
                  <option value="资深级">深圳</option>
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
      <button  href="javascript:void(0)" class="star_calculator ">
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
        return false ;
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
      one();
    
    })
    
    function showMessage(message){
        alert(message);
    }
});

</script>