$(function() {
    var left = $('.left');
    var right = $('.right');
    var down = $('.down');
    var up = $('.up');
    var bg = $('.bgDiv');
    var leftNav = $('.leftNav');
    var rightNav = $('.rightNav');
    var downNav = $('.downNav');
    var upNav = $('.upNav');
    var view = $('.view');
    var zxyy = $('.zxyy');
    showNav(left, leftNav, "left");
    showNav(right, rightNav, "right");
    showNav(up, upNav, "up");
    showNav(down, downNav, "down");

    function showNav(btn, navDiv, direction) {
        btn.on('click',
        function() {
            bg.css({
                display: "block",
                visibility: "visible",
                transition: "opacity .5s"
            });
            if (direction == "right") {
                navDiv.css({
                    right: "0px",
                    transition: "right 1s"
                });
            } else if (direction == "left") {
                navDiv.css({
                    left: "0px",
                    transition: "left 1s"
                });
            } else if (direction == "up") {
                navDiv.css({
                    top: "0px",
                    transition: "top 1s"
                });
            } else if (direction == "down") {
                navDiv.css({
                    display: "block",
                    top: "0",
                    visibility: "visible",
                });
                zxyy.css({
                    display: "none",
                });
                $("html").css({
                    "overflow": "hidden"
                });
                $("body").css({
                    "overflow": "hidden"
                });
                $("#mobile").trigger("focus");
            }

        });
    }

    bg.on('click',
    function() {
        hideNav();
    });

    function hideNav() {
        leftNav.css({
            left: "-50%",
            transition: "left .5s"
        });
        rightNav.css({
            right: "-50%",
            transition: "right .5s"
        });
        upNav.css({
            top: "-40%",
            transition: "top .5s"
        });
        downNav.css({
            display: "none",
            webkitTransition: "bottom .5s",
            oTransition: "bottom .5s",
            mozTransition: "bottom .5s",
            transition: "bottom .5s"
        });
        $("body").css({
            "overflow": "scroll"
        });
        $("html").css({
            "overflow": "scroll"
        });
        bg.css({
            display: "none",
            transition: "display 1s"
        });
        zxyy.css({
            display: "block"
        });
    }
});

$(document).ready(function() {
 (function () {
                var showMoreNChildren = function ($children, n) {
                    var $hiddenChildren = $children.filter(":hidden");
                    var cnt = $hiddenChildren.length;
                    for ( var i = 0; i < n && i < cnt ; i++) {
                        $hiddenChildren.eq(i).show();
                    }
                    return cnt-n;
                }

                $(".showmore").each(function () {
                    var pagesize = $(this).attr("pagesize") || 30;
                    var $children = $(this).children();
                    if ($children.length > pagesize) {
                        for (var i = pagesize; i < $children.length; i++) {
                            $children.eq(i).hide();
                        }
          
                        $("<div class='more txtCtr'>加载更多商家</div>").insertAfter($(this)).click(function () {
                            if (showMoreNChildren($children, pagesize) <= 0) {
                                $(this).hide();
                            };
                        });
                    }
                });
            })();
});



    $('button[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var city = $('#pcity').val();
        var source = $("#source").val();
        var ismobile = $("#ismobile").val();

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
            data: {'tenantsId': tenantsId,"ismobile":ismobile,"city":city,'phone': phone,'source':source},
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
        $("#tijiao").html("免费获取报价");
        $("#mobile").attr("placeholder","请输入手机号 · 商家3分钟内会联系您！");
    })
    $(".shenqingclick").click(function(){
        $("#source").val(1);
        $("#titlefield").html("提交信息，申请大数据深度推荐");
        $("#tijiao").html("免费申请");
        $("#mobile").attr("placeholder","请输入手机号，分析师根据需求为您推荐！");
    })
    $(".liwuclick").click(function(){
        $("#source").val(2);
        $("#titlefield").html("提交信息，领取优惠并预约");
        $("#tijiao").html("免费领取优惠");
        $("#mobile").attr("placeholder","请输入手机号 · 商家3分钟内会联系您！");
    })

    $(".dangqiclick").click(function(){
        $("#source").val(4);
        $("#titlefield").html("提交信息，预约拍摄档期");
        $("#tijiao").html("免费咨询档期");
        $("#mobile").attr("placeholder","请输入手机号 · 商家3分钟内会联系您！");
    })
    $(".yuyueclick").click(function(){
        $("#source").val(5);
        $("#titlefield").html("提交信息，立即预约咨询商家");
        $("#tijiao").html("免费咨询档期");
        $("#mobile").attr("placeholder","请输入手机号 · 商家3分钟内会联系您！");
    })
});


//加载城市事件

$('body').on('click', '#zone_ids,#gr_zone_ids', function () {

    $('.container').height($(document).height());

    var zid = $(this).attr('id');

    layer.open({type:1,content:$('.container'),area:['90%','90%'],offset:'8%',title:['请选择地区','background-color:#00b7b7; color:#fff;height:2.5rem;line-height:2.5rem;font-size:0.75rem'],closeBtn:['取消'],shadeClose:true});

     $('.letter').fadeIn(500);
     $('body').css({'overflow':'hidden',"height":'100%'});


});

//选择城市 start

$('body').on('click', '.city-list p', function () {

    var type = $('.container').data('type');

    $('#zone_ids').html($(this).html()).attr('data-id', $(this).attr('data-id'));

    $('#gr_zone_ids').html($(this).html()).attr('data-id', $(this).attr('data-id'));

    layer.closeAll();

    $('.letter').fadeOut(100);
   $('body').css({'overflow':'auto',"height":'100%','position':'relative'});

});
$('body').on('click', '.layui-layer-close', function () {

    layer.closeAll();

    $('.letter').fadeOut(100);
    $('body').css({'overflow':'auto',"height":'100%','position':'relative'});

});
$('body').on('click', '.layui-layer-shade', function () {

    layer.closeAll();

    $('.letter').fadeOut(100);
    $('body').css({'overflow':'auto',"height":'100%','position':'relative'});

});

$('body').on('click', '.letter a', function () {

    var s = $(this).html();

    $('.container').scrollTop(93);

    $('.container').scrollTop($('#' + s + '1').offset().top);

});