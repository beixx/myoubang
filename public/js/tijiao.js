
    $('button[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var city = $('#pcity').val();
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
            data: {'tenantsId': tenantsId,"city":city,'phone': phone,'source':source},
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
    $(".freeclick").click(function(){
        $("#source").val(5);
        $("#titlefield").html("提交信息，预约拍摄档期");
        $("#tijiao").html("免费咨询档期");
        $("#mobile").attr("placeholder","请输入手机号 · 商家3分钟内会联系您！");
    })
});