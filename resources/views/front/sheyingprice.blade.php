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
    <a href="javascript:" class="ask rgt">婚纱照计算器<em>(30秒算出·1077人已计算)</em></a>
</div>
  <!-- <div class="go_shake_img"></div> -->
  <div class="calculator_box">
    <div class="select_b">
      <h2><span>点击上面的按钮我就能下去哦！</span></h2>
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