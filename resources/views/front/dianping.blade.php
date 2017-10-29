<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title>有榜-点评</title>
    <meta name="viewport"  content="width=device-width,user-scalable=no">
    <meta name="copyright" content="">
    <meta name="Keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery-2.1.1.js"></script>
    <link rel="stylesheet" href="/css/jquery.range.css" />
    <script type="text/javascript" src="/js/jquery.range.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.single-slider').jRange({
                from: 0,
                to: 60,
                step: 1,
                scale: [-30, 0, 30],
                format: '%s',
                showLabels: true,
                showScale: true
            });
            $("#g1").click(function () {
                var aa = $(".single-slider").val();
                alert(aa);
            });
        });
    </script>
    <style type="text/css">body{background:#f0f0f0}#g1{margin-top:50px;}</style>
</head>
<body>

<header>
    <a href="javascript:history.go(-1)" class="pre"></a>
    <div class="txtCtr title">点评打榜</div>
</header>

<div class="comment">
    <div class="shop_box view" style="padding-bottom:0rem;">
        <div class="huiyuan"></div>
        <div class="titdp">店铺信息</div>
        <div class="txt-box">
            <h1>CD视觉婚纱摄影·轻奢 定制</h1>
            <div class="t1">人均消费<span class="red">¥5647</span></div>
            <div class="num n6 fa txtCtr">
                <em class="blue">3</em>
            </div>
        </div>
    </div>
    <!--评分-->
    <div class="User_ratings User_grade" id="div_fraction0">
        <div class="title">总体打分<span><!-- （<span id="title0" class="fa">0</span>） --></span></div>

        <div class="pf_txt">
            <input type="hidden" class="single-slider" value="0" />

            <div class="num txtCtr">
                <span class="bars_10 fu lft"><em class="fa">-30</em>分</span>
                <span class="bars_10 c"><em class="fa">0</em></span>
                <span class="bars_10 red rgt"><em class="fa">30</em>分</span>
            </div>
        </div>


    </div>
    <div class="contact" style="padding-bottom: 1rem;margin-bottom: 0.5rem;">
        <div class="title">消费金额（元）</div>
        <input type="text" value="" name="" class="money" placeholder="您的消费金额">
    </div>
    <!--表单-->
    <div class="text-input">
        <div class="title">打分理由</div>
        <textarea name="textarea" id="textarea" cols="45" rows="5" placeholder="请认真客观的评价，因为这可以帮助其他新人，并督促商家更好的为新人服务。" style="resize:none"></textarea>
    </div>
    <div class="up-pic">
        <div class="title">单据证明</div>
        <div class="pic-box">
            <div class="pic lft">
                <div class="close"><a href=""></a> </div>
                <img src="/images/img1.jpg">
            </div>
            <div class="pic lft">
                <div class="close"><a href=""></a> </div>
                <img src="/images/img2.jpg">
            </div>
            <div class="up lft">
                <a href="javascript:;" class="file txtCtr lft"><span class="lft fB">+</span><i class="lft">选择文件</i>
                    <input type="file" name="" id="photo_file" type="file" multiple="multiple"  onchange="SeleImg(this);" >
                </a>
            </div>
        </div>

        <div class="tip">为了能够证明真实性，请您上传单据，图片不超过1M</div>
    </div>

    <div class="up-pic">
        <div class="title">上传照片</div>
        <div class="pic-box">
            <div class="pic lft">
                <div class="close"><a href=""></a> </div>
                <img src="/images/img2.jpg">
            </div>
            <div class="pic lft">
                <div class="close"><a href=""></a> </div>
                <img src="/images/img2.jpg">
            </div>
            <div class="up lft">
                <a href="javascript:;" class="file txtCtr lft"><span class="lft fB">+</span><i class="lft">选择文件</i>
                    <input type="file" name="" id="">
                </a>
            </div>
        </div>

        <div class="tip">为了能够证明真实性，请您上传单据，图片不超过1M</div>
    </div>

    <div class="up-face">
        <div class="title">上传个人头像</div>
        <a href="javascript:;" class="file txtCtr lft fB">+
            <input type="file" name="" id="">
        </a>
        <div class="lft up-info">上传个人头像</div>
    </div>


    <div class="contact">
        <div class="title">联系方式</div>
        <input type="text" value="" name="" class="name" placeholder="您的姓名">
        <input type="text" value="" name="" class="tel" placeholder="手机号">

        <p>为了验证评论是由本人填写，并非商家行为，我们保证您的手机号绝对不会泄露。(部分评论会进行电话核实）</p>
    </div>

    <div class="submit">
        <input type="submit" value="提 交" class="txtCtr">
    </div>
    <div class="tips">
        点评和打分都将是其他网友的参考依据，并影响该商户在榜单中的排名。请发布真实、客观的个人消费体验评价。如您遇到威逼、利诱及优惠等干扰而发布的点评或并非本人体验的虚假、恶意点评则打分视为违规。
    </div>




</div>
<script type="text/javascript">
    //模糊搜索商家
    $('#submit').click(function(){
        var keyword = $('#search_keyword').val();
        var city = $('#area').text();
        var url = "http://www.youbangkeyi.com/index/index?city="+city+"&keyword="+keyword;
        location.href=url;
    });

    $('.cy').click(function(){
        $('#area').html($(this).html());
        $('.area2').html($(this).html());
        var type=$("li").filter(".on").attr('tt');
        var city = $(this).html();
        var url = "http://www.youbangkeyi.com/index/index?city="+city;
        location.href=url;
    })

    // 打分
    scale = function (btn, bar, title) {
        this.btn = document.getElementById(btn);
        this.bar = document.getElementById(bar);
        this.title = document.getElementById(title);
        this.step = this.bar.getElementsByTagName("DIV")[0];
        this.init();
    };
    scale.prototype = {
        init: function () {
            var f = this, g = document, b = window, m = Math;
            f.btn.onmousedown = function (e) {
                var x = (e || b.event).clientX;
                var l = this.offsetLeft;
                var max = f.bar.offsetWidth - this.offsetWidth;
                g.onmousemove = function (e) {
                    var thisX = (e || b.event).clientX;
                    var to = m.min(max, m.max(-2, l + (thisX - x)));
                    f.btn.style.left = to + 'px';
                    f.ondrag(m.round(m.max(0, to / max) * 100), to);
                    b.getSelection ? b.getSelection().removeAllRanges() : g.selection.empty();
                };
                g.onmouseup = new Function('this.onmousemove=null');
            };
        },
        ondrag: function (pos, x) {
            this.step.style.width = Math.max(0, x) + 'px';
            var tot = parseInt(pos / 1.65 - 30);
            $("#pingfen").val(tot);
            if(tot > 0){
                this.title.innerHTML ='+'+ tot + '';
            }else{
                this.title.innerHTML ='<font color="#51c987">'+ tot + '</font>';

            }

        }
    }
    new scale('btn0', 'bar0', 'title0');




    //选择图片(上传个人头像)
    function SeleHeadimg(ObjectDom){
        var FormObj = new FormData();
        var files = event.target.files;
        for (var index = 0; index < files.length; index ++)
        {
            var file = files[index];
            EXIF.getData(file, function() {
                FormObj.append("photo[]", file);
                SubmitHeadimgAjax(FormObj);
            });
        };
    };

    //上传图片文件（上传个人头像）
    function SubmitHeadimgAjax(FormObj){
        var ImgHttp = new XMLHttpRequest();

        ImgHttp.onload = function(event){
            var TempObj = JSON.parse(event.target.responseText || "{}");
            if(TempObj.result == "00")
            {
                $("#headimgRegin").html(template("headimgTemp", TempObj || []));
            }else{
                $("#MarkBox").text("照片超过规定大小,上传失败");
            };
            setTimeout(function(){ layer.closeAll(); }, 1500);
        };
        ImgHttp.open("post", "http://www.youbangkeyi.com/index/saveheadimg", true);
        ImgHttp.send(FormObj);
    };


    //选择图片(单据证明)
    function SeleImg(ObjectDom){
        var FormObj = new FormData();
        var files = event.target.files;
        var len = 0;
        for (var index = 0; index < files.length; index ++)
        {
            var file = files[index];
            console.log(file);
            EXIF.getData(file, function() {
                len++;
                FormObj.append("photo[]", files[len-1]);
                if(len==files.length){
                    SubmitImgAjax(FormObj);
                }

            });
        };
    };
    //上传图片文件（单据证明）
    function SubmitImgAjax(FormObj){
        var ImgHttp = new XMLHttpRequest();
        ImgHttp.onload = function(event){
            var TempObj = JSON.parse(event.target.responseText || "{}");
            if(TempObj.result == "00")
            {
                $("#ImgRegin").append(template("ImgTemp", TempObj || []));
                $('.close').click(function(){
                    $(this).parent().remove();
                });
            }else{
                $("#MarkBox").text("照片超过规定大小,上传失败");
            };
            setTimeout(function(){ layer.closeAll(); }, 1500);
        };
        ImgHttp.open("post", "http://www.youbangkeyi.com/index/savedanju", true);
        ImgHttp.send(FormObj);
    };

    //选择图片(上传照片)
    function SelePhoto(ObjectDom){
        var FormObj = new FormData();
        var files = event.target.files;
        var len = 0;
        for (var index = 0; index < files.length; index ++)
        {
            var file = files[index];
            console.log(file);
            EXIF.getData(file, function() {
                len++;
                FormObj.append("photo[]", files[len-1]);
                if(len==files.length){
                    SubmitPhotoAjax(FormObj);
                }

            });
        };
    };
    //上传图片文件（上传照片）
    function SubmitPhotoAjax(FormObj){
        var ImgHttp = new XMLHttpRequest();

        ImgHttp.onload = function(event){
            var TempObj = JSON.parse(event.target.responseText || "{}");
            if(TempObj.result == "00")
            {
                $("#photoRegin").append(template("photoTemp", TempObj || []));
                $('.close').click(function(){
                    $(this).parent().remove();
                });
            }else{
                $("#MarkBox").text("照片超过规定大小,上传失败");
            };
            setTimeout(function(){ layer.closeAll(); }, 1500);
        };
        ImgHttp.open("post", "http://www.youbangkeyi.com/index/savephoto", true);
        ImgHttp.send(FormObj);
    };




    function checkform(){
        if(!$('#pingfen').val()){
            alert('打分不能为空');
            return false;
        }
        if(!$('#content').val()){
            alert('评分理由不能为空');
            return false;
        }
        if(!$('#user_bill').val()){
            alert('单据证明不能为空');
            return false;
        }
        if(!$('#user_photo').val()){
            alert('用户图片不能为空');
            return false;
        }
        if(!$('#user_head').val()){
            alert('用户头像不能为空');
            return false;
        }
        if(!$('#userName').val()){
            alert('用户姓名不能为空');
            return false;
        }
        if(!$('#phone').val()){
            alert('用户电话不能为空');
            return false;
        }else{
            var phone = $('#phone').val();
            if(!(/^1[34578]\d{9}$/.test(phone))){
                alert("手机号码有误，请重填");
                return false;
            }
        }
        return true;
    }
</script>


</body>
</html>