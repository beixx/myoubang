<div class="bgDiv"></div>
<div class="downNav">
    <div class="ask">
    <div class="tijiao"><p id="titlefield">提交信息，立即预约咨询商家</p>
<p class="current-li"><em>预约礼</em><?php echo $tenants['package']?$tenants['package']:'是否有优惠？预约时请咨询商家';?></p></div>
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="hidden" name="source" id="source" value="1">
        <input type="tel" name="mobile" id="mobile" class="input" placeholder="请输入您的手机号（<?php echo $tenants['package']?$tenants['package']:'免费赠送超值结婚大礼包';?>）">
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
<?php if(isset($tenants['pcount']['count']) &&$tenants['pcount']['count']>0 ) { ?>
<div id="zxsl"></div>
<?php } ?>
<div class="zxyy"><em class="down yuyueclick">免费预约咨询 · 3分钟响应</em></div>
    <?php if(isset($tenants['pcount']['count']) &&$tenants['pcount']['count']>0 ) { ?>
    <script type="text/javascript">
    $('#zxsl').html('今天已有<?php echo $tenants['pcount']['count'];?>人预约该商家').addClass('alert-success').show().delay(1000).fadeOut();
    </script>
    <?php } ?>
